<?php
/*
    Plugin Name: Mapbox Lat & Long Search 
    description:  If you need to know the lat and long for your mapbox map use this to find it
   
    Author: Tomos Willis
    Version: 1.0.0
*/

class Smashing_Fields_Plugin {

    public function __construct() {
        // Hook into the admin menu
        add_action( 'admin_menu', array( $this, 'create_plugin_settings_page' ));
        add_action( 'admin_init', array( $this, 'setup_sections' ) );
        add_action( 'admin_init', array( $this, 'setup_fields' ) );
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
    

    // public function field_callback( $arguments ) {
    //     echo '<input name="our_first_field" id="our_first_field" type="text" value="' . get_option( 'our_first_field' ) . '" />';
    //     register_setting( 'smashing_fields', 'our_first_field' );
    // }

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
            <h2>Mapbox Search Settings Page</h2>
            <h3>Please ensure you have entered your api key/token in settings-mapbox search</h3>
            <form method="post" action="options.php">
                hello world
            </form>
        </div> <?php

        
    }

    	
    

    // // Our code will go here
};
new Smashing_Fields_Plugin();

