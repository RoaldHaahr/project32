<?php $page=homepage; ?>
<?php include_once('header.php'); ?>

	<nav id="front-page" class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"><img src="images/logowhite.png"></a>
			</div>
			<div>
				<ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="postcards.php">Postcards</a></li>
					<li><a href="events.php">Events</a></li> 
					<li><a href="login.php">Log in</a></li>
					<li><a class="box-btn" href="signUp.php">Sign up</a></li> 
				</ul>
			</div>
		</div>
	</nav>

	<section id="home" class="page">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2">
					<a href="#" id="left-arrow"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span></a>
				</div>
				<div class="col-md-8">
					<article id="welcome">
						<h2 class="slogan">from Aarhus with love</h2>
						<p id="welcome-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</article>
				</div>
				<div class="col-md-2">
					<a href="#" id="right-arrow"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>
				</div>
			</div>
		</div>	
	</section>

<?php include_once('footer.php'); ?>