<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'pawprint-body-class' ) ?> >
<a class="sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', '_themename' );?></a>
<?php
    $header_background = 'dark';
    $widget_theme = $header_background == 'dark' ? 'bg-dark text-white' : 'bg-light text-dark';
    $navbar_theme = $header_background == 'dark' ? 'navbar-dark bg-dark text-white' : 'navbar-dark bg-light text-dark';
?>

<header role="banner" class="mb-4">
    <div class="pawprint-header <?php echo $widget_theme; ?> py-2">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="pawprint-logo col-md-4">
                <?php if(has_custom_logo( )) {
                    the_custom_logo( );
                } else { ?>
                    <a class="pawprint-site-name" href="<?php echo esc_url(home_url( '/' )); ?>"><?php bloginfo( 'name' ); ?></a>
                <?php } ?>
                </div>
                <div class="col-md-4">
                    <?php get_search_form( true ); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="c-navigation">
        <div class="o-container">
            <nav class="header-nav" role="navigation" aria-label="<?php esc_html_e( 'Main navigation', '_themename' ) ?>">
                <?php wp_nav_menu( array('theme_location' => 'main-menu') ); ?>
            </nav>
        </div>
    </div>
    
</header>

<div id="content" class="pawprint-content">