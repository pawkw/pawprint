<?php
    $footer_layout = sanitize_text_field(get_theme_mod( '_themename_footer_layout', '3,3,3,3' ));
    $footer_layout = preg_replace('/\s+/', '', $footer_layout);
    $columns = explode(',', $footer_layout);
    $footer_background = get_theme_mod( '_themename_footer_bg', 'dark' );
    $widget_theme = $footer_background == 'dark' ? 'bg-dark text-white' : 'bg-light text-dark';
    $widgets_active = false;
    foreach($columns as $i => $column) {
        if(is_active_sidebar( 'footer-sidebar'. ($i + 1) )) {
            $widgets_active = true;
        }
    }
?>

<?php if($widgets_active) { ?>
    <div class="pawprint-footer bg-<?php echo _themename_sanitize_footer_bg($footer_background); ?>">
        <div class="container">
            <div class="row">
                <?php 
                    foreach($columns as $i => $column) { ?>
                        <div class="col-md-<?php echo $column; ?>">
                            <?php if(is_active_sidebar( 'footer-sidebar'. ($i + 1) )) {
                                dynamic_sidebar( 'footer-sidebar'. ($i + 1) );
                            } ?>
                        </div> <!-- col -->
                    <?php }
                ?>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- footer -->
<?php } ?>