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
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
	<link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'leeds_events' ); ?></a>

	<header id="masthead" class="site-header z-50">

		<nav id="site-navigation" class="md:w-1/2 bg-white fixed z-10 inset-0 h-10 center rounded-b-lg bg-opacity-75">
			
			<div class="justify-around headerNav">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>	
			</div>
		</nav>

		<div id="burgerMenu" class="burgerMenu bg-orange-500 w-12 h-12 z-100 object-right rounded-md m-2" >
			<svg width="300" height="300"  fill="white" xmlns="http://www.w3.org/2000/svg">
				
				<path d="M7.94977 11.9498H39.9498" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M7.94977 23.9498H39.9498" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M7.94977 35.9498H39.9498" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
			</svg>

		</div>

		<div id="mobileNav" class="mobileNav absolute w-full h-full text-4xl text-white pr-5 pt-10 text-right font-extrabold absolute">
				<div>
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>	
				</div>
		</div>
	</header>

	<script>
        const burger = document.querySelector('#burgerMenu');
        const nav = document.querySelector('#mobileNav');

		burger.addEventListener('click', ()=>{
			nav.classList.toggle('show');
			nav.classList.toggle('mobileNav');
        })
		
	</script>

