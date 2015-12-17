<?php
	session_start();
	if(isset($_SESSION['loggedOn'])) {
		$nav = 'navIn.php';
	} else {
		$nav = 'navOut.php';
	}
?>

<nav id="nav-out" class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="home.php"><img src="images/logogif.gif"></a>
		</div>
		<div><?php include_once($nav); ?></div>
	</div>
</nav>
	
