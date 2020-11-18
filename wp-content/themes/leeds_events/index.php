<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package leeds_events
 */

get_header();
?> <?php
	$posts = get_restaurants();
?>


	<div class="flex justify-between min-h-screen items-center">
			<div class="w-full">
				<video autoplay muted loop id="myVideo" class="w-full">
					<source src="wp-content/themes/leeds_events/public/static/videos/header.mp4" type="video/mp4" class="w-full min-h-screen">
				</video>
				<div class="absolute inset-0 flex justify-between items-center px-20 text-white">
					<div class="">
						<h1 class="text-5xl">Welcome to Leeds</h1>
						<p class="text-xl">Live Love Leeds</p>
					</div>
					<div>
						<!-- <h2 class="text-2xl mt-16">Current Weather</h2> -->
					</div>
				</div>
			</div>
		</div>
		<!-- main body -->
		<div id="app" class="sm:mx-5 md:mx-0 my-10">
			<!-- events component -->
			<div>
				<h2 class="text-2xl mb-5 ml-5">Upcoming Events</h2>
			</div>
			<div class=" md:w-full xl:w-10/12 center">
				<eventslider
					slug-one='swanLake'
					slug-two='beerPong'
					slug-three='treeKicks' 
					slug-four='warHorse'
					slug-five='curiousIncident'>
				</eventslider>
			</div>
			<!-- recommended restaurants components -->
			<div>
				<h2 class="text-2xl mb-10 mt-16 text-center" >Our Recommend Restaurants</h2>
				<slider 
					:homepage-requested-posts-id='[
						<?php if( $posts ):
							foreach( $posts as $post ): 
								setup_postdata( $post );
								echo the_id();?>,
							<?php endforeach;
						?>]
						<?php endif; ?>'
					slug-one='manahatta'
					slug-two='box'
					slug-three='byron' 
					slug-four='bills'>
				</slider>
			</div>
		</div>
		
<?php get_footer();
