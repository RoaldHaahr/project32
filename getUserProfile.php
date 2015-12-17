<?php
	include_once('connection.php');

	$sql = "SELECT * FROM users WHERE " . $_SESSION['userID'] . " = userID";

	try {
		$st = $conn->prepare($sql);
		$st->execute();
		$row->fetch();
	} catch (PDOException $e) {
		echo "Server error - try again!<br>" . $e->getMessage();
	}
?>