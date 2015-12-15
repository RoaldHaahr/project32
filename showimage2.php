<?php
include_once('connection2.php');

$sql = "SELECT filetype, picture FROM postcards WHERE postcards.ID=". $_GET['ID'];

try {
	$st = $conn->prepare($sql);
	$st->execute();
	$row = $st->fetch();
} catch (PDOException $e) {
	echo "Server Error - try again!" . $e->getMessage();
}

$blob = get_image_data($row['picture'])
header("Content-type: " . $row["filetype"]);
echo $blob;


$conn=null;

?>