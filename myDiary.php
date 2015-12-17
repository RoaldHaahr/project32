<?php $page='postcards'; ?>
<?php include_once('header.php'); ?>
	<body>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script>
	$( "html" ).addClass( "no-js" );
	</script>
	<script src="js/modernizr.custom.js"></script>
		<?php include_once('nav.php'); ?>
		<section id="postcards-page" class="container demo-1 page">
			<!-- Top Navigation -->
			
			<ul class="grid cs-style-1">
				<?php require('getYourPostcards.php'); ?>
				
			</ul>
		</div><!-- /container -->
		<script src="js/toucheffects.js"></script>
	</body>
</html>