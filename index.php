<?php get_header(); ?>
<div class="container mt-4 mb-4">
    <div class="row">
        <div class="<?php echo is_active_sidebar( 'primary-sidebar' ) ? 'col-md-8' : 'col-md-12'; ?>">
            <main role="main">
                <?php get_template_part( 'loop', 'index' ); ?>
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
