<?php

add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'parent-style', "" . get_template_directory_uri() . '/style.css?mod=07152022' );
    wp_enqueue_style( 'print-styles', "" . get_stylesheet_directory_uri() . '/assets/css/print-styles.css?mod=07152022', array(), '', 'print' );
});
