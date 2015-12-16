<?php

	include_once('connection.php');

	$image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); //Extract the content of image
	$imageProperties = getimageSize($_FILES['image']['tmp_name']);//Extract the mime type (filetype)

	session_start();

	if(!empty($_SESSION['userID'])) {
		if($_SESSION['role'] == 'local') {

			$sql = "INSERT INTO events (event_name_0, event_description, event_date, filetype, image)
			VALUES (:eventName, :eventDescription, :eventDate, '" . $imageProperties['mime'] . "', '" . $image . "')";
			try {
				$st = $conn->prepare($sql);
				$st->bindValue(":eventName", $_POST['event-name'], PDO::PARAM_STR);
				$st->bindValue(":eventDescription", $_POST['event-description'], PDO::PARAM_STR);
				$st->bindValue(":eventDate", timetostr($_POST["event-date"]), PDO::PARAM_STR);
				$st->execute();
			} catch(PDOException $e) {
				echo "Server Error - Try again!".$e->getMessage();
			}

		} else {
			echo "You don't have the rights to create an event!";
		}
		
	} else {
		echo "You shall not pass!";
	}

	$conn = null;
	

?>