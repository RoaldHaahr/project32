<?php

	include_once('connection.php');

	session_start();

	$_SESSION = array();

	if (isset($_COOKIE[session_name()])) {
		setcookie(session_name(), '', time()-86400, '/');
	}

	session_unset();
	session_destroy();

	header('Location: '. '/project32/index.php' );
?>
