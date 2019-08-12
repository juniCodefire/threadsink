<?php
$localhost = "localhost";
$username = "root";
$pass = "";
$database = "email_sender";

$conn = @mysqli_connect($localhost, $username, $pass, $database);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());

}

?>