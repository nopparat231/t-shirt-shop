
<meta charset="UTF-8" />
<?php
include('Connections/condb.php');

$mem_id = $_POST['mem_id'];
$mem_username = $_POST['mem_username'];
$mem_password = $_POST['mem_password'];
$mem_fname = $_POST['mem_fname'];
$mem_lname = $_POST['mem_lname'];
$mem_email = $_POST['mem_email'];
$mem_tel = $_POST['mem_tel'];
$mem_address = $_POST['mem_address'];


$sql ="UPDATE tbl_member SET 

mem_password='$mem_password',
mem_fname='$mem_fname',
mem_lname='$mem_lname',
mem_email='$mem_email',
mem_tel='$mem_tel',
mem_address='$mem_address'
WHERE mem_id='$mem_id'
";
mysql_select_db($database_condb);
$result = mysql_query($sql,$condb) or die("Error in query : $sql" .mysql_error());


mysql_close();

if($result){
	echo "<script>";
	echo "alert('แก้ไขข้อมูลสำเร็จ!');";
	echo "window.location ='index.php?my_profile'; ";
	echo "</script>";
} else {
	
	echo "<script>";
	echo "alert('แก้ไขไม่สำเร็จ!');";
	echo "window.location ='index.php?my_profile'; ";
	echo "</script>";
}



?>