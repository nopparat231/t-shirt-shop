<?php include 'class.php'; ?>
<?php $class_action = new class_action;?>
<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "t_shirt_shop_size";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
?>