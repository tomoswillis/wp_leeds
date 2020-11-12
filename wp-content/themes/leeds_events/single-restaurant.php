<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package leeds_events
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php
		while ( have_posts() ) :
			the_post();

			
			var_dump(get_fields());

		
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
