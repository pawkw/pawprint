<form role="search" method="get" class="pawprint-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label class="pawprint-search-label">
        <span class="sr-only sr-only-focusable"><?php echo esc_html_x( 'Search for:', 'label', '_themename' ); ?></span>
        <input type="search" name="s" class="pawprint-search-field" placeholder="<?php echo esc_html_x( 'Search&hellip;', 'placeholder', '_themename' ); ?>" value="<?php echo esc_attr( (get_search_query( )), '_themename'); ?>" />
    </label>
    <button class="pawprint-search-button" type="submit"><span class="sr-only sr-only-focusable"><?php echo esc_html_x( 'Submit', 'submit button', '_themename' ); ?></span><i class="fas fa-search" aria-hidden="true"></i></button>
</form>