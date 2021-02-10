$('document').ready(function () {

	$('#main').fullpage({
		anchors: ['firstPage', 'secondPage', '3rdPage'],
		navigation: true,
		navigationPosition: 'right',
		navigationTooltips: ['컨텐츠1', '컨텐츠2', '컨텐츠3']
	});

	if (window.matchMedia("(prefers-color-scheme: dark)").matches) {
	    document.documentElement.classList.add("white");
	}

	document.getElementById("toggle_theme").addEventListener("click",() => {
	  document.documentElement.classList.toggle("white");
	})
	
});