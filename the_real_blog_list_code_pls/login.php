<?php
session_start();
include 'include/datab.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM user WHERE uid= '$uid' AND pwd='$pwd'";
$result = $conn->query($sql);

if (!$row = $result->fetch_assoc()) {
	echo "Your username and password is incorrect";
} else{
   $_SESSION['uid'] = $row['uid'];
}

header("Location: loginform.php");

