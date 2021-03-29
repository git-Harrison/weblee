$(document).ready(function(){

	// 번역
	var dictionary = {
    	'msg_top': {
            'en': 'Unread message',
            'ko': '읽지 않은 메시지',
	    },
	    'msg_text': {
            'en': '<?php echo 'This is the mobile version <br> If you want the PC version, please use the PC' ?>',
            'ko': '<?php echo '현재 모바일 버전입니다 <br> PC 버전을 원하시면 PC를 사용하세요' ?>',
	    }
	};
	var langs = ['en', 'ko'];
	var current_lang_index = 0;
	var current_lang = langs[current_lang_index];

	window.change_lang = function() {
	    current_lang_index = ++current_lang_index % 2;
	    current_lang = langs[current_lang_index];
	    translate();
	}

	function translate() {
	    $("[data-translate]").each(function(){
	        var key = $(this).data('translate');
	        $(this).html(dictionary[key][current_lang] || "N/A");
	    });
	}

	translate();

	// 클릭 이벤트
	$('#chang_bg_btn').on('click', function(){
		$('#wrap').toggleClass('night');
	});

	$('.msg_close').on('click', function(){
		$('#message').addClass('none');
		$('header span').addClass('on');
	});
	$('header').on('click', function(){
		$('#message').removeClass('none');
		$('header span').removeClass('on');
	});

});