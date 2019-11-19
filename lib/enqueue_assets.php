<?php

function pawprint_assets() {
    wp_enqueue_style( 'pawprint_stylesheet', get_template_directory_uri().'/dist/assets/css/bundle.css' , array(), '1.0.0', 'all' );
}

function pawprint_admin_assets() {
    wp_enqueue_style( 'pawprint_admin_stylesheet', get_template_directory_uri().'/dist/assets/css/admin.css' , array(), '1.0.0', 'all' );
}

add_action( 'wp_enqueue_scripts', 'pawprint_assets' );
add_action( 'admin_enqueue_scripts', 'pawprint_admin_assets' );