<?php
	
	$dsn = "mysql:host=198.71.225.58;dbname=tellastory";
	$username="mette";
	$password="Hlya207^";
	$e="";
	try {
		$conn = new PDO($dsn, $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	};
?>
