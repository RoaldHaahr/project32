<?php

	include '../connection.php';

	session_start();
	$sql = "SELECT ID FROM users";
	try {
		$st = $conn->prepare($sql);
		$st->execute();
		$rows = $st->fetchAll();
	} catch (PDOException $e) {
		echo 'Server error - try again!';
	}

	$userID = $row['ID']

	if ($_SESSION['userID'] = $userID !== true) {

		alert("You have to be loged on to enter this page. Please log on and return.")

	} else {
		
		header('Location: ../m.diary.php')
	
	};

	$conn = null
	
	