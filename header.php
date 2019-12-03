<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'pawprint-body-class' ) ?> >

<?php
    $header_background = 'dark';
    $widget_theme = $header_background == 'dark' ? 'bg-dark text-white' : 'bg-light text-dark';
    $navbar_theme = $header_background == 'dark' ? 'navbar-dark bg-dark text-white' : 'navbar-dark bg-light text-dark';
?>

<header role="banner" class="mb-4">
    <div class="pawprint-header <?php echo $widget_theme; ?> py-2">
        <div class="container">
            <div class="row justify-content-between">
                <div class="pawprint-logo col-md-4">
                    <a class="pawprint-site-name" href="<?php echo esc_url(home_url( '/' )); ?>"><?php bloginfo( 'name' ); ?></a>
                </div>
                <div class="col-md-4">
                    <?php get_search_form( true ); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-expand-lg <?php echo $navbar_theme; ?>">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="pawprint-nav-header collapse navbar-collapse" id="navbarNav" role="navigation" aria-label="<?php esc_html_e('Main navigation', '_themename'); ?>">
            <?php wp_nav_menu( array('theme_location' => 'main-menu') ); ?>
        </div>
    </div>
</header>

<div class="pawprint-content">