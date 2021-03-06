$(document).ready(function($){
	var certFilters     = $('#cert-filters'),
		filterGroup     = certFilters.find('.filter-group'),
		browseByTitle   = certFilters.find('.filter-group.browse-by .title'),
		browseByLink    = certFilters.find('.filter-group.browse-by li'),
		browseByList    = certFilters.find('.filter-group.browse-by ul'),
		subFilter       = certFilters.find('.filter-group.sub'),
		subLink         = certFilters.find('.filter-group.sub li'),
		subTitle        = certFilters.find('.filter-group.sub .title');

	browseByTitle.click(function(){ browseByList.fadeToggle(); });
	browseByLink.click(function(){
		var target      = $(this).attr('data-target'),
			content     = $(this).html();

		browseByList.fadeToggle();
		$('#' + target).show();
		subFilter.not('#' + target).hide();
		//$('.lead-in').html('Currently browsing by: ' + content);
	});

	subLink.click(function(){
		var content     = $(this).html();

		$(this).find('ul').show();
		$('#current').show().find('.title').html(content);
		//$('.headline').html(content);

		subLink.parent().fadeOut();
	});

	subTitle.click(function(){
		$(this).next('ul').fadeToggle();
	});

	$(document).keyup(function(e) {
		if (e.keyCode === 27) {
			if ($('.filter-group ul').is(':visible')) {
				$('.filter-group ul').fadeOut();
			}
		}
	});

	function filterResults() {
		$('.all').click(function(){
			$(this).siblings().attr('checked', false);
		});

		$('input[type="checkbox"]').click(function(){
			var nameSpace = $(this).parent().parent().parent().prop('id');

			if($(this).hasClass('all')) { $('#' + nameSpace + ' input[type="checkbox"]').not($(this)).attr('checked', false); }
			if(!$(this).hasClass('all')) { $('#' + nameSpace + ' .all').attr('checked', false); }
			if($('#' + nameSpace + ' input[type="checkbox"]:checked').length === 0) {
				$('#' + nameSpace + ' .all').attr('checked', true);
			}
		});
	}

	//filterResults();
});