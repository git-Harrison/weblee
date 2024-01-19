$('document').ready(function () {

	// F12 버튼 방지
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

	// 화이트모드
	if (window.matchMedia("(prefers-color-scheme: dark)").matches) {
	    document.documentElement.classList.add("white");
	}

	document.getElementById("toggle_theme").addEventListener("click",() => {
	  document.documentElement.classList.toggle("white");
	})

	$(".dark-mode-button").click(function(){
		let $this = $(this);
		$(this).toggleClass("on");

  		switch ($this.attr("aria-checked")){
			case "false":
	  		$this.attr("aria-checked", "true");
	  		break;
			case "true":
	  		$this.attr("aria-checked", "false");
	  		break;
			default:
	      	$this.attr("aria-checked", "true");
  		}

	});
});