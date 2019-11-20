<?php get_header(); ?>
    <?php
        // The loop
        if(have_posts()) {
            while(have_posts()) {
                the_post(); ?>
                <h2>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                </h2>
                <div>
                    <?php _themename_post_meta(); ?>
                </div>
                <div>
                    <?php the_excerpt(); ?>
                </div>
                <?php
                _themename_continue_reading();
            } 
            the_posts_pagination();
            do_action( '_themename_after_pagination' );
        } else { ?>
            <p><?php echo apply_filters( '_themename_no_posts_text', esc_html__('Sorry, no posts matched your criteria.', '_themename') ); ?></p>
        <?php
        }
    ?>
<?php get_footer(); ?>
