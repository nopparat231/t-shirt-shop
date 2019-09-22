<meta charset="UTF-8" />
<?php
include('../Connections/condb.php');
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting( error_reporting() & ~E_NOTICE );

$admin_user = $_POST['admin_user'];
$admin_pass = $_POST['admin_pass'];
$admin_name = $_POST['admin_name'];
$admin_tel = $_POST['admin_tel'];
$admin_address = $_POST['admin_address'];
$admin_email = $_POST['admin_email'];
$status = $_POST['status'];

mysql_select_db($database_condb);
$check ="SELECT * FROM tbl_admin  WHERE admin_user='$admin_user'";
$result1=mysql_query( $check,$condb);
$num=mysql_num_rows($result1);


$checkemail = "SELECT * FROM tbl_admin WHERE admin_email = '$admin_email' ";
$resultemail = mysql_query($checkemail,$condb);
$numemail = mysql_num_rows($resultemail);


if ($num > 0 ){
	echo"<script>";
	echo"alert('ชื่อผู้ใช้ นี้มีผู้ใช้แล้ว กรุณาลองใหม่อีกครั้ง');";
	echo"window.location = 'adduser_admin.php';";
	echo"</script>";


}elseif ($numemail > 0 ){
	echo"<script>";
	echo"alert('Email นี้มีผู้ใช้แล้ว กรุณาลองใหม่อีกครั้ง');";
	echo"window.location = 'adduser_admin.php';";
	echo"</script>";

} else {


$sql ="INSERT INTO tbl_admin

		(admin_user,  admin_pass, admin_name ,status ,admin_tel ,admin_address ,admin_email)

		VALUES

		('$admin_user', '$admin_pass', '$admin_name' ,'$status' ,'$admin_tel' ,'$admin_address' ,'$admin_email')";

		$result = mysql_query($sql, $condb) or die("Error in query : $sql" .mysql_error());
}

		mysql_close();

		if($result){
			echo "<script>";
			echo "alert('เพิ่ม ผู้ดูแลระบบ เรียบร้อยแล้ว');";
			echo "window.location ='list_admin.php'; ";
			echo "</script>";
		} else {

			echo "<script>";
			echo "alert('ERROR!');";
			echo "window.location ='list_admin'; ";
			echo "</script>";
		}



?>
