<?php
    $footer_background = 'dark';
    $widget_theme = $footer_background == 'dark' ? 'bg-dark text-white' : 'bg-light text-dark';
    $site_info = get_theme_mod( '_themename_site_info', '' );

    if($site_info) {
?>
    <div class="pawprint-site-info bg-<?php echo $footer_background; ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-2 mb-4 pawprint-site-info-text text-center <?php echo $widget_theme; ?>">
                    <?php echo esc_html( $site_info ); ?>
                </div>
            </div>
        </div>
    </div> <!-- site info -->
    <?php }