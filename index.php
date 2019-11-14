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
                    Posted on: <a href="<?php the_permalink(); ?>"><time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time></a> by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID')); ?>">
                        <?php echo get_the_author(); ?>
                    </a>
                </div>
                <div>
                    <?php the_excerpt(); ?>
                </div>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">Continue reading <span class="u-screen-reader-text"> <?php the_title(); ?></span></a>
                <?php
            } 
            the_posts_pagination();
        } else { ?>
            <p>Sorry, no posts matched your criteria.</p>
        <?php
        }
    ?>
<?php get_footer(); ?>
