/*
    
-- Created by KP, 2019.
-- Deléitate Jennifer Parra.
-- Main. 

*/

// onload
window.onload = init();

function init() {
    // scroll header
    scrollElementActive(
        document.getElementById('header_'),
        100,
        'active'
	);

	// Open navbar responsive
	navbar_responsive_products_open();
}

// function for scrolling
function scrollElementActive(id, height, className) {
	window.addEventListener('scroll', function() {
		if (window.pageYOffset > height) {
			id.classList.add(className);
		} else {
			id.classList.remove(className);
		}
	});
}

// navbar responsive open
function navbar_responsive_products_open() {
	// variables
	var icon_menu = document.querySelector('#icon_menu'),
		navbar = document.querySelector('#nav_navbar_responsive'),
		bg = document.querySelector('#bg_'),
		closes = [ bg, document.querySelector('#icon_close') ],
		body = document.body;
	
	// event
	icon_menu.addEventListener('click', function() {
		// add class
		bg.classList.add('active');
		navbar.classList.add('active');
		// Not scroll
		body.style.overflow = 'hidden';
		// ciclo
		for (var i = 0; i < closes.length; i++) {
			closes[i].addEventListener('click', function() {
				// remove class
				bg.classList.remove('active');
				navbar.classList.remove('active');
				// Scrolling
				body.style.overflowY = 'scroll';
			});
		}
	});
}