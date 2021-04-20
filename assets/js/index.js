$('document').ready(function () {


	$('#main').fullpage({
		anchors: ['main', 'site', 'mail'],
		navigation: true,
		navigationPosition: 'right',
		navigationTooltips: ['Main', 'Site', 'Mail'],

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

