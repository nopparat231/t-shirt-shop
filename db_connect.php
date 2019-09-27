<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "t_shirt_shop";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
?>