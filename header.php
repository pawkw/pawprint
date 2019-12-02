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
?>

<header role="banner" class="mb-4">
    <div class="pawprint-header <?php echo $widget_theme; ?> py-4">
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

</header>

<div class="pawprint-content">