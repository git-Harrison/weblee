$(document).ready(function(){

	//닫기버튼 & 팝업 백그라운드 클릭 시 팝업 삭제
	$('.close_btn, .popup_bg').on('click', function(){
		$('.popup').remove();
		$('.popup_bg').remove();
		$('body').css('overflow','visible')
	});

});