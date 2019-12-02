<?php
    $footer_background = 'dark';
    $widget_theme = $footer_background == 'dark' ? 'bg-dark text-white' : 'bg-light text-dark';
?>
<div class="pawprint-site-info bg-<?php echo $footer_background; ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-2 mb-4 pawprint-site-info-text text-center <?php echo $widget_theme; ?>">
                All rights reserved
            </div>
        </div>
    </div>
</div> <!-- site info -->