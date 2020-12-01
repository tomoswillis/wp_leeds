<?php
/*
    Plugin Name: Leeds Weather api
    description:  Uses open weather data to add leeds weather to the wp api
   
    Author: Tomos Willis
    Version: 1.0.0
*/

add_action('rest_api_init', function() {
    register_rest_route('lw/v1', 'weather', [
        'methods' => 'GET',
        'callback' => 'leeds_weather',
    ]);
});

function leeds_weather() 
{
    $newRequest = new WP_http();

    // weather api link
    $url = "http://api.openweathermap.org/data/2.5/weather?lat=53.8008&lon=1.5491&appid=2496904b60d3fff88efe4f7718f98c34";

    $arguments = array(
        'method' => 'GET',
        'body' => array(),
        'format'  => 'json',
    );

    // Preforms a GET HTTP request 
    $response = $newRequest->get( $url, $arguments );

    // pulls the ['body'] 
    $response = wp_remote_retrieve_body( $response );
    
    $array = json_decode($response);
    

    // checks for server errors
    if ( is_wp_error( $response ) ) {

        $error_message = $response->get_error_message();

        return "Something went wrong: $error_message";

    } else {
        return $array;      
    } // end WP if else
}