<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Plugin Name: Simple Paypal donate
 * Plugin URI:        https://web-throne.org
 * Description:       Paypal donate simple plugin
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            WebThrone
 * Author URI:        https://web-throne.org
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       simple-paypal-donate
 */
 
add_action( 'admin_enqueue_scripts', 'mw_enqueue_color_picker' );
function mw_enqueue_color_picker( $hook_suffix ) {
    // first check that $hook_suffix is appropriate for your admin page
    wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_script( 'my-script-handle', plugins_url('dist/script.js', __FILE__ ), array( 'wp-color-picker' ), false, true );
}


define('PLUGIN_PATH', plugin_dir_path(__FILE__));

require_once PLUGIN_PATH . 'paypal_donate.php';
require_once PLUGIN_PATH . 'inc/paypal_donate_menu_page.php';
require_once PLUGIN_PATH . 'inc/paypal_donate_settings_template.php';
require_once PLUGIN_PATH . 'inc/paypal_donate_input_template.php';
require_once PLUGIN_PATH . 'inc/paypal_donate_shortcode.php';
