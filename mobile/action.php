<?php
session_start();
include_once('connection.php');
if (isset($_SESSION['userID'])) {
    $user   = $_SESSION['userID'];
$pid=$_POST['pid'];
$action = $_POST['action'];
    if ($action == 'like') {
        $sql = $conn->prepare("SELECT * FROM likestbl  WHERE  uid=$user && pid=$pid");
        $sql->execute();
        $matches = $sql->rowCount();
        if ($matches == 0) {
            $sql = $conn->prepare("INSERT INTO likestbl (pid, uid) VALUES($pid, $user)");
            $sql->execute();
            $sql = $conn->prepare("UPDATE postcards SET numberOfLikes=numberOfLikes+1 WHERE ID=$pid");
            $sql->execute();
echo 'Whatever first';
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
echo 'Whatever';
        }
    }
}
?>