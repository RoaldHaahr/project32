<?php
	session_start();
	if(isset($_SESSION['loggedOn'])) {
		$nav = file_get_contents('navIn.php', true);
	} else {
		$nav = file_get_contents('navOut.php', true);
	}
?>

<nav id="nav-out" class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#"><img src="images/logowhite.png"></a>
		</div>
		<div><?php echo $nav; ?></div>
	</div>
</nav>
	
