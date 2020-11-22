<?php
/**
 * leeds_events functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package leeds_events
 */





 /** *********************** Base Template Functions *********************** */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'leeds_events_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function leeds_events_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on leeds_events, use a find and replace
		 * to change 'leeds_events' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'leeds_events', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'leeds_events' ),
				'menu-2' => esc_html__( 'Footer', 'leeds_events' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'leeds_events_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'leeds_events_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function leeds_events_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'leeds_events_content_width', 640 );
}
add_action( 'after_setup_theme', 'leeds_events_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function leeds_events_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'leeds_events' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'leeds_events' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'leeds_events_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function leeds_events_scripts() {
	wp_enqueue_style( 'leeds_events-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'leeds_events-style', 'rtl', 'replace' );

	wp_enqueue_script( 'leeds_events-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'leeds_events_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// ****************** functions ***************************

function scripts()
{
	wp_register_style('style', get_template_directory_uri() . '/public/assets/css/app.css', [], 1, 'all');
	wp_enqueue_style('style');

	wp_register_script('app', get_template_directory_uri() . '/public/assets/js/app.js', [], 1, true);
	wp_enqueue_script('app');
}

add_action('wp_enqueue_scripts' , 'scripts');

// removes Posts and comments from the admin CMS

function post_remove ()      //creating functions post_remove for removing menu item
{ 
   remove_menu_page('edit.php');
   remove_menu_page('edit-comments.php');
}


function get_restaurants(){
	return get_posts(array(
		'posts_per_page'	=> -1,
		'post_type'			=> 'restaurant'
	));
}

function home_page_recommended_restaurants()
{
	
}


//adding action for triggering function call
add_action('admin_menu', 'post_remove'); 

/*Remove WordPress menu from admin bar*/
add_action( 'admin_bar_menu', 'remove_wp_logo', 999 );
function remove_wp_logo( $wp_admin_bar ) {
	$wp_admin_bar->remove_node( 'wp-logo' );
}