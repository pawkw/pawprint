<?php
    $footer_background = get_theme_mod( '_themename_footer_bg', 'dark' );
    $widget_theme = $footer_background == 'dark' ? 'bg-dark text-white' : 'bg-light text-dark';
    $site_info = get_theme_mod( '_themename_site_info', '' );

    if($site_info) {
?>
    <div class="pawprint-site-info bg-<?php echo _themename_sanitize_footer_bg($footer_background); ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-2 mb-4 pawprint-site-info-text text-center <?php echo $widget_theme; ?>">
                    <?php
                    $allowed = array( 'a' => array(
                        'href' => array(),
                        'title' => array()
                    ));
                    echo wp_kses( $site_info, $allowed ); ?>
                </div>
            </div>
        </div>
    </div> <!-- site info -->
    <?php }