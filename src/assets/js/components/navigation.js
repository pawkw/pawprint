import $ from 'jquery';

console.log('navigation.js loaded.');

$('.pawprint-nav-header').on('mouseenter', '.menu-item-has-children', (e) => {
    console.log('Enter menu item');
    $(e.currentTarget).addClass('open');
}).on('mouseleave', '.menu-item-has-children', (e) => {
    $(e.currentTarget).removeClass('open');
});
