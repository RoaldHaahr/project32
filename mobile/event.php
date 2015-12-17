<html>
<head></head>
<body>

<script src="jquery-2.1.4.min.js"></script>
<script type="text/javascript">
	
	$.ajax({
		url: 'http://events.makeable.dk/api/getEvents',
		method: 'GET'
	}).done(function(data) {
		console.log(data);
	})
</script>
</body>
</html>
