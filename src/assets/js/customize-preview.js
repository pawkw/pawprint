import $ from 'jquery';
import strip_tags from './helpers/strip-tags';

console.log('customize preview: ', wp);

// Prevent the window from constantly flashing while typing in customize dialog.
wp.customize('_themename_site_info', (value) => {
    value.bind( (to) => {
        $('.pawprint-site-info-text').html(strip_tags(to, '<a>'));
    });
});

wp.customize('blogname', (value) => {
    value.bind( (to) => {
        $('.pawprint-site-name').html(strip_tags(to));
    });
});