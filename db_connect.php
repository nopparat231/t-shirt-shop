<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "leather-shop";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
?>