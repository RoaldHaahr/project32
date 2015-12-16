<?php
	include 'connection.php';
	
	session_start();


	if($_FILES["user-picture"]['name'] != ""){

		$image = addslashes(file_get_contents($_FILES['user-picture']['tmp_name'])); //Extract the content of image
		$imageProperties = getimageSize($_FILES['user-picture']['tmp_name']); //Extract the mime type (filetype)
		
		$sql = "UPDATE users 
				SET role = :role, picture = '" . $image . "', filetype = '" . $imageProperties . "', description = :description, country = :country  
				WHERE ID = " . $_SESSION['userID'];
	} else{
		$sql = "UPDATE users 
				SET role = :role, description = :description, country = :country  
				WHERE ID = " . $_SESSION['userID'];
	}
	try {
		$st = $conn->prepare($sql);
		$st->bindValue(':role', $_POST['role'], PDO::PARAM_STR);
		$st->bindValue(':description', $_POST['description'], PDO::PARAM_STR);
		$st->bindValue(':country', $_POST['country'], PDO::PARAM_STR);
		$st->execute();
	} catch (PDOException $e) {
		echo "Server error - try again! " . $e->getMessage();
	};

	header('Location: ' . 'm.yourProfile.php');
	
	$conn = null;
?>
		