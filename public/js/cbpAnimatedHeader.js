/**
 * cbpAnimatedHeader.js v1.0.0
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2013, Codrops
 * http://www.codrops.com
 */
var cbpAnimatedHeader = (function() {

	var docElem = document.documentElement,
		header = document.querySelector( '.cbp-af-header' ),
		didScroll = false,
		changeHeaderOn = 71;

	function init() {
		window.addEventListener( 'scroll', function( event ) {
			if( !didScroll ) {
				didScroll = true;
				setTimeout( scrollPage, 1 );
			}
		}, false );
	}

	function scrollPage() {
		var sy = scrollY();
		if ( sy >= changeHeaderOn ) {
			console.log("Shrink");
			$("#menu-bar").addClass("shrink");
			$("#vehicle-header").addClass("shrink");
			// $("a.navbar-brand").animate({width: "178px"},500);
		}
		else {
			$("#vehicle-header").removeClass("shrink");
			$("#menu-bar").removeClass("shrink");
			console.log("expand");
			// $("a.navbar-brand").animate({width: "258px"},500);
		}
		didScroll = false;
	}

	function scrollY() {
		return window.pageYOffset || docElem.scrollTop;
	}

	init();

})();