<?php
	include 'connection.php';
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
		$postcards .= '<li><figure>
							<img src="showImage.php?ID=' . $row['ID'] . '" alt="'.$row['location'].'">
							<figcaption>
							<p>'.$row['content'].' </p>
							</figcaption>
						</figure>
						<h3>' . $title . '</h3>
						<div class="share"></div>
						</figure></li>';
	}
	echo $postcards;
	$conn = "";
?>
<script src="js/jssocials-1.0.0/jquery.js"></script>
    <script src="js/jssocials-1.0.0/jssocials.min.js"></script>
    <script>
        $(".share").jsSocials({
            shares: ["email", "twitter", "facebook", "googleplus", "pinterest"]
        });
		</script>
