
<?php
session_start();
unset($_SESSION["products"]);
header("Location: index.php");
 //echo "You input : <u>".$_POST["type"]."</u>";
?>