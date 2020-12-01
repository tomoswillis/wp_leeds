<?php /* Template Name: custom search */

get_header();
?>

<?php 

// restaurant search results have information specific to restaurants, this template allows for that data to be displayed
$text = ' ';
$type = 'restaurant';

     if($_GET['search_text'] && !empty($_GET['search_text']))
	 {
		 $text = $_GET['search_text'];
	 }

?>

<div id="app" class=" md:mx-10">
	<div class="mx-10 my-10 md:flex justify-between items-baseline md:my-2">
		<div>
			<h1 class="text-3xl mt-10">Restaurant Search Results: <?php echo $text; ?></h1>
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


    <?php
        $args = array(
            'post_type' => $type,
            'posts_per_page' => -1,
            's' => $text,
		);
		$query = new WP_Query($args);
		while($query -> have_posts()) : $query -> the_post();
    ?>
        <div class="post inline">
			<restaurantsearch :postdata='<?php echo json_encode(get_fields()); ?>' url='<?php echo get_permalink() ?>' class="inline-block align-top"></restaurantsearch>
            
        </div>    
    <?php endwhile; wp_reset_query(); ?>
</div>

<?php
get_footer();
