<?php

	include_once('connection.php');

	session_start();

	$image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); //Extract the content of image
	$imageProperties = getimageSize($_FILES['image']['tmp_name']);//Extract the mime type (filetype)


	if(!empty($_SESSION['userID'])) {
		if($_SESSION['role'] == 'Tourist') {

			$sql = "INSERT INTO postcards (userID, date, content, tags, type, title, picture, filetype)
			VALUES (:userID, :date, :content, :tags, :type, :title,'" . $image . "','" . $imageProperties['mime'] . "')";

			try {
				$st = $conn->prepare($sql);
				$st->bindValue(":userID", $_SESSION['userID'], PDO::PARAM_INT);
				$st->bindValue(":date", date("Y-m-d H:i:s"), PDO::PARAM_STR);
				$st->bindValue(":content",$_POST["story"], PDO::PARAM_STR);
				$st->bindValue(":tags",$_POST["tags"], PDO::PARAM_STR);
				$st->bindValue(":type",$_POST["privacy"], PDO::PARAM_STR);
				$st->bindValue(":title",$_POST["title"], PDO::PARAM_STR);
				$st->execute();
			} catch(PDOException $e) {
				echo "Server Error - Try again!".$e->getMessage();
			}
		} else {
			echo "You don't have the rights to create a postcard!";
		}
		
	} else {
		echo "You shall not pass!";
	}

	$conn = null;
	

?>