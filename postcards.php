<?php $page=postcards; ?>
<?php include_once('header.php'); ?>
	<body>
	<script>
	$( "html" ).addClass( "no-js" );
	</script>
	<script src="js/modernizr.custom.js"></script>
		<?php include_once('nav.php'); ?>
		<section id="postcards-page" class="container demo-1 page">
			<!-- Top Navigation -->
			
			<ul class="grid cs-style-1">
				<?php require('getPostcards.php'); ?>
				<li>
					<figure>
						<img src="images/1.png" alt="img01">
						<figcaption>
							<h3>Camera</h3>
							<span>Jacob Cummings</span>
							<a href="http://dribbble.com/shots/1115632-Camera">Take a look</a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="images/2.png" alt="img02">
						<figcaption>
							<h3>Music</h3>
							<span>Jacob Cummings</span>
							<a href="http://dribbble.com/shots/1115960-Music">Take a look</a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="images/4.png" alt="img04">
						<figcaption>
							<h3>Settings</h3>
							<span>Jacob Cummings</span>
							<a href="http://dribbble.com/shots/1116685-Settings">Take a look</a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="images/5.png" alt="img05">
						<figcaption>
							<h3>Safari</h3>
							<span>Jacob Cummings</span>
							<a href="http://dribbble.com/shots/1116775-Safari">Take a look</a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="images/3.png" alt="img03">
						<figcaption>
							<h3>Phone</h3>
							<span>Jacob Cummings</span>
							<a href="http://dribbble.com/shots/1117308-Phone">Take a look</a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="images/6.png" alt="img06">
						<figcaption>
							<h3>Game Center</h3>
							<span>Jacob Cummings</span>
							<a href="http://dribbble.com/shots/1118904-Game-Center">Take a look</a>
						</figcaption>
					</figure>
				</li>
			</ul>
		</div><!-- /container -->
		<script src="js/toucheffects.js"></script>
	</body>
</html>