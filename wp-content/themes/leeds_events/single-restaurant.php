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
<!-- Div with an id of app inits vue and allows it to work -->
	<div id="app" class="">
		<?php
		while ( have_posts() ) :
			the_post();
			$current_post = get_fields();
		?>

		<!-- restaurantresult  is a Vue component. This is for a JS framework and accepts standard stings, numbers, js objects and Arrays. Data being passed if for a single post and being encoded to json then being printed (echoed) -->
			<restaurantresult :current_post='<?php echo json_encode($current_post); ?>'> </restaurantresult>
		
			
		<?php endwhile; // End of the loop.
		?>
	</div>
			
<?php
get_sidebar();
get_footer();
