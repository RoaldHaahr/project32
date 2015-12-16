<?php
include_once('connection.php');
$sql = "SELECT filetype, picture FROM users WHERE " . $_SESSION['userID'] . " = ID";
	$rows=$conn->query($sql);
	foreach ($rows as $row) {
		header("Content-type: ". $row["filetype"]);
		echo $row["picture"];
	}
$conn=null;
?>