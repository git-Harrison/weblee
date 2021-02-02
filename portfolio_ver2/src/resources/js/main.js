$('document').ready(function () {

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