<meta charset="UTF-8" />
<?php
include('../Connections/condb.php');
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting( error_reporting() & ~E_NOTICE );


$add_new = $_POST['add_new'];
$new_title = $_POST['new_title'];
$new_img = $_POST['new_img'];




$sql ="INSERT INTO tbl_new (new_v , new_title , new_img) VALUES ('$add_new' , '$new_title' , '$new_img')";

		$result = mysql_query($sql, $condb) or die("Error in query : $sql" .mysql_error());


		mysql_close();

		if($result){
			echo "<script>";
			echo "alert('เพิ่ม ข่าวเรียบร้อยแล้ว');";
			echo "window.location ='list_news.php'; ";
			echo "</script>";
		} else {

			echo "<script>";
			echo "alert('ERROR!');";
			echo "window.location ='list_news.php'; ";
			echo "</script>";
		}



?>
