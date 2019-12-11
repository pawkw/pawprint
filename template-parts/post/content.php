<article <?php post_class('mb-4 shadow p-3 bg-light c-post') ?>>
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