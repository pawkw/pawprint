<form role="search" method="get" class="form-search pawprint-search-form" action="<?php echo esc_url(home_url( '/' )); ?>">
	<div class="row">
		<div class="col-lg-12">
			<div class="input-group">
                <span class="sr-only sr-only-focusable"><?php echo esc_html_x( 'Search for:', 'label', '_themename' ); ?></span>
				<input type="text" class="form-control search-query" name="s" placeholder="<?php echo esc_html_x( 'Search&hellip;', 'placeholder', '_themename' ); ?>" />
				<span class="input-group-btn">
                    <button class="btn btn-success pawprint-search-button" type="submit"><span class="sr-only sr-only-focusable"><?php echo esc_html_x( 'Submit', 'submit button', '_themename' ); ?></span><i class="fas fa-search" aria-hidden="true"></i></button>
				</span>
			</div>
		</div>
	</div>
</form>