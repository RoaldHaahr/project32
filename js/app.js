$('a#nearest-events').click(function(e){
	e.preventDefault();

	var startPos;

	function showPosition(position) {
		var startPos = position;

		var distanceCoords = {
			'x': position.coords.latitude,
			'y': position.coords.longitude
		};

		$.post('getNearestEvents.php', { coordinates: JSON.stringify(distanceCoords) }, processData);

		function processData(data) {
			$('div#events-list').html(data);
		}
	}

	navigator.geolocation.getCurrentPosition(showPosition);

	
});

