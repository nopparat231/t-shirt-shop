<?php
if (!isset($_SESSION)) {
	session_start();

}
?>
<?php include '../class.php'; ?>
<?php $class_action = new class_action;?>
<meta charset="UTF-8" />
<?php

include('../Connections/condb.php');
include 'sent.php';

//สมัครสมาชิก
if (isset($_POST['register'])) {


	$mem_username = $_POST['mem_username'];
	$mem_password = $_POST['mem_password'];
	$mem_fname = $_POST['mem_fname'];
	$mem_lname = $_POST['mem_lname'];
	$mem_email = $_POST['mem_email'];
	$mem_tel = $_POST['mem_tel'];
	$mem_address = $_POST['mem_address'];
	$user = "user";
	$session_id = session_id();
	$no = "no";

	mysql_select_db($database_condb);
	$check = "SELECT * FROM tbl_member WHERE '$mem_username' = mem_username ";
	$result = mysql_query($check,$condb);
	$num = mysql_num_rows($result);

	$checkemail = "SELECT * FROM tbl_member WHERE mem_email = '$mem_email'";
	$resultemail = mysql_query($checkemail,$condb);
	$numemail = mysql_num_rows($resultemail);

	if ($numemail > 0 ){
		echo"<script>";
		echo"alert('E-mail นี้มีผู้ใช้แล้ว กรุณาลองใหม่อีกครั้ง');";
		echo"window.location = '../index.php';";
		echo"</script>";

	}elseif ($num > 0 ){
		echo"<script>";
		echo"alert('Username นี้มีผู้ใช้แล้ว กรุณาลองใหม่อีกครั้ง');";
		echo"window.location = '../index.php';";
		echo"</script>";

	}else{

		$sql ="INSERT INTO tbl_member (mem_username , mem_password , mem_fname , mem_lname , mem_email ,  mem_tel , mem_address , status ,sid , active ) VALUES ('$mem_username' , '$mem_password' ,'$mem_fname' ,'$mem_lname','$mem_email','$mem_tel','$mem_address' ,'$user' ,'$session_id','$no' )";

		$result1 = mysql_query($sql,$condb) or die ("Error in query : $sql" .mysql_error());


		$mem_id = mysql_insert_id($condb);

		$strTo = $mem_email;
		$strSubject = "Activate Your Accout up2youscreen";
		$strHeader = "Content-type: text/html; charset=UTF-8\n"; // or UTF-8 //

		$strMessage = "\n";
		$strMessage .= "ยินดีต้อนรับ : คุณ ".$mem_fname."\n";
		$strMessage .= "________________________________________\n";
		$strMessage .= "ยืนยันการสมัครสมาชิกโดยการคลิกที่ลิ้งค์ด้านล่าง\n";
		$strMessage .= "http://localhost/t-shirt-shop/activate.php?sid=".$session_id."&mem_id=".$mem_id."\n";
		$strMessage .= "________________________________________\n";
		$strMessage .= "\n";

		//$flgSend = mail($strTo,$strSubject,$strMessage,$strHeader);

		$mail->setFrom('up2youscreen@up2youscreen.com');
		$mail->addAddress($strTo);
		$mail->Subject = $strSubject;
		$mail->Body = $strMessage;
//send the message, check for errors
	
	if($mail->send()){
		echo"<script>";
		echo"alert('สมัครสมาชิกเรียบร้อยแล้ว กรุณายืนยันที่ E-mail !');";
		echo"window.location = '../index.php';";
		echo"</script>";
	}else{
		echo"<script>";
		echo"alert('สมัครสมาชิกไม่สำเร็จ!');";
		echo"window.location = '../index.php';";
		echo"</script>";
	}
}
mysql_close();
}


?>
