<?php

$servername = "localhost";
$dBUsername = "root";
$dbPassword = "root";
$dBName = "mydb";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Databese Connection Failed";
} else echo 'success';

?>