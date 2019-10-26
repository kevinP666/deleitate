$(document).ready(function() {
	config_owl_slider();
	config_owl_slider_products();
});

function config_owl_slider() {
    /* Carousel slider heading */
	$('.owl_slider').owlCarousel({
		items: 1,
		dots: false,
		loop: true,
		margin: 10
	});

	var owl = $('.owl_slider');
	owl.owlCarousel();
	// Go to the next item
	$('.button_slider_next').click(function() {
	    owl.trigger('next.owl.carousel', [1000]);
	});
	// Go to the previous item
	$('.button_slider_prev').click(function() {
	    // With optional speed parameter
	    // Parameters has to be in square bracket '[]'
	    owl.trigger('prev.owl.carousel', [1000]);
	});
}

function config_owl_slider_products() {
	/* Carousel slider heading */
	$('.owl_slider_products').owlCarousel({
		items: 4,
		dots: false,
		loop: true,
		margin: 30,
		autoplay:true,
		autoplayTimeout:2000,
		autoplayHoverPause:true,
		responsiveClass: true,
		responsive : {
		     0:{
	            items:1,
	            nav:true
	        },
	        440:{
	            items:2,
	            nav:true
	        },
	        767:{
	            items:3
	        },
	        1000:{
	            items:4,
	            loop:true
	        }
		}
	});
}