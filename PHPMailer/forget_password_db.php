<?php 
require_once('../Connections/condb.php');
include 'sent.php';

 ?>

<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

if (isset($_POST['mem_email'])) {
  $loginUsername=$_POST['mem_username'];
  $email=$_POST['mem_email'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "index.php";
  $MM_redirectLoginFailed = "index.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_condb);

  $LoginRS__query= "SELECT mem_username,mem_password ,mem_email FROM tbl_member WHERE mem_email='$email' AND active='yes'";

  $LoginRS = mysql_query($LoginRS__query, $condb) or die(mysql_error());

  $objResult = mysql_fetch_array($LoginRS);
  if (!$objResult) {

    echo "<script>";
    echo "alert(' ยังไม่ได้ยืนยัง Email หรือ Email ไม่ถูกต้อง !');";
    echo "window.location ='../index.php?forget';";
    echo "</script>";
  }else {


   $strTo = $email;
   $strSubject = "Your Account information username and password.";
      $strHeader = "Content-type: text/html; charset=UTF-8\n"; // or UTF-8 //
      $strMessage .= "Username และ Password สำหรับเข้าสู่ระบบ\n";
      $strMessage .= "=================================\n";

      $strMessage .= "Username : ".$objResult["mem_username"]."\n";
      $strMessage .= "Password : ".$objResult["mem_password"]."\n";
      $strMessage .= "=================================\n";

      //$flgSend = mail($strTo,$strSubject,$strMessage,$strHeader);

      $mail->setFrom('up2youscreen@up2youscreen.com');
      $mail->addAddress($strTo);
      $mail->Subject = $strSubject;
      $mail->Body = $strMessage;
//send the message, check for errors

      if($mail->send()){
       echo "<script>";
       echo "alert('Password ถูกส่งไปแล้ว กรุณาตรวจสอบ E-mail !');";
       echo "window.location ='../index.php?login'; ";
       echo "</script>";


     }else{

       echo "<script>";
       echo "alert('Error ส่งเมล์ไม่สำเร็จ !');";
       echo "window.location ='../index.php?login'; ";
       echo "</script>";


     }


   }
 }
 mysql_close();
 ?>