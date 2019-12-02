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

    $footer_layout = '3,3,3,3';
    $columns = explode(',', $footer_layout);
    $footer_background = 'dark';
    $widget_theme = $footer_background == 'dark' ? 'bg-dark text-white' : 'bg-light text-dark';

    foreach($columns as $i => $column) {
        register_sidebar( array(
            'id' => 'footer-sidebar'. ($i + 1),
            'name' => esc_html__('Footer column '. ($i + 1), '_themename'),
            'description' => esc_html__('This is a footer column.', '_themename'),
            'before_widget' => '<section id="%1$s" class="pawprint-footer-widget '.$widget_theme.' mt-4 mb-2 %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h5 class="pawprint-footer-widget-title">',
            'after_title' => '</h5>'
        ) );
    }
}

add_action( 'widgets_init', '_themename_sidebar_widgets' );

