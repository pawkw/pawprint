<?php

function _themename_customize_register( $wp_customize ) {

    $wp_customize->get_setting('blogname') -> transport = 'postMessage';

    $wp_customize->selective_refresh->add_partial('blogname', array(
        // 'settings' => array('blogname')
        'selector' => '.pawprint-site-name',
        'container_inclusive' => false,
        'render_callback' => function() {
            bloginfo( 'name' );
        }
    ));

    $wp_customize->selective_refresh->add_partial('_themename-footer-partial', array(
        'settings' => array('_themename_footer_bg'),
        'selector' => '#footer',
        'container_inclusive' => false,
        'render_callback' => function() {
            get_template_part( 'template-parts/footer/widgets' );
            get_template_part( 'template-parts/footer/info' );
        }
    ));

    $wp_customize->add_section('_themename_footer_options', array(
        'title' => esc_html__( 'Footer Options', '_themename' ),
        'description' => esc_html__( 'Change the footer options.', '_themename' ),
        'priority' => '30'
    ));

    $wp_customize->add_setting('_themename_footer_bg', array(
        'default' => 'dark',
        'sanitize_callback' => '_themename_sanitize_footer_bg',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('_themename_footer_bg', array(
        'type' => 'select',
        'label' => esc_html__( 'Footer background', '_themename' ),
        'choices' => array(
            'dark' => esc_html__( 'Dark', '_themename' ),
            'light' => esc_html__( 'Light', '_themename' )
        ),
        'section' => '_themename_footer_options'
    ));

    $wp_customize->add_setting('_themename_site_info', array(
        'default' => '',
        'sanitize_callback' => '_themename_sanitize_site_info',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('_themename_site_info', array(
        'type' => 'text',
        'label' => esc_html__( 'Site info', '_themename' ),
        'section' => '_themename_footer_options'
    ));
}

add_action( 'customize_register', '_themename_customize_register', 10, 1 );

function _themename_sanitize_site_info( $input ) {
    $allowed = array( 'a' => array(
        'href' => array(),
        'title' => array()
    ));
    return wp_kses( $input, $allowed );
}

function _themename_sanitize_footer_bg( $input ) {
    $valid = array('light', 'dark');
    if(in_array( $input, $valid, true)) {
        return $input;
    }
    return 'dark';
}