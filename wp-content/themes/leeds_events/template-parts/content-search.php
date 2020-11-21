<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package leeds_events
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div id='app' class=''>
		<searchresult :postdata='<?php echo json_encode(get_fields());?>' url='<?php echo get_permalink() ?>'></searchresult>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
