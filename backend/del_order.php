<meta charset="UTF-8" />
<?php
include('../Connections/condb.php');
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting( error_reporting() & ~E_NOTICE );

$order_id = $_GET['order_id'];
$order_status = $_GET['order_status'];

mysql_select_db($database_condb);
$sql ="UPDATE tbl_order SET order_status='$order_status' WHERE order_id='$order_id'";


$result = mysql_query($sql, $condb) or die("Error in query : $sql" .mysql_error());


mysql_close();

if($result){
	echo "<script>";
	echo "window.location ='index.php?act=show-cancel'; ";
	echo "</script>";
} else {

	echo "<script>";
	echo "alert('ERROR!');";
	echo "window.location ='index.php?act=show-cancel'; ";
	echo "</script>";
}



?>
