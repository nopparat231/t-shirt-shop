<meta charset="UTF-8" />
<?php
include('../Connections/condb.php');
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting( error_reporting() & ~E_NOTICE );

 //Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
    date_default_timezone_set('Asia/Bangkok');
	//สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
	$date1 = date("Ymd_His");
	//สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
	$numrand = (mt_rand());

$bank_id = $_GET['bank_id'];
$s_number = $_POST['s_number'];
$sn_number = $_POST['sn_number'];
$s_price = $_POST['s_price'];
$s_date = $_POST['s_date'];
$sn_date = $_POST['sn_date'];

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
$sql ="UPDATE tbl_sell SET
			s_number='$s_number',
		  	sn_number='$sn_number',
		  	s_price='$s_price',
		  	s_date='$s_date',
		  	sn_date='$sn_date',
		  	s_bill='$newname'
			WHERE s_id=$bank_id
			";

		$result = mysql_query( $sql ,$condb) or die("Error in query : $sql" .mysql_error());


		mysql_close();

		if($result){
			echo "<script>";
			echo "window.location ='edit_sell.php?bank_id=$bank_id&act=edit-ok'; ";
			echo "</script>";
		} else {

			echo "<script>";
			echo "alert('ERROR!');";
			echo "window.location ='list_sell'; ";
			echo "</script>";
		}



?>
