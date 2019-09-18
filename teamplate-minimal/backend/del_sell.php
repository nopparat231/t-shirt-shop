<meta charset="UTF-8" />
<?php
include('../Connections/condb.php');
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting( error_reporting() & ~E_NOTICE );

$bank_id = $_GET['bank_id'];
$s_status = '1';
mysql_select_db($database_condb);
$sql ="UPDATE tbl_sell SET s_status = '$s_status' WHERE s_id = '$bank_id'";

		$result = mysql_query( $sql,$condb) or die("Error in query : $sql" .mysql_error());


		mysql_close();

		if($result){
			echo "<script>";
			echo "window.location ='list_sell.php'; ";
			echo "</script>";
		} else {

			echo "<script>";
			echo "alert('ERROR!');";
			echo "window.location ='list_sell.php'; ";
			echo "</script>";
		}



?>
