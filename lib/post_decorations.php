<?php

function _themename_post_meta() {
    /* translators: $s is the date of the post */
    printf(esc_html__('Posted on %s', '_themename'), '<a href="'.esc_url(get_permalink()).'"><time datetime="'.esc_attr(get_the_date('c')).'">'.esc_html(get_the_date()).'</time></a>');

    /* translators: %s is the name of the author */
    printf(esc_html__( ' by %s', '_themename' ), ' <a href="'.esc_url(get_author_posts_url( get_the_author_meta( 'ID'))).'">'.esc_html(get_the_author()).'</a>');
}

function _themename_continue_reading() {
    echo '<a href="'.esc_url(get_the_permalink()).'" title="'.the_title_attribute( ['echo' => false] ).'" class="pawprint-continue-reading">';
    printf(
        /* translators: $s is the title of the post */
        wp_kses( __( 'Continue reading <span class="sr-only sr-only-focusable">%s</span></a>', '_themename'),
        [ 
            'span' => [ 'class' => [] ]
        ]
        ), get_the_title());
    echo '</a>';
}

function _themename_delete_post() {
    if(!current_user_can( 'delete_post', get_the_ID() )) {
        return '';
    }
    $url = add_query_arg([
        'action' => '_themename_delete_post',
        'post' => get_the_ID(),
        'nonce' => wp_create_nonce( '_themename_delete_post_' . get_the_ID() )
    ] , home_url() );
    return "<a href='" . esc_url( $url ) . "'>" . esc_html__( 'Delete post.', '_themename' ) . "</a>";
}