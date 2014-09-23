$(document).ready(function(){
	$('.map-links a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
		var id = $(this).attr('href');
		$('.mobile-map .map').removeClass('active');
		$('.mobile-map .map[ data-name=' + id + ']'  ).addClass('active');
	});


	var url = window.location.hash;

	function animate_cp() {
		$('#pitt').animate({width: 0, opacity: 0}, 300, function() {
			$('.map-overlay-cp').animate({opacity: 1}).show("scale", 300,function() {
				$('.map-overlay-pitt').animate({opacity: 0}).hide("scale", 300);
				$('#cp').animate({width: 208, opacity: 1}, 400);
			});
		});

		return false;
	}

	function animate_pitt() {
		$('#cp').animate({width: 0, opacity: 0}, 300, function() {
			$('.map-overlay-pitt').animate({opacity: 1}).show("scale", 300,function() {
				$('.map-overlay-cp').animate({opacity: 0}).hide("scale", 300);
				$('#pitt').animate({width: 208, opacity: 1}, 400);
			});
		});

		return false;
	}

	function showCategory() {
		var sideNav = $('.side-nav'),
			link = sideNav.find('ul li a');

		link.hover(function(){
			target = $(this).attr('data-target');
			$('.item-attraction, .item-attraction').removeClass('hover');
			$('.item-attraction[ data-target=' + target + ']' ).addClass('hover');
		});

		link.mouseout(function(){
			$('.item-attraction, .item-attraction').removeClass('hover');
		});

		link.click(function(e){
			e.preventDefault();

			target = $(this).attr('data-target');

			if($(this).hasClass('active')) {
				$(this).removeClass('active');
				$('.item-attraction, .item-attraction div').removeClass('active');
			} else {
				$('.item-attraction, .item-attraction div').removeClass('active');
				$('.item-attraction[ data-target=' + target + '], .item-attraction div').addClass('active');
				$(target).addClass('active');
				$(this).addClass('active');
				link.not(this).removeClass('active');
			}
		});
	}

	showCategory();

	$('.link.all').addClass('active');

	$('.link').click(function(){
		$('.link').removeClass('active');
		$(this).addClass('active');
	});

	if(url === '#chatham-county') { animate_cp(); $('.link').removeClass('active'); $('.link.cp').addClass('active'); }
	if(url === '#pittsboro') { animate_pitt(); $('.link').removeClass('active'); $('.link.pit').addClass('active'); }

	$('.lg .link.cp').click(function(){
		animate_cp();
	});

	$('.lg .link.pit').click(function(){
		animate_pitt();
	});

	$('.lg .link.all').click(function(){
		$('#cp, #pitt').animate({width: 0, opacity: 0}, 300, function() {
			$('.map-overlay-cp, .map-overlay-pitt').animate({opacity: 0}).hide("scale", 300);
		});

		return false;
	});
});
