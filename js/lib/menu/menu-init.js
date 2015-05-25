(function( $ ) {
	'use strict';

	 $(function() {
	 	// Dropdown Init
	 	$('.nav').smartmenus({
			'hideFunction': function($ul, complete) { $ul.slideUp(250, complete); },
			'showFunction': function($ul, complete) { $ul.slideDown(250, complete); },
			'subIndicators': false,
			'keepInViewport': true
		});
		// Asseccibility Init
		$('.nav').setup_navigation();
	 
	 });
})( jQuery );