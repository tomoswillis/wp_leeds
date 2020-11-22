<?php
/*
    Plugin Name: Simply Form
    description:  A simple contact for that will allow you to see they latest form entry on the dashboard, and get delivered right to your email inbox.
   
    Author: Tomos Willis
    Version: 1.0.0
*/
new simply_form_settings_page;
new simply_form_widget;

add_action('wp_head' , 'simply_contact_form_capture');
add_shortcode('simply_form', 'simply_contact_form');

class simply_form_settings_page {

    public function __construct() {
        // Hook into the admin menu
        add_action( 'admin_menu', array( $this, 'create_simply_form_plugin_settings_page' ));
        add_action( 'admin_init', array( $this, 'simply_form_setup_sections' ) );
        add_action( 'admin_init', array( $this, 'setup_fields' ) );
    }

// **************************************SETTINGS-PAGE******************************


    public function create_simply_form_plugin_settings_page() {
        // Add the menu item and page

        defined( 'ABSPATH' ) or die( 'Unauthorized!' );

        $page_title = 'Simply Form Settings';
        $menu_title = 'Simply Form';
        $capability = 'manage_options';
        $slug = 'simply_form';
        $callback = array( $this, 'simply_form_plugin_settings_page_content' );
        $position = 100;
    
        add_submenu_page( 'options-general.php', $page_title, $menu_title, $capability, $slug, $callback );
        
    }
    

    public function simply_form_plugin_settings_page_content() { ?>
        <div class="wrap">
            <h2>Simply Form Settings Page</h2>
            <form method="post" action="options.php">
                <?php
                    settings_fields( 'simply_form' );
                    do_settings_sections( 'simply_form' );
                    submit_button();
                ?>
            </form>
        </div> <?php
    }

    public function simply_form_setup_sections() {
        add_settings_section( 'simply_form_user_email', 'Email Config', array( $this, 'section_callback' ), 'simply_form' );
    }

    public function section_callback( $arguments ) {
        switch( $arguments['id'] ){
            case 'simply_form_user_email':
                echo '**NOTE** <br> You need to install the plugin POST SMTP and configure this if you want the forms to reach your email';
                break;
        }
    }


    public function setup_fields() {
        $fields = array(
            array(
                'uid' => 'user_email_address',
                'label' => 'Your Email',
                'section' => 'simply_form_user_email',
                'type' => 'text',
                'options' => false,
                'placeholder' => 'your-email@leeds-events.com',
            )
        );
        foreach( $fields as $field ){
            add_settings_field( $field['uid'], $field['label'], array( $this, 'field_callback' ), 'simply_form', $field['section'], $field );
            register_setting( 'simply_form', $field['uid'] );
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
    }

}

class simply_form_widget {

    public function __construct() 
    {
        // Hook into the admin menu
        add_action( 'wp_dashboard_setup', array( $this, 'simply_form_widget' ));
    }

    public function simply_form_widget()
    {
        wp_add_dashboard_widget('simply_form_widget', 'Simply Form latest email' , array($this, 'simply_form_widget_callback'));
    }

   public  function simply_form_widget_callback ()
    { 

        global $wpdb;
        // $result = $wpdb->get_results("select * from wp_simply_form_emails");
        $result = $wpdb->get_results("SELECT * FROM wp_simply_form_emails WHERE ID = (SELECT MAX(id) FROM wp_simply_form_emails)")
        
        ?>
        <div class="wrap">
            <p>Is this still the email you would like the emails to be sent to? : <strong><?php echo get_option('user_email_address') ?></strong> If not, please update in <a href="http://localhost/wordpress/wp-admin/options-general.php?page=simply_form"> settings.</a> 
        </p>

            <div class="">

                <h3 class="text-orange-100"> <strong> Latest contact Queries </strong></h3>

                <table>
                <?php 
                foreach ($result as $email){ ?> 
                    <tr>
                        <td> <?php echo $email->name; ?> </td>
                        <td> <?php echo $email->email; ?> </td>
                        <td> <?php echo $email->content; ?> </td>
                        <?php  
                        } ?>
                    </tr>
                </table>
            </div>
        
        </div> <?php
    }
}



function simply_contact_form() {

    $content = '';

    $content .= '<form class="sm:px-2 lg:px-5" method="post" action="http://localhost/wordpress/thank-you/">';

    $content .= '<label for="user_name" class="font-light text-lg">Name</label>';
    $content .= '<input class="mb-5 w-full border border-grey-200 border-solid rounded-lg py-2 pl-2" type="text" name="user_name" placeholder="Please Enter Your Name"/>';

    $content .= '<label for="user_email" class="font-light text-lg">Email</label>';
    $content .= '<input class="mb-5 w-full border border-grey-200 border-solid rounded-lg py-2 pl-2" type="email" name="user_email" placeholder="Please Enter Your Email"/>';

    $content .= '<label for="user_content" class="font-light text-lg">Content</label>';
    $content .= '<input class="mb-5 w-full border border-grey-200 border-solid rounded-lg py-2 pl-2" type="textarea" name="user_content"/>';

    $content .= '<input type="submit" name="simply_contact_submit" value="Send" class="l-button bg-orange-400 py-2  text-white w-1/3 text-center rounded-lg text-sm my-2">';

    $content .= '</form>';

    return $content;

}

function simply_contact_form_capture() {

    global $wpdb;

    if(isset($_POST['simply_contact_submit']))
    {
        $name = sanitize_text_field($_POST['user_name']);
        $email= sanitize_text_field($_POST['user_email']);
        $content = sanitize_textarea_field($_POST['user_content']);

        $to = get_option('user_email_address');
        $subject = 'Leeds-events contact form';
        $message = $name. ' - '. $email. " - ". $content;


        // TODO: remove var_dump for PROD
                var_dump($message);
        wp_mail($to , $subject , $message);

        $data = array(
            'name' => $name,
            'email' => $email,
            'content' => $content,
        );

        $table_name = 'wp_simply_form_emails';

        // TODO: Protect against SQL injection
        $result =  $wpdb->insert($table_name, $data, $format = NULL);
    }
}

