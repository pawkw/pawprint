<?php

if(!function_exists('_themename_post_meta')) {
    function _themename_post_meta() {
        /* translators: $s is the date of the post */
        printf(esc_html__('Posted on %s', '_themename'), '<a href="'.esc_url(get_permalink()).'"><time datetime="'.esc_attr(get_the_date('c')).'">'.esc_html(get_the_date()).'</time></a>');
    
        /* translators: %s is the name of the author */
        printf(esc_html__( ' by %s', '_themename' ), ' <a href="'.esc_url(get_author_posts_url( get_the_author_meta( 'ID'))).'">'.esc_html(get_the_author()).'</a>');
    }
}

if(!function_exists('_themename_continue_reading')) {
    function _themename_continue_reading() {
        echo '<a href="'.esc_url(get_the_permalink()).'" title="'.the_title_attribute( ['echo' => false] ).'">';
        printf(
            /* translators: $s is the title of the post */
            wp_kses( __( 'Continue reading <span class="u-screen-reader-text">%s</span></a>', '_themename'),
            [ 
                'span' => [ 'class' => [] ]
            ]
            ), get_the_title());
    }
}