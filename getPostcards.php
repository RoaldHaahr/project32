<?php
	include_once('connection.php');

	$sql = "SELECT ID, userID, location, content, title, picture, filetype FROM postcards";

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

		$postcards .= '<li>
						<figure>
							<img src="showImage.php?ID=' . $row['ID'] . '" alt="event-picture">
							<figcaption>
								<h3>' . $title . '</h3>
								<span>' . $row['ID'] . '</span>
							</figcaption>
						</figure>
					</li>';
	}

	echo $postcards;

	$conn = null;

?>