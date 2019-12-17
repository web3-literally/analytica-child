<?php

/**
 * Include
 */


/**
 * Enqueue assets
 */
add_action( 'wp_enqueue_scripts', 'st_enqueue_styles' );
function st_enqueue_styles() {
    $base_url = get_stylesheet_directory_uri();

    wp_enqueue_style( 'default-style', $base_url . '/style.css' );

    wp_enqueue_style( 'child-style',
        $base_url . '/style.css',
        null,
        wp_get_theme()->get('Version')
    );
    
    wp_enqueue_style( 'bs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css', null, '4.4.0');
    wp_enqueue_style( 'fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/regular.min.css', null, '5.11.0');

}
