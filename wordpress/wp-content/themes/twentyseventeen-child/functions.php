<?php

add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'parent-style', "" . get_template_directory_uri() . '/style.css?mod=09032025' );
    wp_enqueue_style( 'print-styles', "" . get_stylesheet_directory_uri() . '/assets/css/print-styles.css?mod=09032025', array(), '', 'print' );
    
    wp_register_script( 'javascript-functions', get_stylesheet_directory_uri() . '/assets/javascript/javascript-functions.js' );
    wp_enqueue_script( 'javascript-functions', get_stylesheet_directory_uri() . '/assets/javascript/javascript-functions.js' );  
    
});
