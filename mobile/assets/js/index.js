// 클릭 이벤트
$('#chang_bg_btn').on('click', function(){
	$('#wrap').toggleClass('night');
});

$('#msg_close').on('click', function(){
	$('#message').addClass('none');
	$('header span').addClass('on');
});

$('header').on('click', function(){
	$('#message').removeClass('none');
	$('header span').removeClass('on');
});