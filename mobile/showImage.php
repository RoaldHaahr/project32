<?php
include_once('connection.php');
$sql = "SELECT filetype, picture FROM postcards WHERE ID = " . $_GET['ID'];
	$rows=$conn->query($sql);
	foreach ($rows as $row) {
		header("Content-type: ". $row["filetype"]);
		echo $row["picture"];
	}
$conn=null;
?>