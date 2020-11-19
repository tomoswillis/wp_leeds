<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package leeds_events
 */

?>

	<footer class="w-full bg-gray-200 p-5 flex flex-wrap static bottom-0">
        <div class="md:w-1/3 pl-5 pr-5">
            <h1 class="text-2xl text-orange-400">News and Offers</h1>
            <p class="font-light">
                We have exclusive news and offers for the biggest events and incredible performances. You may also save yourself money on food and selected events!
            </p>
            <h2 class="font-light text-lg my-2">Email</h2>
            <input type="text" class="w-full border border-grey-200 border-solid rounded-lg py-2">
            <div class="l-button bg-orange-400 py-2  text-white w-1/3 text-center rounded-lg text-sm my-2">
                <p>Get Offers</p> 
            </div>
        </div>
        <div class="md:w-1/3 pl-5 pr-5">
            <h1 class="text-2xl text-orange-400">About Us</h1>
        </div>
        <div class="md:w-1/3 pr-5">
            <h1 class="text-2xl text-orange-400"> Site Map</h1>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
