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
		$description = $row['content'];
		$postcards .= '<figure>
							<img src="showImage.php?ID=' . $row['ID'] . '" alt="postcard-picture" class="postcard-picture">
							<figcaption>
								<h3>' . $title . '</h3>
								<span>' . $row['ID'] . '</span>
							</figcaption>
						</figure>';
	}
	echo $postcards;
	$conn = "";
?>