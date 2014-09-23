/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function($) {

// Use this variable to set up the common and page specific functions. If you
// rename this variable, you will also need to rename the namespace below.
var Roots = {
	// All pages
	common: {
		init: function() {
			$('.plaque').click(function(){
				if($(this).hasClass('active')) {
					$('.paper').delay(150).animate({ opacity: 0, height: 0 }, 900, 'easeInOutElastic');
					$('.paper ul').delay(330).animate({ top: -100, 'opacity' : 0, height: 124, 'margin-top': 0 }, 900, 'easeInOutElastic');
					$(this).removeClass('active');
				} else {
					$('.paper').delay(150).animate({ opacity: 1, height: 184 }, 900, 'easeInOutElastic');
					$('.paper ul').delay(330).animate({ top: 0, 'opacity' : 1, height: 124, 'margin-top': 20 }, 900, 'easeInOutElastic');
					$(this).addClass('active');
				}
			});
		}
	},
	// Home page
	home: {
		init: function() {
			// JavaScript to be fired on the home page
			$('.plaque').addClass('active');
			$('.scroll').animate({ top: 0 }, 700, 'easeInOutElastic' );
			$('.paper').delay(150).animate({ 'opacity' : 1, height: 184 }, 900, 'easeInOutElastic');
			$('.paper ul').delay(330).animate({ 'opacity' : 1, height: 124, 'margin-top': 20 }, 900, 'easeInOutElastic');

			$('.flexslider').flexslider({
				direction:		"vertical",
				animation:		"slide",
				animationLoop:	false,
				slideshow:		false,
				prevText:		'',
				nextText:		'',
				touch:			false
			});

			var people = $('.people-layer'),
				link = people.find('.link a');

			link.click(function(){
				var dataTarget = $(this).attr('data-target');
				$(dataTarget).toggle();
			});
		}
	},
  // About us page, note the change from about-us to about_us.
	about_us: {
		init: function() {
			// JavaScript to be fired on the about us page
		}
	},

  living: {
    init: function() {

    }
  }
};

// The routing fires all common scripts, followed by the page specific scripts.
// Add additional events for more control over timing e.g. a finalize event
var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = Roots;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {
    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });
  }
};

$(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
