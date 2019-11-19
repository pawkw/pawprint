<?php

function pawprint_assets() {
    wp_enqueue_style( 'pawprint-stylesheet', get_template_directory_uri().'/dist/assets/css/bundle.css' , array(), '1.0.0', 'all' );
    wp_enqueue_script( 'pawprint-scripts', get_template_directory_uri().'/dist/assets/js/bundle.js', array(), true );
}

function pawprint_admin_assets() {
    wp_enqueue_style( 'pawprint-admin-stylesheet', get_template_directory_uri().'/dist/assets/css/admin.css' , array(), '1.0.0', 'all' );
}

add_action( 'wp_enqueue_scripts', 'pawprint_assets' );
add_action( 'admin_enqueue_scripts', 'pawprint_admin_assets' );