$('document').ready(function () {

	$('#email_form').on('click', function (){
		alert('스팸으로 인해 차단 해놓은 기능입니다.');
	});

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

	$('#main').fullpage({
		anchors: ['weblee', 'site', 'mail'],
		navigation: true,
		navigationPosition: 'right',
		navigationTooltips: ['Weblee', 'Site', 'Mail'],

		afterLoad: function(anchorLink, index){

            if(index === $('#main .section').length){
                $('body').addClass('end');
            }else {
            	$('body').removeClass('end');
            }
            
        }

	});

	if (window.matchMedia("(prefers-color-scheme: dark)").matches) {
	    document.documentElement.classList.add("white");
	    document.documentElement.classList.add("color");
	}

	document.getElementById("section1_theme").addEventListener("click",() => {
	  document.documentElement.classList.toggle("white");
	})
	document.getElementById("section2_theme").addEventListener("click",() => {
	  document.documentElement.classList.toggle("color");
	})

});

