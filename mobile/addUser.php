<?php
	include 'connection.php';

	$sql = "INSERT INTO users (name, email, password)
			VALUES (:name, :email, :password);";
	try {
		$st = $conn->prepare($sql);
		$st->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
		$st->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
		$st->bindValue(':password', $_POST['password'], PDO::PARAM_STR);
		$st->execute();
	} catch (PDOException $e) {
		echo "Server error - try again! " . $e->getMessage();
	}

	
	$sql2 = "SELECT LAST_INSERT_ID() FROM users";
	$row = $conn -> query($sql2);
	session_start();
	$_SESSION['userID'] = 'ID';

	header('Location: '. 'm.completProfile.php' );
	$conn = null;
?>