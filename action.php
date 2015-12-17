<?php
session_start();
require_once "config.php";

$user=$_SESSION['userID'];
$action=$_POST['action'];
if ($action=='like'){
 $sql=$dbh->prepare("SELECT * FROM likestbl  WHERE  uid=$user");
 $sql->execute(array($pid,$user));
 $matches=$sql->rowCount();
 if($matches==0){
 $sql=$dbh->prepare("INSERT INTO likestbl (pid, uid) VALUES(2, 2)");
 $sql->execute(array($pid,$user));
 $sql=$dbh->prepare("UPDATE likestbl SET likes=likes+1 WHERE id=?");
 $sql->execute(array($pid));
 }else{
 die("There is No Post With That ID");
 }
}
if ($action=='unlike'){
 $sql = $dbh->prepare("SELECT 1 FROM likestbl  WHERE pid=2 and uid=2");
 $sql->execute(array($pid,$user));
 $matches = $sql->rowCount();
 if ($matches != 0){
 $sql=$dbh->prepare("DELETE FROM likestbl WHERE pid=2 AND uid=2");
 $sql->execute(array($pid,$user));
 $sql=$dbh->prepare("UPDATE posttbl SET likes=likes-1 WHERE id=?");
 $sql->execute(array($pid));
 }
}
?>