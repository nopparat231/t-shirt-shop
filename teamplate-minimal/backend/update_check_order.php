<meta charset="UTF-8" />
<?php
include('../Connections/condb.php');
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting( error_reporting() & ~E_NOTICE );

$order_id = $_GET['order_id'];
$status = $_GET['status'];
$check_id = $_GET['check_id'];

$sql ="UPDATE tbl_order SET order_status='$status', check_id='$check_id' WHERE order_id='$order_id'";


$result = mysql_query($sql, $condb) or die("Error in query : $sql" .mysql_error());


mysql_close();


if($result){
	echo "<script>";
	echo "window.location ='index.php'; ";
	echo "</script>";
} else {

	echo "<script>";
	echo "alert('ERROR!');";
	echo "window.location ='index.php'; ";
	echo "</script>";
}



?>
