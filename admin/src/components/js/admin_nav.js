$('document').ready(function () {
	
	// 사이드 네비 클릭 이벤트
	$('.nav_list div').on('click', function(){
		ClearNavClass();
		$(this).parent('.nav_list').addClass('on');
	});

	function ClearNavClass() {
		$('.nav_list').removeClass('on');
	}

});

//. 좌측 메인메뉴 활성화
function main_menu(mode=""){
	if(mode=="") return false;
	$(".nav_list").eq(mode).addClass('on');
}