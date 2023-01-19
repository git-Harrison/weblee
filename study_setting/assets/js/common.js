$(document).ready(function(){

	// $(document).bind('keydown',function(e){
	// 	if (e.keyCode == 123 || e.keyCode == 17 || e.keyCode == 18 || e.keyCode == 27 || (e.keyCode > 111 && e.keyCode < 124) || e.altKey || e.ctrlKey) {
	// 		e.preventDefault();
	// 		e.returnValue = false;
	// 	}
	// });
	//
	// //우측 클릭 방지
	// document.onmousedown=disableclick;
	// status="Right click is not available.";
	//
	// function disableclick(event){
	// 	if (event.button==2) {
	// 		alert(status);
	// 		return false;
	// 	}
	// }

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