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

$p_name = $_POST['p_name'];
$t_id = $_POST['t_id'];
$p_detial = $_POST['p_detial'];
$p_price = $_POST['p_price'];
$promo = "";

$p_size_s = $_POST['p_size_s'];
$p_size_m = $_POST['p_size_m'];
$p_size_l = $_POST['p_size_l'];
$p_size_xl = $_POST['p_size_xl'];
$p_size_xxl = $_POST['p_size_xxl'];


$p_qty = $p_size_s+$p_size_m+$p_size_l+$p_size_xl+$p_size_xxl;

$p_ems = $_POST['p_ems'];
$p_unit = $_POST['p_unit'];
$p_sell = $_POST['p_sell'];
$p_img1 = (isset($_POST['p_img1']) ? $_POST['p_img1'] : '');
$p_img2 = (isset($_POST['p_img2']) ? $_POST['p_img2'] : '');
$p_img3 = (isset($_POST['p_img3']) ? $_POST['p_img3'] : '');
$p_img4 = (isset($_POST['p_img4']) ? $_POST['p_img4'] : '');
$p_img5 = (isset($_POST['p_img5']) ? $_POST['p_img5'] : '');



$upload=$_FILES['p_img1'];
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

}else{}

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
	$newname2='';
}

// img3

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
	$newname3='';
}

// img4

$upload4=$_FILES['p_img4']['name'];
if($upload4 <> '') {

	//โฟลเดอร์ที่เก็บไฟล์
	$path4="../pimg/";
	//ตัวขื่อกับนามสกุลภาพออกจากกัน
	$type4 = strrchr($_FILES['p_img4']['name'],".");
	//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
	$newname4 ='img4'.$numrand.$date1.$type4;

	$path_copy4=$path4.$newname4;
	$path_link4="../pimg/".$newname4;
	//คัดลอกไฟล์ไปยังโฟลเดอร์
	move_uploaded_file($_FILES['p_img4']['tmp_name'],$path_copy4);


}else{
	$newname4='';
}

// img5

$upload5=$_FILES['p_img5']['name'];
if($upload5 <> '') {

	//โฟลเดอร์ที่เก็บไฟล์
	$path5="../pimg/";
	//ตัวขื่อกับนามสกุลภาพออกจากกัน
	$type5 = strrchr($_FILES['p_img5']['name'],".");
	//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
	$newname5 ='img5'.$numrand.$date1.$type5;

	$path_copy5=$path5.$newname5;
	$path_link5="../pimg/".$newname5;
	//คัดลอกไฟล์ไปยังโฟลเดอร์
	move_uploaded_file($_FILES['p_img5']['tmp_name'],$path_copy5);


}else{
	$newname5='';
}

mysql_select_db($database_condb);
$sql ="INSERT INTO tbl_product

(
	p_name,
	t_id,
	p_detial,
	p_price,
	promo,
	p_qty,
	p_size_s,
	p_size_m,
	p_size_l,
	p_size_xl,
	p_size_xxl,
	p_ems,
	p_unit,
	p_sell,
	p_img1,
	p_img2,
	p_img3,
	p_img4,
	p_img5
	)

	VALUES

	(
	'$p_name',
	'$t_id',
	'$p_detial',
	'$p_price',
	'$promo',
	'$p_qty',
	'$p_size_s',
	'$p_size_m',
	'$p_size_l',
	'$p_size_xl',
	'$p_size_xxl',
	'$p_ems',
	'$p_unit',
	'$p_sell',
	'$newname',
	'$newname2',
	'$newname3',
	'$newname4',
	'$newname5'
	
)";

$result = mysql_query($sql,$condb ) or die("Error in query : $sql" .mysql_error());

// echo $sql;
//  exit();

mysql_close();

if($result){
	echo "<script>";
	echo "alert('เพิ่มสินค้าเรียบร้อยแล้ว');";
	echo "window.location ='list_product.php'; ";
	echo "</script>";
} else {

	echo "<script>";
	echo "alert('ERROR!');";
	echo "window.location ='list_product.php'; ";
	echo "</script>";
}



?>