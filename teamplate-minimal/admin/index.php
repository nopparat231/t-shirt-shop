<?php require_once('../Connections/condb.php'); ?>

<?php
if (!function_exists("GetSQLValueString")) {
  function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "")
  {
    if (PHP_VERSION < 6) {
      $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
    }

    $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

    switch ($theType) {
      case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
      case "long":
      case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
      case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
      case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
      case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
    }
    return $theValue;
  }
}
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['admin_user'])) {
  $loginUsername=$_POST['admin_user'];
  $password=$_POST['admin_pass'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "../backend/index.php";
  $MM_redirectLoginFailed = "login_alert.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_condb);

  $LoginRS__query=sprintf("SELECT admin_user, admin_pass FROM tbl_admin WHERE admin_user=%s AND admin_pass=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text"));

  $LoginRS = mysql_query($LoginRS__query, $condb) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
   $loginStrGroup = "";

   if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
   $_SESSION['MM_admin'] = $loginUsername;
   $_SESSION['MM_UserGroup'] = $loginStrGroup;

   if (isset($_SESSION['PrevUrl']) && false) {
    $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];
  }
  echo "<script>";
  echo "window.location ='../backend/index.php'; ";
  echo "</script>";
}
else {
  echo "<script>";
  echo "alert('Username หรือ Password ผิด กรุณาLoginอีกครั้ง !');";
  echo "window.location ='index.php'; ";
  echo "</script>";
}
}
?>

<?php include('navbar.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BOOKSHOP | Back office | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <?php include 'css.php'; ?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>


<div class="container">



 <div class="row">
<br><br><br>

   <?php include('m.php');?>


 </div>
</div>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href=""><b>เข้าสู่ระบบ </b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">เข้าสู่ระบบ เพื่อทำรายการต่าง ๆ </p>

      <form action="<?php echo $loginFormAction; ?>"  method="post">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="admin_user" placeholder="ชื่อผู้ใช้">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" name="admin_pass" placeholder="รหัสผ่าน">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-8">
            <div class="checkbox icheck">
              <label>
                &nbsp;&nbsp;<a href="../" class="glyphicon"><font color = "#3366FF"><u> BOOKSHOP</u></font></a>
              </label>
            </div>
          </div>

          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">เข้าสู่ระบบ</button>
          </div>
          <!-- /.col -->
        </div>
      </form>



    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->


  <!-- jQuery 3 -->
  <?php include 'js.php'; ?>
  <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' /* optional */
      });
    });
  </script>
</body>
</html>
