<?php
    // The loop
    if(have_posts()) {
        while(have_posts()) {
            the_post();
            get_template_part( 'template-parts/post/content' );
        } ?>
        <div class="pawprint-pagination d-flex flex-row-reverse">
            <?php the_posts_pagination( array(
                'mid_size' => 1,
                'prev_text' => esc_html__( 'Prev.', '_themename' ),
                'next_text' => esc_html__( 'Next', '_themename' )
            ) ); ?>
        </div>
        <?php
        do_action( '_themename_after_pagination' );
    } else {
        get_template_part( 'template-parts/post/content-none', 'none' );
    }
?>