<?php
$server = "localhost";
$username = "root";
$password = "sarasu10";

$con = mysqli_connect($server,$username,$password);

if($con) {
	echo "good";
} else {
	die("not connected");
}

$sql = "CREATE DATABASE demodb";

$result = mysqli_query($con, $sql);

echo "Successfully created database";
?>
