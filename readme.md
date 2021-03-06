# PawPrint WordPress Theme

If you are installing directly into WordPress, get the zip file from the github folder 'package'. Unzip this file in the wp-content/themes folder.

Next, you should make a child theme and activate that child theme in WordPress.

Make a folder in 'wp-content/themes' named 'pawprint-child'. In that folder make a file 'styles.css' with the following:
```php
/*
Theme Name: pawprint-child
Author: Your name
Author URI: Your website
Template: pawprint
Version: 1.0
Text Domain: pawprint-child
*/
```

Now, go to 'Themes' in the WordPress admin and activate your child theme.

WordPress' version of jQuery is loaded in the footer, so you do not need to enqueue this again.

## Building and Installing

You must have npm installed in order to build the theme. Clone the repository from github.

Open the folder in the terminal and run:
```
npm install
npm run package
```

This will make a new package zip file in the package folder.

## Notes

Javascript and SCSS are processed as bundles. SCSS files have to be imported in 'src/assets/scss/bundle.scss' and Javascript files immported in 'src/assets/js/bundle.js'.

# Adding scripts

If you need to add a script to your site, 

# CSS

There are a number of CSS classes that can be overridden.

- pawprint-header
- pawprint-logo
- pawprint-site-name : The name of your site or blog.
- pawprint-body-class
- pawprint-post-title
- pawprint-post-meta : The author and date of the post.
- pawprint-post-excerpt
- pawprint-continue-reading : This is the link below the excerpt.
- pawprint-sidebar
- pawprint-sidebar-widget
- pawprint-sidebar-widget-title
- pawprint-footer
- pawprint-footer-widget
- pawprint-footer-widget-title
- pawprint-site-info
- pawprint-site-info-text
- pawprint-search-form
- pawprint-search-label
- pawprint-search-field
- pawprint-search-button

## Adding Bootstrap classes to PawPrint classes

# Hooks

To customize PawPrint with your own code, a number of hooks are included. Here is an example which should be in the 'functions.php' file of your child theme. These hooks are in addition to the ones already provided by WordPress.

```php
function after_pagination() {
    echo '<p>Afer pagination</p>';
}

add_action( 'pawprint_after_pagination', 'after_pagination' );
```

## Hooks included

- pawprint_after_pagination : This hook only appears on pages with pagination.

# Filters

To change text in the theme, you can use filters. The filters tags included are listed below.

Here is an example of how to change the text displayed when there are no posts. This assumes that you named your child theme 'pawprint-child'. This should be placed in your 'functions.php'.

```php
function no_posts_text_filter($text) {
    return esc_html__('No posts.', 'pawprint-child');
}

add_filter( 'pawprint_no_posts_text', 'no_posts_text_filter' );
```

You'll see that the `esc_html__()` i18n function is used. If your website will not be translated, you do not need to do this.

## Filter tags included

- pawprint_no_posts_text : Appears when there are no posts to display.

# Menus

## Mega menus

To add a mega menu, go to 'Appearance -> Menus' and click on 'Screen Options' at the top. Select 'CSS Classes'. Add the class `mega` and `cols-#`, where # is the number of columns. Any sub-menu you add will now be a column, and sub-sub-menus will be items in that column.

# Footers

# Template parts

## The loop

The loop runs through the available posts for a specific category. To make your own loop, make a php file in your child theme named `loop-<page>.php`. For example, to replace the loop of the index page, you would make a file named `loop-index.php`.

