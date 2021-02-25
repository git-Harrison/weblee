$('document').ready(function () {

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