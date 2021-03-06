// Hook up the flexslider
jQuery(document).ready(function($) {
	$('.flexslider').flexslider({
		animation: 'slide',
		controlsContainer: '.flex-container'
	});
});


// Hook up flickr feed
jQuery(document).ready(function($) {
	$('div.flickr').flickrush ({
		limit:6,
		id:'44499772@N06',
		random:true
	});
});

// chris coyier's little dropdown select
jQuery(document).ready(function($){

	//build dropdown
	$("<select />").appendTo(".navigation nav div")

	// Create  default option "Go to..."
	$("<option />", {
		"selected": "selected",
		"value": "",
		"text" : "Go to..."
	}).appendTo("nav select");

	// Popular dropdowns with the first menu items
	$(".navigation nav li a").each(function() {
		var el = $(this);
		$("<option />", {
			"value" : el.attr("href"),
			"text"  : el.text()
		}).appendTo("nav select");
	});

	//make responsive dropdown menu actually work
	$("nav select").change(function(){
		window.location = $(this).find("option:selected").val();
	});

});
