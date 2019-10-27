 <?php
/**
 * This example shows making an SMTP connection with authentication.
 */
// **********
// เข้าไปตั้งค่าในนี้ก่อน ให้อนุญาติแอปที่มีความปลอดภัยน้อย
// https://myaccount.google.com/u/1/security
// https://myaccount.google.com/u/1/lesssecureapps?utm_source=google-account&utm_medium=web
// **********
//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Asia/Bangkok');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->Username = 'ituptoyou2@gmail.com';
$mail->Password = 'zai596200
';