<?php

	include_once('connection.php');

	$image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); //Extract the content of image
	$imageProperties = getimageSize($_FILES['image']['tmp_name']);//Extract the mime type (filetype)

	$sql = "INSERT INTO users (name, password)
			VALUES (:name, :password);";

	try {
		$st = $conn->prepare($sql);
		$st->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
		$st->bindValue(':password', $_POST['password'], PDO::PARAM_STR);
		$st->execute();
	} catch (PDOException $e) {
		echo "Server error - try again! " . $e->getMessage();
	}

	$conn = null;

?>