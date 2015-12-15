<?php
	$dsn = "mysql:host=localhost;dbname=tellastory";
	$username="root";
	$password="";
	$e="";

	try {
		$conn = new PDO($dsn, $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	};
?>