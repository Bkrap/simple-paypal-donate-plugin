<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * input tempalte
 */
function paypal_donate_input_account_callback() {
    $myplugin_input_field_account = get_option('paypal_donate_input_account');
    ?>
    <input type="text" placeholder="donate-me@mail.com" name="paypal_donate_input_account" class="regular-text" value="<?php echo isset($myplugin_input_field_account) ? esc_attr( $myplugin_input_field_account ) : ''; ?>" />
    <?php 
}

function paypal_donate_input_label_callback() {
    $myplugin_input_field_label = get_option('paypal_donate_input_label');
    ?>
    <input type="text" placeholder="Donate now" name="paypal_donate_input_label" class="regular-text" value="<?php echo isset($myplugin_input_field_label) ? esc_attr( $myplugin_input_field_label ) : ''; ?>" />
    <?php 
}

function paypal_donate_input_button_color_callback() {
    $myplugin_input_field_button_color = get_option('paypal_donate_input_button_color');
    ?>
    <input type="text" name="paypal_donate_input_button_color" value="<?php echo isset($myplugin_input_field_button_color) ? esc_attr( $myplugin_input_field_button_color ) : ''; ?>" class="my-color-field" data-default-color="#effeff" />
    <?php 
}

function paypal_donate_input_button_text_color_callback() {
    $myplugin_input_field_button_text_color = get_option('paypal_donate_input_button_text_color');
    ?>
    <input type="text" name="paypal_donate_input_button_text_color" value="<?php echo isset($myplugin_input_field_button_text_color) ? esc_attr( $myplugin_input_field_button_text_color ) : ''; ?>" class="my-color-field" data-default-color="#effeff" />
    <?php 
}

function paypal_donate_input_button_padding_callback() {
    $myplugin_input_field_button_padding = get_option('paypal_donate_input_button_padding');
    ?>
    <!-- <label for="paypal_donate_input_button_padding">Enter button padding:  "25 15" is 25px 15px </label><br> -->
    <input type="text" placeholder="25px 10px" name="paypal_donate_input_button_padding" class="regular-text" value="<?php echo isset($myplugin_input_field_button_padding) ? esc_attr( $myplugin_input_field_button_padding ) : ''; ?>" />
    <?php 
}

function paypal_donate_input_button_border_callback() {
    $myplugin_input_field_button_border = get_option('paypal_donate_input_button_border');
    ?>
    <label for="paypal_donate_input_button_border"><i>Unique border radius for all corners</i></label><br>
    <input type="text" placeholder="25px" name="paypal_donate_input_button_border" class="regular-text" value="<?php echo isset($myplugin_input_field_button_border) ? esc_attr( $myplugin_input_field_button_border ) : ''; ?>" />
    <?php 
}

function paypal_donate_clipboard_callback() { ?>
    <!-- The text field -->
    <input type="text" value="[simple-paypal-donate]" id="shortcode">
    <!-- The button used to copy the text -->
    <button class="copy-clipboard">Copy shortcode</button>
<?php }
