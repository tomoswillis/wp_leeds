<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package leeds_events
 */

get_header();
?>

<div id="app" class=" md:mx-10">
	<div class="mx-10 my-10 md:flex justify-between items-baseline md:my-2">
		<div>
			<h1 class="text-3xl mt-10">All Restaurants</h1>
		</div>
		<form action="/wordpress/search-restaurants/" method="get">
			<div class="md:w-2/5">
				<div class="shadow-md px-2 my-5 flex justify-between rounded-lg">
					<input type="text" name="search_text" placeholder="Search Restaurants" class="bg-transparent w-4/5 pl-2">
					<button type="submit" name="" class="bg-orange-500 w-8 h-8 pt-1 rounded-md my-2 text-white">
						<span class="material-icons">
							search
						</span>
					</button>
				</div>
			</div>
		</form>
	</div>

	
	
	<div class=" rounded-lg">
		<div class="mt-5 flex flex-wrap justify-center">

		<?php if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				$current_post = get_fields();
			?>

				<restaurantsearch :postdata='<?php echo json_encode($current_post); ?>' url='<?php echo get_permalink() ?>' class=""></restaurantsearch>

			<?php endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div>
	</div>
</div>

<?php
get_sidebar();
get_footer();
