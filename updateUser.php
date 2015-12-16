<?php

	include_once('connection.php');

	$image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); //Extract the content of image
	$imageProperties = getimageSize($_FILES['image']['tmp_name']);//Extract the mime type (filetype)

	$sql = "INSERT INTO users (description, picture, filetype, role, country)
			VALUES (:description," . $image . ", " . $imageProperties['mime'] . ", :role, :country);";

	try {
		$st = $conn->prepare($sql);
		$st->bindValue(':description', $_POST['description'], PDO::PARAM_STR);
		$st->bindValue(':role', $_POST['role'], PDO::PARAM_STR);
		$st->bindValue(':country', $_POST['country'], PDO::PARAM_STR);
		$st->execute();
	} catch (PDOException $e) {
		echo "Server error - try again! " . $e->getMessage();
	}

	$conn = null;

?>