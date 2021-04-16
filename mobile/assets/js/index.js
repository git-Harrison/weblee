$(document).ready(function(){

	// 번역
	var dictionary = {
    	'msg_top': {
            'en': 'Unread message',
            'ko': '읽지 않은 메시지',
	    },
	    'msg_text': {
            'en': 'This is the mobile version <br> If you want the PC version, please use the PC',
            'ko': '현재 모바일 버전입니다 <br> PC 버전을 원하시면 PC를 사용하세요',
	    },
	    'site1': {
            'en': 'Publisher Study (Reference)',
            'ko': '퍼블리셔 스터디 (참조)',
	    },
	    'site1_sub': {
            'en': '#reactive #web #mobile',
            'ko': '#반응형 #웹 #모바일',
	    },
	    'app1': {
            'en': 'site',
            'ko': '웹페이지',
	    },
	    'app2': {
            'en': 'mail',
            'ko': '메일',
	    },
	    'app3': {
            'en': 'github',
            'ko': '깃허브',
	    },
	    'app4': {
            'en': 'instagram',
            'ko': '인스타그램',
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

});

// 낮 밤 전환

$('#chang_bg_btn').on('click', function(){
	$('#change_bg').toggleClass('night');
});

$('#change_lang').on('click', function(){
	$(this).toggleClass('on');
});

// 클릭 이벤트

$('#msg_close').on('click', function(){
	$('#message').addClass('none');
	$('header span, .app_wrap').addClass('on');
});

$('header').on('click', function(){
	$('#message').removeClass('none');
	$('header span, .app_wrap').removeClass('on');
});

$('.site').on('click', function(){
	$('#site').addClass('app_on');
});

$('.app_top').on('click', function(){
	$(this).parents('#site').removeClass('app_on');
});