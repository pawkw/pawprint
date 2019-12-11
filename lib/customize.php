<?php

function _themename_customize_register( $wp_customize ) {
    $wp_customize->add_section('_themename_footer_options', array(
        'title' => esc_html__( 'Footer Options', '_themename' ),
        'description' => esc_html__( 'Change the footer options.', '_themename' ),
        'priority' => '30'
    ));

    $wp_customize->add_setting('_themename_site_info', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('_themename_site_info', array(
        'type' => 'text',
        'label' => esc_html__( 'Site info', '_themename' ),
        'section' => '_themename_footer_options'
    ));
}

add_action( 'customize_register', '_themename_customize_register', 10, 1 );