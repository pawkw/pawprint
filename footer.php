        <?php
            $footer_layout = '3,3,3,3';
            $columns = explode(',', $footer_layout);
            $footer_background = 'dark';
            $widget_theme = $footer_background == 'dark' ? 'bg-dark text-white' : 'bg-light text-dark';
            $widgets_active = false;
            foreach($columns as $i => $column) {
                if(is_active_sidebar( 'footer-sidebar'. ($i + 1) )) {
                    $widgets_active = true;
                }
            }
        ?>

        <?php if($widgets_active) { ?>
            <div class="pawprint-footer bg-<?php echo $footer_background; ?>">
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
        <div class="pawprint-site-info bg-<?php echo $footer_background; ?>">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-2 mb-4 pawprint-site-info-text text-center <?php echo $widget_theme; ?>">
                        All rights reserved
                    </div>
                </div>
            </div>
        </div> <!-- site info -->
        <?php wp_footer(); ?>
    </body>
</html>
