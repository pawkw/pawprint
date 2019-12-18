import $ from 'jquery';
import strip_tags from './helpers/strip-tags';


// Prevent the window from constantly flashing while typing in customize dialog.
wp.customize('_themename_site_info', (value) => {
    value.bind( (to) => {
        $('.pawprint-site-info-text').html(strip_tags(to, '<a>'));
    });
});

wp.customize('_themename_accent_color', (value) => {
    value.bind( (to) => {
        let inline_css = ``;
        let css_object = _themename['inline-css'];
        for(let selector in css_object) {
            inline_css += `${selector} {`;
            for(let prop in css_object[selector]) {
                let val = css_object[selector][prop];
                // Using wp.customize instead of 'to' so that multiple settings can be fetched.
                inline_css += `${prop}: ${wp.customize(val).get()};`
            }
            inline_css += `}`;
        }
        $('#_themename-stylesheet-inline-css').html(inline_css);
    });
});

wp.customize('blogname', (value) => {
    value.bind( (to) => {
        $('.pawprint-site-name').html(strip_tags(to));
    });
});