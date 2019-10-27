<?php
if (!isset($_SESSION)) {
	session_start();

}
?>
<?php include 'class.php'; ?>
<?php $class_action = new class_action;?>
<meta charset="UTF-8" />
<?php

include('Connections/condb.php');



if (isset($_POST['login'])) {

	$loginUsername=$_POST['mem_username'];
	$password=$_POST['mem_password'];
	$MM_fldUserAuthorization = "";
	$MM_redirectLoginSuccess = "index.php";
	$MM_redirectLoginAdmin = "/backkend";
	$MM_redirectLoginFailed = "login_alert.php";
	$MM_redirecttoReferrer = false;

	mysql_select_db($database_condb);

	$LoginRS__cc = "SELECT * FROM tbl_member WHERE mem_username='$loginUsername' AND mem_password='$password' AND active='yes' ";
	$LoginRS_cc = mysql_query($LoginRS__cc, $condb) or die(mysql_error());
	$objResult_cc = mysql_fetch_array($LoginRS_cc);
	$loginFoundcc = mysql_num_rows($LoginRS_cc);

	if ($objResult_cc) {
		//user
		$LoginRS__query = "SELECT * FROM tbl_member WHERE mem_username='$loginUsername' AND mem_password='$password'";
		$LoginRS_user = mysql_query($LoginRS__query, $condb) or die(mysql_error());
		$objResult_user = mysql_fetch_array($LoginRS_user);
		$loginFoundUser = mysql_num_rows($LoginRS_user);
//admin
	// $LoginRS__admin = "SELECT * FROM tbl_admin WHERE admin_user='$loginUsername' AND admin_pass='$password' ";
	// $LoginRS_admin = mysql_query($LoginRS__admin, $condb) or die(mysql_error());
	// $objResult_admin = mysql_fetch_array($LoginRS_admin);



		if ($loginFoundUser > 0) {

			echo $class_action->show_message('เข้าสู่ระบบสำเร็จ');


		//$loginStrGroup = "";

	    //declare two session variables and assign them
			$_SESSION['MM_Username'] = $loginUsername;
		//$_SESSION['MM_UserGroup'] = $loginStrGroup;
			$_SESSION['User_id'] = $objResult_user['mem_id'];
			$_SESSION['User'] = $objResult_user['mem_fname'];


			if (isset($_SESSION['PrevUrl']) && false) {
				$MM_redirectLoginSuccess = $_SESSION['PrevUrl'];
			}

			echo $class_action->goto_page(1,'index.php');

		}else {

			echo $class_action->show_message('Username หรือ Password ไม่ถูกต้อง');
			echo $class_action->goto_page(1,'index.php?login');

		}


	}else{
		echo $class_action->show_message('กรุณายืนยัน User ที่ Email');
		echo $class_action->goto_page(1,'index.php?login');
	}




}

?>
