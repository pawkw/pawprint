<?php get_header(); ?>
<div class="container mb-4">
    <div class="row">
        <div class="<?php echo is_active_sidebar( 'primary-sidebar' ) ? 'col-md-8' : 'col-md-12'; ?>">
            <main role="main">
                <?php
                    // The loop
                    if(have_posts()) {
                        while(have_posts()) {
                            the_post(); ?>
                            <article <?php post_class('mb-4 shadow p-3 bg-light') ?>>
                            <h2>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="pawprint-post-title"><?php the_title(); ?></a>
                            </h2>
                            <div class="pawprint-post-meta">
                                <?php _themename_post_meta(); ?>
                            </div>
                            <div class="pawprint-post-excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                            <?php _themename_continue_reading(); ?>
                            </article>
                        <?php } 
                        the_posts_pagination();
                        do_action( '_themename_after_pagination' );
                    } else { ?>
                        <p><?php echo apply_filters( '_themename_no_posts_text', esc_html__('Sorry, no posts matched your criteria.', '_themename') ); ?></p>
                    <?php
                    }
                ?>
            </main>
        </div> <!-- col -->
        <?php if(is_active_sidebar( 'primary-sidebar' )) { ?>
            <div class="col-md-4">
                <?php get_sidebar() ?>
            </div> <!-- col -->
        <?php } ?>
    </div> <!-- row -->
</div> <!-- container -->
<?php get_footer(); ?>
