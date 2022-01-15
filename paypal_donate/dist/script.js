jQuery(document).ready(function($){

    /* Enable color picker */
    jQuery('.my-color-field').wpColorPicker();
    /* */

    /* Copy shortcode */
    jQuery(".copy-clipboard").click(function() {

            event.preventDefault();
            /* Get the text field */
            var copyText = document.getElementById("shortcode");

            /* Select the text field */
            copyText.select();
            copyText.setSelectionRange(0, 99999); /* For mobile devices */

            /* Copy the text inside the text field */
            navigator.clipboard.writeText(copyText.value);

            /* Alert the copied text */
            alert("Shortcode copied!");

    })
    /* */

});