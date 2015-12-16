<?php
	include_once('connection.php');
	session_start();
	$sql = "SELECT * FROM users WHERE ID = " . $_GET['ID'];
	
	try {
		$st = $conn->prepare($sql);
		$st->execute();
		$row = $st->fetch();
	} catch (PDOException $e) {
		echo "Server error - try again!<br>" . $e->getMessage();
	}

	$profilePicture = '<img src="showImageProfile.php?ID=' . $_GET['ID'] . '" alt="profilePicture" class="profilePicture">';
	
?>