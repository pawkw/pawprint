<?php

function pawprint_post_meta() {
    echo 'Posted on: <a href="'.esc_url(get_permalink()).'">';
    echo '<time datetime="'.esc_attr(get_the_date('c')).'">'.esc_html(get_the_date()).'</time></a>';
    echo ' by <a href="'.esc_url(get_author_posts_url( get_the_author_meta( 'ID'))).'">';
    echo esc_html(get_the_author()).'</a>';
}

function pawprint_continue_reading() {
    echo '<a href="'.esc_url(get_the_permalink()).'" title="'.the_title_attribute( ['echo' => false] ).'">Continue reading <span class="u-screen-reader-text">';
    echo get_the_title().'</span></a>';
}