<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define('PLUGIN_PATH', plugin_dir_path(__FILE__));

require_once PLUGIN_PATH . 'paypal_donate.php';
require_once PLUGIN_PATH . 'inc/paypal_donate_menu_page.php';
require_once PLUGIN_PATH . 'inc/paypal_donate_settings_template.php';
require_once PLUGIN_PATH . 'inc/paypal_donate_input_template.php';
require_once PLUGIN_PATH . 'inc/paypal_donate_shortcode.php';

?>