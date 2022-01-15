<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Settings Template
 */
function paypal_donate_settings_init() {

    // Setup settings section
    add_settings_section(
        'myplugin_settings_section',
        'Simple Paypal donate',
        '',
        'paypal-donate-settings-page'
    );

    /************************ REGISTER FIELDS TO RETURN VALUE ****************************** */
    // Register input account field
    register_setting(
        'paypal-donate-settings-page',
        'paypal_donate_input_account',
        array(
            'type'              => 'string',
            'sanitize_callback' => 'sanitize_text_field',
            'default'           => ''
        )
    );

    // Register input label field
    register_setting(
        'paypal-donate-settings-page',
        'paypal_donate_input_label',
        array(
            'type'              => 'string',
            'sanitize_callback' => 'sanitize_text_field',
            'default'           => ''
        )
    );

    // Register input color field
    register_setting(
        'paypal-donate-settings-page',
        'paypal_donate_input_button_color',
        array(
            'type'              => 'string',
            'sanitize_callback' => 'sanitize_text_field',
            'default'           => ''
        )
    );

    // Register input color field [-- button text --]
    register_setting(
        'paypal-donate-settings-page',
        'paypal_donate_input_button_text_color',
        array(
            'type'              => 'string',
            'sanitize_callback' => 'sanitize_text_field',
            'default'           => ''
        )
    );

    // Register input padding field 
    register_setting(
        'paypal-donate-settings-page',
        'paypal_donate_input_button_padding',
        array(
            'type'              => 'string',
            'sanitize_callback' => 'sanitize_text_field',
            'default'           => ''
        )
    );

    // Register input border radius field 
    register_setting(
        'paypal-donate-settings-page',
        'paypal_donate_input_button_border',
        array(
            'type'              => 'string',
            'sanitize_callback' => 'sanitize_text_field',
            'default'           => ''
        )
    );

    // Register clipboard
    register_setting(
        'paypal-donate-settings-page',
        'paypal_donate_clipboard',
        array(
            'type'              => 'string',
            'sanitize_callback' => 'sanitize_text_field',
            'default'           => ''
        )
    );

/************************ ADD INPUT FIELDS ****************************** */
    // Add account field
    add_settings_field(
        'paypal_donate_input_account',
        'Account',
        'paypal_donate_input_account_callback',
        'paypal-donate-settings-page',
        'myplugin_settings_section'
    );

    // Add label field
    add_settings_field(
        'paypal_donate_input_label',
        'Button label',
        'paypal_donate_input_label_callback',
        'paypal-donate-settings-page',
        'myplugin_settings_section'
    );

    // Add color picker field
    add_settings_field(
        'paypal_donate_input_button_color',
        'Button color',
        'paypal_donate_input_button_color_callback',
        'paypal-donate-settings-page',
        'myplugin_settings_section'
    );

    // Add color picker field [-- button text --]
    add_settings_field(
        'paypal_donate_input_button_text_color',
        'Button text color',
        'paypal_donate_input_button_text_color_callback',
        'paypal-donate-settings-page',
        'myplugin_settings_section'
    );

    // Add padding button fiel
    add_settings_field(
        'paypal_donate_input_button_padding',
        'Button padding',
        'paypal_donate_input_button_padding_callback',
        'paypal-donate-settings-page',
        'myplugin_settings_section'
    );

    // Add border radius button fiel
    add_settings_field(
        'paypal_donate_input_button_border',
        'Button border radius',
        'paypal_donate_input_button_border_callback',
        'paypal-donate-settings-page',
        'myplugin_settings_section'
    );

        // Add padding button fiel
        add_settings_field(
            'paypal_donate_clipboard',
            'Button padding',
            'paypal_donate_clipboard_callback',
            'paypal-donate-settings-page',
            'myplugin_settings_section'
        );


}

add_action( 'admin_init', 'paypal_donate_settings_init' );