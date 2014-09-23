 $(document).ready(function(){
	var root			= window.location,
		handle			= $('.handle'),
		windowWidth		= $(window).width(),
		mapslides		= $('.map-slides'),
		midground		= $('.midground'),
		foreground		= $('.foreground'),
		link_layer		= $('.link-layer'),
    people_layer		= $('.people-layer'),
		link_container	= $('.link-container');

	Array.prototype.remove = function(element) {
		for (var i = 0; i < this.length; i++) {
			if (this[i] == element) { this.splice(i,1); }
		}
	};

	// Usage: $(['img1.jpg','img2.jpg']).preloadImages(function(){ ... });
	// Callback function gets called after all images are preloaded
	$.fn.preload = function(callback) {
		checklist = this.toArray();
		this.each(function() {
			$('<img>').attr({ src: this }).load(function() {
				checklist.remove($(this).attr('src'));
				if (checklist.length == 0) {
					$('#spinner').fadeOut(1200, function(){
						slide_calculate_content_width(true);
						init_animation();
					});
				}
			});
		});
	};

	// $.fn.preload = function() {
	// 	this.each(function(){
	// 		$('<img/>').load(function() { /* it's loaded! */ }).attr('src', this);
	// 		//$('<img/>')[0].src = this;
	// 	});

	// 	$('#spinner').fadeOut(1200, function(){
	// 		slide_calculate_content_width(true);
	// 		init_animation();
	// 	});
	// };

	$([root + 'wp-content/themes/roots-sass/assets/img/slides/g_foreground.png',
		root + 'wp-content/themes/roots-sass/assets/img/slides/g_midground.png',
		root + 'wp-content/themes/roots-sass/assets/img/slides/g_mini-bicycle.png',
		root + 'wp-content/themes/roots-sass/assets/img/slides/g_mini-bird.png',
		root + 'wp-content/themes/roots-sass/assets/img/slides/g_mini-car.png',
		root + 'wp-content/themes/roots-sass/assets/img/slides/g_mini-person.png',
		root + 'wp-content/themes/roots-sass/assets/img/slides/g_timeline-ground.png',
		root + 'wp-content/themes/roots-sass/assets/img/slides/g_timeline.png',
    root + 'wp-content/themes/roots-sass/assets/img/slides/g_man.png',
    root + 'wp-content/themes/roots-sass/assets/img/slides/g_car.png',
    root + 'wp-content/themes/roots-sass/assets/img/slides/g_girl.png',
	]).preload();

	function handle_active() {
		var handle_pos		= $('.handle').position().left,
			snap_pos		= $('.snap').position().left;
	}

	// Calculate slide width
	function slide_calculate_content_width(set_left) {
		var windowWidth		= $(window).width();
    var items = [link_layer, people_layer];

		link_container.css({ width: windowWidth });
		link_layer.css({ width: windowWidth * 4 });
    people_layer.css({ width: windowWidth * 4 });

		if ( set_left == 1 ) {
			link_layer.css({ left: 0 });
            people_layer.css({ left: 0 });
		}

		var i = 0;
		$('.people-layer .link-container').each(function(){
			$(this).css({ width: windowWidth, 'position': 'absolute', left: windowWidth * i});
			i++;
		});

    var j = 0;
    $('.link-layer .link-container').each(function(){
      $(this).css({ width: windowWidth, 'position': 'absolute', left: windowWidth * j});
      j++;
    });
	}

	// Slide animations
	function slide_animations(e) {
		var windowWidth = $(window).width(),
			left_pos	= windowWidth * 4;

		mapslides.stop().animate({ backgroundPosition: e + "%"  }, 1100,  'easeOutSine' );
		midground.stop().animate({ backgroundPosition: e + "%" }, 1750, 'easeOutCirc' );
		foreground.stop().animate({ backgroundPosition: e + "%" }, 900, 'easeOutSine' );
		link_layer.stop().animate({ left: - left_pos * (e/100) }, 2600, 'easeOutCirc' );
    people_layer.stop().animate({ left: - left_pos * (e/100) }, 3400, 'easeOutCirc' );
	}


	$('.snap').click(function(){
		var x_position		= $(this).position().left,
			range_width		= $('.range').width() - 132,
			ratio_raw		= x_position / range_width,
			ratio			= ratio_raw * 100;

		handle.stop().animate({ 'left': x_position }, 1200, 'easeOutCirc');
		slide_animations(ratio);

		$('.snap').removeClass('active');
		$(this).addClass('active');

		// setTimeout(
		// 	function() {
		// 		var handle_pos	= $('.handle').position().left,
		// 			snap_pos	= $(this).position().left;

		// 		if(handle_pos == snap_pos) {
		// 			alert('equal');
		// 		}
		// 		// handle_active();
		// 	}, 1201);
	});

	// Reinitialize on resize
	$(window).resize(function(){
		var windowWidth = $(window).width();
		handle.stop().animate({ "left" : ($('.range').width())/2 - 66 }, 250, 'easeOutCirc');
		centerPos = 50 + "%";
		mapslides.css({ backgroundPosition: centerPos });
		midground.css({ backgroundPosition: centerPos });
		foreground.css({ backgroundPosition: centerPos });

		slide_calculate_content_width();
		link_layer.css({ left: - windowWidth*2 });
    people_layer.css({ left: - windowWidth*2 });
	});

	//Initalization animation
	function init_animation(){
		var handle_left		= $('.handle').position().left,
			centerPos		= 50 + "%";
		$('.shell').animate({ opacity: 1}, 1200, 'linear');

		mapslides.stop().animate({ backgroundPosition: centerPos }, 1100,  'easeOutSine' );
		midground.stop().animate({ backgroundPosition: centerPos }, 1750, 'easeOutCirc' );
		foreground.stop().animate({ backgroundPosition: centerPos }, 900, 'easeOutSine' );
		link_layer.stop().animate({ left: - windowWidth*2 }, 2600, 'easeOutCirc' );
    people_layer.stop().animate({ left: - windowWidth*2 }, 3400, 'easeOutCirc' );

		var range = ($('.range').width())/2 - 66;
		handle.animate({ "left" : range }, 1200, 'easeOutCirc');

		setTimeout(function() {
			$('.snap3').addClass('active');
		}, 600);
	}

	// Make handle draggable
	handle.draggable({
		axis: "x",
		containment: "parent",
		snap: '.snap',
		snapMode : 'inner',
		snapTolerance : 30,
		cursor: 'move',

		drag: function(event, ui) {
		var x_position		= $(this).position().left,
			range_width		= $('.range').width() - 132,
			ratio			= true,
			ratio_raw		= x_position / range_width,
			ratio			= ratio_raw * 100;

			slide_animations(ratio);
			var handle_left		= $('.handle').position().left;
			//console.log(handle_left);
			$('.snap').each(function(){
				var snap_left		= $('.snap').position().left;
				console.log(snap_left);
				if(handle_left == snap_left) {
					alert('equal');
				}
			});
		}
	});

	// $('.snap').droppable({
	// 	drop: function(event, ui) {
	// 		var magnifyGlassPos = ui.position.left;
	// 	}
	// });
});
