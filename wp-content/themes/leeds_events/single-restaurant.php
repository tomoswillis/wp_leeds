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

	<div id="app" class="">
		<?php
		while ( have_posts() ) :
			the_post();
			$current_post = get_fields();
		?>

		
			<restaurantresult :current_post='<?php echo json_encode($current_post); ?>'> </restaurantresult>
		
			
		<?php endwhile; // End of the loop.
		?>
	</div>
			
<?php
get_sidebar();
get_footer();
