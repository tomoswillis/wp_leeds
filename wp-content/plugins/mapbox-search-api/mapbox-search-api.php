<?php
/*
    Plugin Name: Mapbox Lat & Long Search 
    description:  If you need to know the lat and long for your mapbox map use this to find it
   
    Author: Tomos Willis
    Version: 1.0.0
*/


new Smashing_Fields_Plugin();
new mapbox();

class Smashing_Fields_Plugin {

    public function __construct() {
        // Hook into the admin menu
        add_action( 'admin_menu', array( $this, 'create_plugin_settings_page' ));
        add_action( 'admin_init', array( $this, 'setup_sections' ) );
        add_action( 'admin_init', array( $this, 'setup_fields' ) );
        add_action( 'admin_init', array( $this, 'setup_location_sections' ) );
        add_action( 'admin_init', array( $this, 'setup_location_fields' ) );
        add_action( 'admin_menu', array( $this, 'create_plugin_page' ));
    }

// **************************************SETTINGS-PAGE******************************


    public function create_plugin_settings_page() {
        // Add the menu item and page
        $page_title = 'Mapbox Search Settings';
        $menu_title = 'Mapbox Search';
        $capability = 'manage_options';
        $slug = 'smashing_fields';
        $callback = array( $this, 'plugin_settings_page_content' );
        $icon = 'dashicons-admin-plugins';
        $position = 100;
    
        add_submenu_page( 'options-general.php', $page_title, $menu_title, $capability, $slug, $callback );
        
    }
    

    public function plugin_settings_page_content() { ?>
        <div class="wrap">
            <h2>Mapbox Search Settings Page</h2>
            <form method="post" action="options.php">
                <?php
                    settings_fields( 'smashing_fields' );
                    do_settings_sections( 'smashing_fields' );
                    submit_button();
                ?>
            </form>
        </div> <?php
    }

    public function setup_sections() {
        add_settings_section( 'our_first_section', 'Your Mapbox api Token', array( $this, 'section_callback' ), 'smashing_fields' );
    }

    public function section_callback( $arguments ) {
        switch( $arguments['id'] ){
            case 'our_first_section':
                echo 'For the search to work you need your mapbox api key. If you have not already got this please visit https://account.mapbox.com/ and create a token';
                break;
        }
    }


    public function setup_fields() {
        $fields = array(
            array(
                'uid' => 'our_first_field',
                'label' => 'Token',
                'section' => 'our_first_section',
                'type' => 'text',
                'options' => false,
                'placeholder' => 'Paste Here',
                'helper' => 'should look something like this:',
                'supplemental' => 'pk.eyJ1IjoidG9tb3N3aWxsaXMiLCJhojoiY2s3eGdsNHF2MGJzcjNwbzJsejJwcDlseCJ9.WxFWrX5y9ANZHw0PlDfzIw',
                
            )
        );
        foreach( $fields as $field ){
            add_settings_field( $field['uid'], $field['label'], array( $this, 'field_callback' ), 'smashing_fields', $field['section'], $field );
            register_setting( 'smashing_fields', $field['uid'] );
        }
    }
    

    public function field_callback( $arguments ) {
        $value = get_option( $arguments['uid'] ); // Get the current value, if there is one
        if( ! $value ) { // If no value exists
            $value = $arguments['default']; // Set to our default
        }
    
        // Check which type of field we want
        switch( $arguments['type'] ){
            case 'text': // If it is a text field
                printf( '<input name="%1$s" id="%1$s" type="%2$s" placeholder="%3$s" value="%4$s" />', $arguments['uid'], $arguments['type'], $arguments['placeholder'], $value );
                break;
        }
    
        // If there is help text
        if( $helper = $arguments['helper'] ){
            printf( '<span class="helper"> %s</span>', $helper ); // Show it
        }
    
        // If there is supplemental text
        if( $supplimental = $arguments['supplemental'] ){
            printf( '<p class="description">%s</p>', $supplimental ); // Show it
        }
    }


    // **************************************STANDARD PAGE******************************
    public function create_plugin_page() {
        // Add the menu item and page
        $page_title = 'Mapbox Search';
        $menu_title = 'Mapbox Search';
        $capability = 'manage_options';
        $slug = 'mapbox_search';
        $callback = array( $this, 'plugin_page_content' );
        $icon = 'dashicons-admin-site-alt';
        $position = 40;
    
        add_menu_page( $page_title, $menu_title, $capability, $slug, $callback, $icon, $position );

    }

    public function plugin_page_content() { ?>
        <div class="wrap">
            <h2>Mapbox Search Page</h2>
            <form method="post" action="options.php">
                <?php
                    settings_fields( 'mapbox_search' );
                    do_settings_sections( 'mapbox_search' );?>
                    <p>Please ensure you have entered your api key/token in settings-mapbox search</p> <?php
                    submit_button('Get Coordinates');
                ?>
            </form>
        </div> 
        <?php
        $data = new mapbox;
        echo $data->get_api();
    }

    public function setup_location_sections() {
        add_settings_section( 'location_section', 'Search for a location', array( $this, 'section_location_callback' ), 'mapbox_search' );
    }

    public function section_location_callback( $arguments ) {
        switch( $arguments['id'] ){
            case 'location_section':
                echo 'Search for a location and receive the longitude & latitude for the map';
                break;
        }
    }


    public function setup_location_fields() {
        $fields = array(
            array(
                'uid' => 'our_location_field',
                'label' => 'Location',
                'section' => 'location_section',
                'type' => 'text',
                'options' => false,
                'placeholder' => 'Enter Location Here',
                
            )
        );
        foreach( $fields as $field ){
            add_settings_field( $field['uid'], $field['label'], array( $this, 'location_field_callback' ), 'mapbox_search', $field['section'], $field );
            register_setting( 'mapbox_search', $field['uid'] );
        }
    }
    

    public function location_field_callback( $arguments ) {
        $value = get_option( $arguments['uid'] ); // Get the current value, if there is one
        if( ! $value ) { // If no value exists
            $value = $arguments['default']; // Set to our default
        }
    
        // Check which type of field we want
        switch( $arguments['type'] ){
            case 'text': // If it is a text field
                printf( '<input name="%1$s" id="%1$s" type="%2$s" placeholder="%3$s" value="%4$s" />', $arguments['uid'], $arguments['type'], $arguments['placeholder'], $value );
                break;
        }

    }
    // // Our code will go here
};


class mapbox {

    function __construct(){
       
    }

    function get_api() {
        defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

        $newRequest = new WP_http();

        $api_key = get_option('our_first_field');
        $location = get_option('our_location_field');
        
        $url = "https://api.mapbox.com/geocoding/v5/mapbox.places/{$location}.json?access_token={$api_key}";
        
        $arguments = array(
            'method' => 'GET',
            'body' => array(),
            'format'  => 'json',
        );
    
        $response = $newRequest->get( $url, $arguments );
        $response = wp_remote_retrieve_body( $response );
        $array = json_decode($response);

        $array = json_decode(json_encode($array), true);
    
        if ( is_wp_error( $response ) ) {
            $error_message = $response->get_error_message();
            return "Something went wrong: $error_message";
        } else {
           echo json_encode($array['features'][0]['bbox']);
           

        }
    }	




};
