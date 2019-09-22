<meta charset="UTF-8" />
<?php
include('../Connections/condb.php');
error_reporting( error_reporting() & ~E_NOTICE );

 //Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
date_default_timezone_set('Asia/Bangkok');
	//สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
$date1 = date("Ymd_His");
	//สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
$numrand = (mt_rand());


$s_pid = $_POST['s_pid'];
$s_old = $_POST['s_old'];
$s_add = $_POST['s_add'];
$s_all = $s_old+$s_add;
//echo $s_all;
//$s_bill = $_POST['s_bill'];
//เพิ่มไฟล์
$s_bill = (isset($_POST['s_bill']) ? $_POST['s_bill'] : '');

$upload=$_FILES['s_bill'];
if($upload <> '') {

	//โฟลเดอร์ที่เก็บไฟล์
	$path="../bimg/";
	//ตัวขื่อกับนามสกุลภาพออกจากกัน
	$type = strrchr($_FILES['s_bill']['name'],".");
	//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
	$newname ='imgbill'.$numrand.$date1.$type;

	$path_copy=$path.$newname;
	$path_link="../bimg/".$newname;
	//คัดลอกไฟล์ไปยังโฟลเดอร์
	move_uploaded_file($_FILES['s_bill']['tmp_name'],$path_copy);

}else{}
mysql_select_db($database_condb);



$sql ="UPDATE tbl_product SET p_qty='$s_all' WHERE p_id= '$s_pid'";

$resultprd = mysql_query( $sql ,$condb) or die("Error in query : $sql" .mysql_error());


$sql ="INSERT INTO tbl_sell

(s_pid , s_old , s_add , s_bill)

VALUES

('$s_pid' , '$s_old' , '$s_add' , '$newname')";

$result = mysql_query($sql, $condb) or die("Error in query : $sql" .mysql_error());

mysql_close();

if($result){
	echo "<script>";
	echo "alert('เพิ่มข้อมูลเรียบร้อยแล้ว');";
	echo "window.location ='list_sell.php'; ";
	echo "</script>";
} else {

	echo "<script>";
	echo "alert('ERROR!');";
	echo "window.location ='list_sell.php'; ";
	echo "</script>";
}



?>
