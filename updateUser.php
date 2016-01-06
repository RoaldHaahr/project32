<?php

	include_once('connection.php');

	session_start();

	if($_FILES["image"]['name'] != ""){

		$image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); //Extract the content of image
		$imageProperties = getimageSize($_FILES['image']['tmp_name']); //Extract the mime type (filetype)
		
		$sql = "UPDATE users 
				SET name = :name, role = :role, picture = '" . $image . "', filetype = '" . $imageProperties . "', description = :description, country = :country  
				WHERE ID = " . $_SESSION['userID'];
	} else{
		$sql = "UPDATE users 
				SET name = :name, role = :role, description = :description, country = :country  
				WHERE ID = " . $_SESSION['userID'];
	}
	try {
		$st = $conn->prepare($sql);
		$st->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
		$st->bindValue(':role', $_POST['role'], PDO::PARAM_STR);
		$st->bindValue(':description', $_POST['description'], PDO::PARAM_STR);
		$st->bindValue(':country', $_POST['nationality'], PDO::PARAM_STR);
		$st->execute();
	} catch (PDOException $e) {
		echo "Server error - try again! " . $e->getMessage();
	};

	$conn = null;
	
	header('Location: ' . 'myProfile.php');


?>


	