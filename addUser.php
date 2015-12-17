<?php

	include_once('connection.php');

	$sql = "INSERT INTO users (name, password)
			VALUES (:name, :password);";

$password=md5($_POST['password']);

	try {
		$st = $conn->prepare($sql);
		$st->bindValue(':name', $_POST['username'], PDO::PARAM_STR);
		$st->bindValue(':password', $password, PDO::PARAM_STR);
		$st->execute();
	} catch (PDOException $e) {
		echo "Server error - try again! " . $e->getMessage();
	}

	header('Location:' . 'signUpCompletion.php');

	$conn = null;

?>