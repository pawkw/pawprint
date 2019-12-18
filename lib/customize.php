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

    /* ========== General settings ========== */

    $wp_customize->add_section('_themename_general_options', array(
        'title' => esc_html__( 'General Options', '_themename' ),
        'description' => esc_html__( 'Change the general options.', '_themename' ),
        'priority' => '30'
    ));

    $wp_customize->add_setting('_themename_accent_color', array(
        'default' => '#20ddae',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control( 
        new WP_Customize_Color_Control( 
        $wp_customize, 
        '_themename_accent_color', 
        array(
            'label'      => __( 'Accent Color', '_themename' ),
            'section'    => '_themename_general_options',
            'settings'   => '_themename_accent_color',
        ) ) 
    );


    /* ========== Footer settings ========== */

    $wp_customize->selective_refresh->add_partial('_themename-footer-partial', array(
        'settings' => array('_themename_footer_bg', '_themename_footer_layout'),
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

    $wp_customize->add_setting('_themename_footer_layout', array(
        'default' => '3,3,3,3',
        'sanitize_callback' => 'sanitize_text_field',
        'validate_callback' => '_themename_validate_footer_layout',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('_themename_footer_layout', array(
        'type' => 'text',
        'label' => esc_html__( 'Footer Layout', '_themename' ),
        'section' => '_themename_footer_options',
        'description' => 'List the width of each column (out of 12) seperated by commas. Ex. Three columns with a wide middle would be 3,6,3.'
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

function _themename_validate_footer_layout( $validity, $input ) {
    if(!preg_match('/^([1-9]|1[012])(,([1-9]|1[012]))*$/', $input)) {
        $validity->add('invalid_footer_layout', esc_html__( 'Invalid layout.', '_themename' ));
    }
    return $validity;
}