<?php
    // The loop
    if(have_posts()) {
        while(have_posts()) {
            the_post();
            get_template_part( 'template-parts/post/content' );
        } 
        the_posts_pagination();
        do_action( '_themename_after_pagination' );
    } else {
        get_template_part( 'template-parts/post/content-none', 'none' );
    }
?>