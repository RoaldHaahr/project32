<?php
	include_once('connection.php');

	$sql = "SELECT count(*) as success, id, role FROM users WHERE email=:email AND password=:password";

	try {
		$st = $conn->prepare($sql);
		$st->bindValue(":email", $_POST["email"], PDO::PARAM_STR);
		$st->bindValue(":password", md5($_POST["password"]), PDO::PARAM_STR);
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
		header('Location: ' . 'myProfile.php');
	} else {
		header('Location: ' . 'login.php');
	};

	$conn=null; //disconnect to server
?>