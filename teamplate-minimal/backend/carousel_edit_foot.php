
<meta charset="UTF-8" />
<?php
include('../Connections/condb.php');

$carousel_id = $_POST['carousel_id'];
$about = $_POST['about'];
$location = $_POST['location'];
$contact = $_POST['contact'];



$sql ="UPDATE tbl_carousel SET
			about='$about',
		  	location='$location',
		  	contact='$contact'		  	
			WHERE carousel_id='$carousel_id'
			";

		$result = mysql_query( $sql,$condb) or die("Error in query : $sql" .mysql_error());


		mysql_close();

		if($result){
			echo "<script>";
			echo "window.location ='carousel.php?act=edit-ok'; ";
			echo "</script>";
		} else {

			echo "<script>";
			echo "alert('ERROR!');";
			echo "window.location ='carousel.php'; ";
			echo "</script>";
		}



?>
