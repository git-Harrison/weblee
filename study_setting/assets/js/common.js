$(document).ready(function(){

	$('#nav_icon').click(function(){

		$(this).toggleClass('open');
		$('body').toggleClass('active');
		if ($(this).hasClass('open')) {
			$('.nav').addClass('on');
			$('.nav_icon_wrap').addClass('on');
		}else {
			$('.nav').removeClass('on');
			$('.nav_icon_wrap').removeClass('on');
		}

	});

});