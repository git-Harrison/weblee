$('document').ready(function () {

	// $(document).bind('keydown',function(e){
	// 	if (e.keyCode == 123 || e.keyCode == 17 || e.keyCode == 18 || e.keyCode == 27 || (e.keyCode > 111 && e.keyCode < 124) || e.altKey || e.ctrlKey) {
	// 		e.preventDefault();
	// 		e.returnValue = false;
	// 	}
	// });
	//
	// // 우측 클릭 방지
	// document.onmousedown=disableclick;
	// status="Right click is not available";
	//
	// function disableclick(event){
	// 	if (event.button==2) {
	// 		alert(status);
	// 		return false;
	// 	}
	// }
	
	// Isotope
	var $grid = $('.list').isotope({
		itemSelector: '.list_item',
		layoutMode: 'fitRows'
	});
	
	var filterFns = {
		numberGreaterThan50: function() {
			var number = $(this).find('.number').text();
			return parseInt( number, 10 ) > 50;
		},
		ium: function() {
			var name = $(this).find('.name').text();
			return name.match( /ium$/ );
		}
	};

	$('.filter_button').on( 'click', 'button', function() {
		var filterValue = $( this ).attr('data-filter');

		filterValue = filterFns[ filterValue ] || filterValue;
		$grid.isotope({ filter: filterValue });
	});

	$('.filter_button').each( function( i, buttonGroup ) {
		var $buttonGroup = $( buttonGroup );
		$buttonGroup.on( 'click', 'button', function() {
			$buttonGroup.find('.is-checked').removeClass('is-checked');
			$( this ).addClass('is-checked');
		});
	});

});