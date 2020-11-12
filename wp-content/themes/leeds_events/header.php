<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package leeds_events
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'leeds_events' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$leeds_events_description = get_bloginfo( 'description', 'display' );
			if ( $leeds_events_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $leeds_events_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'leeds_events' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav>
		#site-navigation
		<nav class="md:w-1/2 bg-white fixed z-10 inset-0 h-10 center rounded-b-lg bg-opacity-75">
			<ul class="flex justify-around py-2">
				<li>
					Home
				</li>
				<li>
					Events
				</li>
				<li>
					Food
				</li>
				<li>
					Login
				</li>
			</ul>
		</nav>
		<div id="app" class="sm:mx-5 md:mx-0 my-10">
        <!-- events component -->
			<div>
				<h2 class="text-2xl mb-5 ml-5">Upcoming Events</h2>
				<slider 
					slug-one='manahatta'
					slug-two='box'
					slug-three='byron' 
					slug-four='bills'>
				</slider>
			</div>
		</div> 
	</header>
