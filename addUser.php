<?php

	include_once('connection.php');

	$id = NULL;

	$sql = "INSERT INTO users (email, password)
			VALUES (:email, :password);";
	try {
		$st = $conn->prepare($sql);
		$st->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
		$st->bindValue(':password', md5($_POST['password']), PDO::PARAM_STR);
		$st->execute();
		$id = $conn->lastInsertId();
	} catch (PDOException $e) {
		echo "Server error - try again! " . $e->getMessage();
	}

	session_start();

	$_SESSION['userID'] = $id;
	$conn = null;
	
	header('Location:' . 'signUpCompletion.php');

?>