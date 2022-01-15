<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function donate_shortcode( $atts, $account, $description, $content = null) {

    $site_name = get_bloginfo( 'name' );

    extract(shortcode_atts(array(

        'account'               => get_option('paypal_donate_input_account'),
        'from'                  => $site_name,
        'background_color'      => get_option('paypal_donate_input_button_color'),
        'text_color'            => get_option('paypal_donate_input_button_text_color'),
        'padding'               => get_option('paypal_donate_input_button_padding'),
        'border'                => get_option('paypal_donate_input_button_border'),

    ), $atts));
    
    if(empty($content)) $content = get_option('paypal_donate_input_label');
        return '<div style="display: inline-grid;">
                    <a style="text-decoration-line: none; text-align: center; background-color: '.$background_color.'; color: '.$text_color.'; padding: '.$padding.'; border-radius: '.$border.'" class="simple-paypal-donate-btn" href="https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business='.$account.'&item_name=Donation from '.$from.'" target="_blank">'.$content.'</a>
                    <img class="simple-paypal-donate-main-button" style="width: 200px; height: 70px;" src="https://www.paypalobjects.com/webstatic/mktg/Logo/AM_SbyPP_mc_vs_ms_ae_UK.png">
                </div>';
}

add_shortcode('simple-paypal-donate', 'donate_shortcode');