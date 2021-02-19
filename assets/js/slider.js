$('document').ready(function () {

	var $slideWrap = $(".site_slider");

	$slideWrap.append("<div class='slide_nav'><a href='#' class='prev'><svg viewBox='-1 -2 18 18'><g stroke='none' stroke-width='1' fill='none' fill-rule='evenodd' stroke-linecap='round' stroke-linejoin='round'><path d='M3.26849658e-13,8.84328471 L3.26849658e-13,-4.19220214e-13'></path><path d='M2.27373675e-13,8.84328471 L8.84328471,8.84328471' ></path></g></svg></a><a href='#' class='next'><svg viewBox='-1 -2 18 18'><g stroke='none' stroke-width='1' fill='none' fill-rule='evenodd' stroke-linecap='round' stroke-linejoin='round'><path d='M3.26849658e-13,8.84328471 L3.26849658e-13,-4.19220214e-13'></path><path d='M2.27373675e-13,8.84328471 L8.84328471,8.84328471' ></path></g></svg></a></div>");
	$slideWrap.append("<div class='slide_indicator'></div>");
	$(".site").append("<div class='slide_count'><span class='curentIndex'>0</span><span class='slideCount'>0</span></div>");

	$slideWrap.each(function(){
		var $container = $(this),
			$slideGroup = $container.find(".slider_wrap"),
			$slide = $slideGroup.find(".site"),
			$nav = $container.find(".slide_nav"),
			$indicator = $container.find(".slide_indicator"),
			$count = $container.find(".slide_count"),

			slideCount = $slide.length,		//이미지 전체 갯수
			currentIndex = 0,				//현재 페이지
			indicatorHTML = '',				//인디케이터 HTML
			duration = 1000,				//이미지 움직이는 시간
			easing = 'easeOutExpo',			//움직임 효과
			interval = 1000,				//이미지 자동 시간 간격
			timer;

		//각각의 이미지 위치를 설정
		$slide.each(function(i){
			$(this).css({ left: 100 * i+'%' });

			indicatorHTML += "<a href='#'>" + ("0"+(i+1)) + "</a>";
		});	

		$indicator.html(indicatorHTML);

		function gotoslide(i){
			$slideGroup.animate({ left: -100 * i +'%' }, duration, easing);
			//1 = -100%  : 왼쪽으로 사라짐
			//-1 = 100%  : 오른쪽으로 사라짐
			currentIndex = i; 
			updateNav();

		}

		function updateNav(){
			var $navPrev = $nav.find('.prev'),
				$navNext = $nav.find('.next'),
				$countCurrent = $count.find('.curentIndex'),
				$countTotal = $count.find('.slideCount');

			$indicator.find('a').removeClass('active').eq(currentIndex).addClass('active');
			$slide.removeClass('active').eq(currentIndex).addClass('active');
			$countCurrent.text("0" + (currentIndex + 1));
			$countTotal.text("0" + slideCount);

			if(currentIndex == 0){
				$(".cursor").css("background-color","#f9d0bc");
				$(".cursor-follower").css({"background-color":"#f9d0bc", "opacity":"0.5"});
			}
			if(currentIndex == 1){
				$(".cursor").css("background-color","#88a9f7");
				$(".cursor-follower").css({"background-color":"#88a9f7", "opacity":"0.5"});
			}
			if(currentIndex == 2){
				$(".cursor").css("background-color","#f472d8");
				$(".cursor-follower").css({"background-color":"#f472d8", "opacity":"0.5"});
			}
			if(currentIndex == 3){
				$(".cursor").css("background-color","#f0d132");
				$(".cursor-follower").css({"background-color":"#f0d132", "opacity":"0.5"});
			}
			if(currentIndex == 4){
				$(".cursor").css("background-color","#45e3de");
				$(".cursor-follower").css({"background-color":"#45e3de", "opacity":"0.5"});
			}
			if(currentIndex == 5){
				$(".cursor").css("background-color","#4b7cee");
				$(".cursor-follower").css({"background-color":"#4b7cee", "opacity":"0.5"});
			}
			if(currentIndex == 6){
				$(".cursor").css("background-color","#e9bd39");
				$(".cursor-follower").css({"background-color":"#e9bd39", "opacity":"0.5"});
			}

		}

		$nav.on("click","a",function(e){
			e.preventDefault();
			var nextIndex = (currentIndex + 1) % slideCount;
			var prevIndex = (currentIndex - 1) % slideCount;
			if (currentIndex == 0) prevIndex = slideCount -1;
			
			if($(this).hasClass('prev')){
				//왼쪽 버튼
				gotoslide(prevIndex);
			} else {
				//오른쪽 버튼
				gotoslide(nextIndex);
			}
		});

		$indicator.on("click","a",function(e){
			e.preventDefault();
			if( !$(this).hasClass('active') ){
				gotoslide( $(this).index());
			};
		});

		//첫 번째 슬라이드 실행
		gotoslide(currentIndex);

	});

	//이미지,글씨 회전
	var $img = $(".img");
	var $txt = $(".txt");
	var x = 0;
	var y = 0;
	var folloxX = 0;
	var folloxY = 0;
	var friction = 1/30;

	function animate(){
		x += (folloxX - x) * friction;
		y += (folloxY - y) * friction;
			
		$img.css({
		'transform': 'translate(-50%, -50%) translateX('+ -x +'px) translateY('+ y +'px)'
		});
		$txt.css({
		'transform': 'translate(-50%, -50%) translateX('+ -y +'px) translateY('+ x +'px)'
		});
		window.requestAnimationFrame(animate);
	}

	$(window).on('mousemove click',function(e){
		var iMouseX = Math.max(-100, Math.min(100, $(window).width()/2 - e.clientX));
		var iMouseY = Math.max(-100, Math.min(100, $(window).height()/2 - e.clientY));
		folloxX = (12 * iMouseX) / 100;
		folloxY = (12 * iMouseY) / 100;
	});

	animate();
	
});