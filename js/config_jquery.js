/*
    
-- Created by KP, 2019.
-- Deléitate Jennifer Parra.
-- Config JQuery.

*/
$(document).ready(function() {
    category_product_open();
    navbar_responsive_products_open();
});

function category_product_open() {
    $('.category a .arrow').click(function() {
        if ($(this).parent().parent().children().last().attr('class') === 'submenu_category') {
            $(this).parent().parent().toggleClass('active');
            $(this).parent().parent().children().last().slideToggle();
        }
    });
}

function navbar_responsive_products_open() {
    $('.option__ .option_t .arrow').click(function() {
        if ($(this).parent().parent().children().last().attr('class') === 'sub_menu'){
            $(this).parent().parent().toggleClass('active');
            $(this).parent().parent().children().last().slideToggle();
        }
    });
}