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

$carousel_id = $_POST['carousel_id'];
$p_img1 = (isset($_POST['p_img1']) ? $_POST['p_img1'] : '');
$p_img2 = (isset($_POST['p_img2']) ? $_POST['p_img2'] : '');
$p_img3 = (isset($_POST['p_img3']) ? $_POST['p_img3'] : '');
$p_logo = (isset($_POST['p_logo']) ? $_POST['p_logo'] : '');


$p_img11 = $_POST['p_img11'];
$p_img21 = $_POST['p_img21'];
$p_img31 = $_POST['p_img31'];
$p_logo11 = $_POST['p_logo11'];




$upload=$_FILES['p_img1']['name'];;
if($upload <> '') {

	//โฟลเดอร์ที่เก็บไฟล์
	$path="../pimg/";
	//ตัวขื่อกับนามสกุลภาพออกจากกัน
	$type = strrchr($_FILES['p_img1']['name'],".");
	//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
	$newname ='img1'.$numrand.$date1.$type;

	$path_copy=$path.$newname;
	$path_link="../pimg/".$newname;
	//คัดลอกไฟล์ไปยังโฟลเดอร์
	move_uploaded_file($_FILES['p_img1']['tmp_name'],$path_copy);

}else{

	$newname = $p_img11;

}

	// img2

$upload2=$_FILES['p_img2']['name'];
if($upload2 <> '') {

	//โฟลเดอร์ที่เก็บไฟล์
	$path2="../pimg/";
	//ตัวขื่อกับนามสกุลภาพออกจากกัน
	$type2 = strrchr($_FILES['p_img2']['name'],".");
	//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
	$newname2 ='img2'.$numrand.$date1.$type2;

	$path_copy2=$path2.$newname2;
	$path_link2="../pimg/".$newname2;
	//คัดลอกไฟล์ไปยังโฟลเดอร์
	move_uploaded_file($_FILES['p_img2']['tmp_name'],$path_copy2);


}else{
	$newname2=$p_img21;
}


//img3


$upload3=$_FILES['p_img3']['name'];
if($upload3 <> '') {

	//โฟลเดอร์ที่เก็บไฟล์
	$path3="../pimg/";
	//ตัวขื่อกับนามสกุลภาพออกจากกัน
	$type3 = strrchr($_FILES['p_img3']['name'],".");
	//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
	$newname3 ='img3'.$numrand.$date1.$type3;

	$path_copy3=$path3.$newname3;
	$path_link3="../pimg/".$newname3;
	//คัดลอกไฟล์ไปยังโฟลเดอร์
	move_uploaded_file($_FILES['p_img3']['tmp_name'],$path_copy3);


}else{
	$newname3=$p_img31;
}


$upload4=$_FILES['p_logo']['name'];;
if($upload4 <> '') {

	//โฟลเดอร์ที่เก็บไฟล์
	$path4="../pimg/";
	//ตัวขื่อกับนามสกุลภาพออกจากกัน
	$type4 = strrchr($_FILES['p_logo']['name'],".");
	//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
	$newname4 ='logo'.$numrand.$date1.$type;

	$path_copy4=$path4.$newname4;
	$path_link4="../pimg/".$newname4;
	//คัดลอกไฟล์ไปยังโฟลเดอร์
	move_uploaded_file($_FILES['p_logo']['tmp_name'],$path_copy4);

}else{

	$newname4 = $p_logo11;

}



$sql ="UPDATE tbl_carousel SET
carousel_img_1 = '$newname',
carousel_img_2 = '$newname2',
carousel_img_3 = '$newname3',
logo = '$newname4'
WHERE carousel_id=$carousel_id
";

$result = mysql_query($sql,$condb ) or die("Error in query : $sql" .mysql_error());

// echo $sql;
//  exit();

mysql_close();

if($result){
	echo "<script>";
	echo "alert('เพิ่มเรียบร้อยแล้ว');";
	echo "window.location ='carousel.php?act=edit-ok'; ";
	echo "</script>";
} else {

	echo "<script>";
	echo "alert('ERROR!');";
	echo "window.location ='carousel.php'; ";
	echo "</script>";
}



?>