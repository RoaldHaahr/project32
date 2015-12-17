<?php

	include_once('connection.php');

	$sql = "INSERT INTO users (name, password)
			VALUES (:name, :password);";

	try {
		$st = $conn->prepare($sql);
		$st->bindValue(':name', $_POST['username'], PDO::PARAM_STR);
		$st->bindValue(':password', $_POST['password'], PDO::PARAM_STR);
		$st->execute();
	} catch (PDOException $e) {
		echo "Server error - try again! " . $e->getMessage();
	}

	header('Location:' . 'signUpCompletion.php');

	$conn = null;

?>