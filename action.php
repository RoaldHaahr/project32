<?php
include_once('connection.php');

if (isset($_SESSION['userID'])) {
    $user   = $_SESSION['userID'];
    $action = $_POST['action'];
	$pid=$_POST['pid'];
    if ($action == 'like') {
        $sql = $conn->prepare("SELECT * FROM likestbl  WHERE  uid=$user");
        $sql->execute();
        $matches = $sql->rowCount();
        if ($matches == 0) {
            $sql = $conn->prepare("INSERT INTO likestbl (pid, uid) VALUES($pid, $user)");
            $sql->execute();
            $sql = $conn->prepare("UPDATE postcards SET numberOfLikes=numberOfLikes+1 WHERE ID=$pid");
            $sql->execute();
        } else {
            die("There is No Post With That ID");
        }
    }
    if ($action == 'unlike') {
        $sql = $conn->prepare("SELECT 1 FROM likestbl  WHERE pid=$pid and uid=$user");
        $sql->execute();
        $matches = $sql->rowCount();
        if ($matches != 0) {
            $sql = $conn->prepare("DELETE FROM likestbl WHERE pid=$pid AND uid=$user");
            $sql->execute();
            $sql = $conn->prepare("UPDATE postcards SET numberOfLikes=numberOfLikes-1 WHERE ID=$pid");
            $sql->execute();
        }
    }
}
?>