<?php
	include 'connection.php';
	session_start();
	$sql = "SELECT ID, userID, location, content, title, picture, filetype FROM postcards WHERE " . $_SESSION['userID'] . " = userID";
	try {
		$st = $conn->prepare($sql);
		$st->execute();
		$rows = $st->fetchAll();
	} catch (PDOException $e) {
		echo 'Server error - try again!';
	}
	$postcards = "";
	foreach($rows as $row) {
		$title = $row['title'];
		$location = $row['location'];
		$userID = 	$row['userID'];
		$description = $row['content'];
		$postcards .= '<figure class="postcardbox">
							<img src="showImage.php?ID=' . $row['ID'] . '" alt="event-picture" class="postcard-picture">
							<figcaption>
								<h3>' . $title . '</h3>
								<p class="content">' . $description . '</p>
								<p class="sender">Sent by: <a href="m.profile.php?ID=' . $userID . '">' . $userID . '</a></p>
							</figcaption>
						</figure>';
	}
	echo $postcards;
	$conn = "";
?>