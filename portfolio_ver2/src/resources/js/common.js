$('document').ready(function () {

	// F12 버튼 방지
	$(document).bind('keydown',function(e){
		if (e.keyCode == 123 || e.keyCode == 17 || e.keyCode == 18 || e.keyCode == 27 || (e.keyCode > 111 && e.keyCode < 124) || e.altKey || e.ctrlKey) {
			e.preventDefault();
			e.returnValue = false;
		}
	});

	// 우측 클릭 방지
	document.onmousedown=disableclick;
	status="Right click is not available";

	function disableclick(event){
		if (event.button==2) {
			alert(status);
			return false;
		}
	}

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