$(document).ready(function(){
 	
 	// 상품 페이지 슬라이드
	$('.item_video').slick({
		dots: true,
		infinite: true,
		speed: 300,
		autoplay: true,
  		autoplaySpeed: 25000 //동영상 재생시간이 25초라서 25초뒤에 자동으로 넘어가게 옵션설정
	});

});