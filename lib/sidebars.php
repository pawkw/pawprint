<?php

function _themename_sidebar_widgets() {
    register_sidebar( array(
        'id' => 'primary-sidebar',
        'name' => esc_html__('Primary sidebar', '_themename'),
        'description' => esc_html__('This is the main sidebar.', '_themename'),
        'before_widget' => '<section id="%1$s" class="pawprint-sidebar-widget mb-4 %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h5 class="pawprint-sidebar-widget-title">',
        'after_title' => '</h5>'
    ) );
}

add_action( 'widgets_init', '_themename_sidebar_widgets' );