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


$s_number = $_POST['s_number'];
$sn_number = $_POST['sn_number'];
$s_price = $_POST['s_price'];
$s_name = $_POST['s_name'];
$s_address = $_POST['s_address'];
$s_phone = $_POST['s_phone'];
$s_email = $_POST['s_email'];
$s_date = $_POST['s_date'];
$sn_date = $_POST['sn_date'];
$add_id = $_POST['add_id'];

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

$sql ="INSERT INTO tbl_sell

		(s_number,  sn_number,s_price,s_name,s_address,s_phone,s_email, s_date,sn_date, s_bill, add_id)

		VALUES

		('$s_number', '$sn_number','$s_price','$s_name','$s_address','$s_phone','$s_email','$s_date','$sn_date', '$newname', '$add_id')";

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
