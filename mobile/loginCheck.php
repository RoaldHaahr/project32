<?php
	include_once('connection.php');
	$sql = "SELECT count(*) as success, id, role FROM users WHERE name=:username AND password=:password";
	try {
		$st = $conn->prepare($sql);
		$st->bindValue(":username", $_POST["username"], PDO::PARAM_STR);
		$st->bindValue(":password", $_POST["password"], PDO::PARAM_STR);
		$st->execute();
		$row=$st->fetch();          
	} catch (PDOException $e) {
		echo "Server Error - try again!" . $e->getMessage();
	}
	if ($e == "" and $row["success"] == 1) {
		session_start(); 
		$_SESSION["loggedOn"] = 1;
		$_SESSION["userID"] = $row["id"];
		$_SESSION["role"] = $row["role"];
		header('Location: ' . 'm.postcards.php');
	} else {
		header('Location: ' . 'm.login.php');
	};
	$conn=null; //disconnect to server
?>