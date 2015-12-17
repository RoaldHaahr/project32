<?php

	include_once('connection.php');

	session_start();

	$image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); //Extract the content of image
	$imageProperties = getimageSize($_FILES['image']['tmp_name']);//Extract the mime type (filetype)

	$sql = "UPDATE users
			SET role = :role, picture = '" . $image . "', filetype = '" . $imageProperties['mime'] . "', description = :description, country = :country
			WHERE ID = '" . $_SESSION['userID'] . "';";

	try {
		$st = $conn->prepare($sql);
		$st->bindValue(':role', $_POST['role'], PDO::PARAM_STR);
		$st->bindValue(':country', $_POST['user-nationality'], PDO::PARAM_STR);
		$st->bindValue(':description', $_POST['user-description'], PDO::PARAM_STR);
		$st->execute();
	} catch (PDOException $e) {
		echo "Server error - try again! " . $e->getMessage();
	}

	header('Location: ' . 'myProfile.php');

	$conn = null;


?>