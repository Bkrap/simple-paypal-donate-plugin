<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register a custom menu page.
 */
function wpdocs_register_my_custom_menu_page(){

    add_menu_page( 
        'Paypal donate',
        'Paypal donate',
        'manage_options',
        'custompage',
        'my_custom_menu_page',
        'dashicons-buddicons-community',
        90
    ); 

}
add_action( 'admin_menu', 'wpdocs_register_my_custom_menu_page' );
 
/**
 * Display a custom menu page
 */
function my_custom_menu_page(){ ?>

<div class="wrap">
        <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>

        <form action="options.php" method="post">
            <?php 
                // security field
                settings_fields( 'paypal-donate-settings-page' );

                // output settings section here
                do_settings_sections('paypal-donate-settings-page');

                // save settings button
                submit_button( 'Save Settings' );
            ?>
        </form>
    </div>
<?php } 