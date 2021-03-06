<?php

function _themename_assets() {
    wp_enqueue_style( '_themename-stylesheet', get_template_directory_uri().'/dist/assets/css/bundle.css' , array(), '1.0.0', 'all' );

    wp_enqueue_style( '_themename-bootstrap', get_template_directory_uri().'/dist/assets/css/bootstrap.css' , array(), '4.3.1', 'all' );
    
    include( get_template_directory( ) . '/lib/inline_css.php');
    wp_add_inline_style( '_themename-stylesheet',  $inline_styles);

    wp_enqueue_script( '_themename-scripts', get_template_directory_uri().'/dist/assets/js/bundle.js', array( 'jquery' ), '1.0.0', true );
}

function _themename_admin_assets() {
    wp_enqueue_style( '_themename-admin-stylesheet', get_template_directory_uri().'/dist/assets/css/admin.css' , array(), '1.0.0', 'all' );
    wp_enqueue_script( '_themename-admin-scripts', get_template_directory_uri().'/dist/assets/js/admin.js', array(), '1.0.0', true );
}

function _themename_customize_preview_js() {
    wp_enqueue_script( '_themename-customize-preview', get_template_directory_uri().'/dist/assets/js/customize-preview.js', array('jquery', 'customize-preview'), '1.0.0', true );

    include( get_template_directory( ) . '/lib/inline_css.php');
    wp_localize_script( '_themename-customize-preview', '_themename', array(
        'inline-css' => $inline_selectors
    ) );
}

add_action( 'wp_enqueue_scripts', '_themename_assets' );
add_action( 'admin_enqueue_scripts', '_themename_admin_assets' );
add_action( 'customize_preview_init', '_themename_customize_preview_js' );