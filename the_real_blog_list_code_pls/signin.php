<?php
session_start();
include 'datab.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$country = $_POST['country'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "INSERT INTO user (firstname, lastname, gender, age, country, uid, pwd) 
VALUES ('$firstname', '$lastname', '$gender', '$age', '$country', '$uid', '$pwd')";
$result = $conn->query($sql);

header("Location: loginform.php");
   