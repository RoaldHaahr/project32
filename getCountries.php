<?php
	include_once('connection.php');

	$sql = "SELECT * FROM countries";

	try {
		$st = $conn->prepare($sql);
		$st->execute();
		$rows = $st->fetchAll();
	} catch (PDOException $e) {
		echo 'Server error - try again!';
	}

	$countries = "";

	foreach($rows as $countryrow) {
		$countries .= '<option value="' . $countryrow['country'] . '">' . $countryrow['country'] . '</option>';
	}

	echo $countries;
	$conn = null;

?>
