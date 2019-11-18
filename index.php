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
                    <?php pawprint_post_meta(); ?>
                </div>
                <div>
                    <?php the_excerpt(); ?>
                </div>
                <?php
                pawprint_continue_reading();
            } 
            the_posts_pagination();
        } else { ?>
            <p><?php _e('Sorry, no posts matched your criteria.', 'pawprint'); ?></p>
        <?php
        }
    ?>
<?php get_footer(); ?>
