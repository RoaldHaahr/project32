<?php
	include 'connection.php';
	
	$image = addslashes(file_get_contents($_FILES['user-picture']['tmp_name'])); //Extract the content of image
	$imageProperties = getimageSize($_FILES['user-picture']['tmp_name']);//Extract the mime type (filetype)
	
	session_start();
	
	if(!empty($_SESSION['userID'])) {
		if($_SESSION['role'] == 'traveler') {
			
			echo $_SESSION['loggedOn'] . $_SESSION['role'];
			
			$sql = "INSERT INTO postcards (userID, date, location, content, tags, type, title, picture, filetype)
			VALUES (:userID, :date, :location, :content, :tags, :type, :title,'" . $image . "','" . $imageProperties['mime'] . "')";
			
			try {
				$st = $conn->prepare($sql);
				$st->bindValue(":userID", $_SESSION['userID'], PDO::PARAM_INT);
				$st->bindValue(":date", date("Y-m-d H:i:s"), PDO::PARAM_STR);
				$st->bindValue(":location",$_POST["location"], PDO::PARAM_STR);
				$st->bindValue(":content",$_POST["content"], PDO::PARAM_STR);
				$st->bindValue(":tags",$_POST["tags"], PDO::PARAM_STR);
				$st->bindValue(":type",$_POST["type"], PDO::PARAM_STR);
				$st->bindValue(":title",$_POST["title"], PDO::PARAM_STR);
				$st->execute();
				echo "userID: " . $_SESSION['userID'] . " logged in? " . $_SESSION["loggedOn"];
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