<meta charset="UTF-8" />
<?php
include('../Connections/condb.php');
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting( error_reporting() & ~E_NOTICE );

$t1_id = $_GET['t1_id'];
$t1_status = '1';
mysql_select_db($database_condb);
$sql ="UPDATE tbl_type1 SET t1_status = '$t1_status' WHERE t1_id = '$t1_id'";

		$result = mysql_query($sql, $condb) or die("Error in query : $sql" .mysql_error());


		mysql_close();

		if($result){
			echo "<script>";
			echo "window.location ='list_product_type1.php?t1'; ";
			echo "</script>";
		} else {

			echo "<script>";
			echo "alert('ERROR!');";
			echo "window.location ='list_product_type1.php?t1'; ";
			echo "</script>";
		}



?>
