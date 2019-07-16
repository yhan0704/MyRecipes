<?php

$dbservername="";
$dbusername="";
$dbpassword="";
$dbName="guest1";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbName);

if (mysqli_connect_errno())
	exit("Error - could not connect to MySQL");

?>