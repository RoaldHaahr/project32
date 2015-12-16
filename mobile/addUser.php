<?php
	include 'connection.php';

	$id = NULL;

	$sql = "INSERT INTO users (name, email, password)
			VALUES (:name, :email, :password);";
	try {
		$st = $conn->prepare($sql);
		$st->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
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
	
	header('Location: '. 'm.completProfile.php' );
	
?>