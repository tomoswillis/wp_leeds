<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package leeds_events
 */

get_header();
?>

	<main id="primary" class="site-main mb-12 mx-2">

		<section class="error-404 not-found">
			<header class="text-center">
			<h1 class="text-5xl mt-10"> 404 </h1>
				<h1 class="text-3xl "> Oh no! Looks like we can't find what you were looking for! </h1>
				<h3 class="text-lg mt-10"> We will work on this, mean while you can use the rest of out site </h3>
			</header><!-- .page-header -->

			<div class="page-content text-center items-center">

				<form role="search" method="get" id="searchform"
						class="searchform text-center mb-10" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<div class="">
							<div class="shadow-md px-2 my-5 flex justify-between rounded-lg center sm:w:-2/5 lg:w-1/3">
								<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" class="bg-transparent w-full pl-2">
								<button class="bg-orange-500 w-8 h-8 pt-1 rounded-md my-2 text-white" type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" >
									<span class="material-icons">
										search
									</span>
								</button>
							</div>
						</div>
					</form>

					<img src='<?php echo get_template_directory_uri()?>/public/static/images/404.jpg' alt="" class='mt-40 w-3/12 mb-5 center'>


			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
