<?php
	include_once 'connection.php';
	$sql = "SELECT ID, userID, location, content, title, picture, filetype FROM postcards WHERE type = 1";
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
		$description = $row['content'];
		$postcards .= '<figure class="postcardbox">
							<img src="showImage.php?ID=' . $row['ID'] . '" alt="event-picture" class="postcard-picture">
							<figcaption>
								<h3>' . $title . '</h3>
								<span>' . $description . '</span>
							</figcaption>
						</figure>';
	}
	echo $postcards;
	$conn = "";
?>