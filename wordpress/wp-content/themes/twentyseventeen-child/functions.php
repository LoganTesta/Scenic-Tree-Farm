<?php

add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'parent-style', "" . get_template_directory_uri() . '/style.css?mod=07112022' );
    wp_enqueue_style( 'print-styles', "" . get_template_directory_uri() . '/print-styles.css?mod=07112022', array(), '', 'print' );
});
