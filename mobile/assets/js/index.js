
// 클릭 이벤트

$('#msg_close').on('click', function(){
	$('#message').addClass('none');
	$('header span').addClass('on');
});

$('header').on('click', function(){
	$('#message').removeClass('none');
	$('header span').removeClass('on');
});