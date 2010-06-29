	var query = new Object();
	window.location.search.replace(
	new RegExp( "([^?=&]+)(=([^&]*))?", 'g' ),
		function( $0, $1, $2, $3 ){
			query[ $1 ] = $3;
		}
	);
	easing = query['e'] || 'Circ';
	
	function loadEasing(e) {
		location.href = location.pathname+'?e='+e;
	}
	
	function setEasing(e) {
		loadLamps(e);
	}

// for dynamic easing changes		
	function loadLamps(easing) {
		$('#main-navlinks').lavaLamp({
			fx: 'easeIn'+easing,
			speed: 800
		});
	}
	
// jquery initialize:
	$(function() {
		loadLamps(easing);
		
		$('select#easing option[value='+easing+']').attr('selected','selected');
		$('.easingLabel').text(easing);
	});