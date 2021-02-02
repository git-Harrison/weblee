$('document').ready(function () {

	// PC 헤더 마우스 오버
	const nav = $('.header_menu');
    const icon = $('.header_menu nav ul li a');
    nav.hover(function(){
	    	icon.addClass('hover');
	    },function(){
	    	icon.removeClass('hover');
	});

	// 모바일 사이드메뉴
	$('.m_header_menu').click(function(){
		$('html').toggleClass('hidden');
		$('.icon, .side_menu, .contents, .header').toggleClass('active');
	});

	// 스크롤 탑
	$('.scroll_top').on('click', function(){
		$( 'html, body' ).animate( { scrollTop : 0 }, 300 );
		return false;
	});

	var didScroll;
	var lastScrollTop = 10;
	var delta = 5;
	var BodyHeight = $('body').outerHeight();
	
	$(window).scroll(function(event){didScroll = true; });

	setInterval(function() {
		if (didScroll) {
			hasScrolled(); didScroll = false; } 
	}, 250);

	function hasScrolled() {
		var st = $(this).scrollTop();
		if(Math.abs(lastScrollTop - st) <= delta)
			return;
		if (st > lastScrollTop && st > BodyHeight){
			$('.scroll_top').fadeIn("fast");
		} else {
			if(st + $(window).height() < $(document).height()) {
				$('.scroll_top').fadeOut("fast");
			}
		}
	}

	// PC SNS 
	const sns = $('.mysite .sns a');
	sns.hover(function(){
	    	$(this).addClass('hover');
	    },function(){
	    	$(this).removeClass('hover');
	});

});