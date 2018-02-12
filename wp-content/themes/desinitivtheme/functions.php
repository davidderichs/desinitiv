<?php
    // Did not work for me :(

    function load_css_js() {
        wp_enqueue_style( 'desinivitStyle', get_template_directory_uri() . '/css/style.css');

        wp_register_script( 'desinitivScript', get_template_directory_uri() . '/js/desinitiv.js');
        wp_enqueue_script( 'desinitivScript' );
    }
    add_action( 'wp_enqueue_scripts', 'load_css_js' );
?>
