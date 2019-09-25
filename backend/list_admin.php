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


$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
if ($start_date != '') {
  $start_date = $_POST['start_date'];
  $end_date = $_POST['end_date'];
}elseif ($start_date == '') {
  $start_date = '2012-01-01';
  $end_date = date('Y/m/d');
}else {
  $start_date = '2012-01-01';
  $end_date = date('Y/m/d');
}

mysql_select_db($database_condb);
$query_listadmin = "SELECT * FROM tbl_admin where date(date_save) >= '$start_date' and date(date_save) <= '$end_date' ORDER BY admin_id desc";
$listadmin = mysql_query($query_listadmin, $condb) or die(mysql_error());
$row_listadmin = mysql_fetch_assoc($listadmin);
$totalRows_listadmin = mysql_num_rows($listadmin);
?>
<?php include('access.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include('h.php');?>
  <?php include('datatable.php');?>
  <?php include 'date.php'; ?>
  </head><?php include('navbar.php');?>
  <body>  <?php //include('menu.php');?>
  <div class="container">

  	<div class="row">

      <div class="col-md-3">

      </div>
      <div class="col-md-9">
        <h3 align="center"> รายงานผู้ดูแลระบบ</h3>

        
      <br />
      <div class="table">
        <table id="example6" class="display" cellspacing="0" border="1">
          <thead>
            <tr align="center">
              <th>ลำดับที่</th>
              <th>รหัสผู้ใช้ระบบ</th>
              <th>ชื่อสมาชิก</th>
              <th>ชื่อผู้ใช้</th>
              <th>ที่อยู่</th>
              <th>สถานะ</th>
              <th>วันที่สมัคร</th>
              <?php if ($row_mm['status'] == 'superadmin') { ?>

              <?php }else{ ?>
                <th>แก้ไข </th>
                <th>ลบ</th>
              <?php  } ?>
            </tr>
          </thead>
          <?php

          $i = 1;
          do { ?>
            <tr>
              <td align="center" ><?php echo $i; ?></td>
              <td align="center"><?php
              if ($row_listadmin['status'] == 'staff') {
                $ida = 'ST';
              }elseif ($row_listadmin['status'] == 'admin') {
                $ida = 'AD';
              }elseif ($row_listadmin['status'] == 'superadmin') {
                $ida = 'MA';
              }

              echo $ida; ?><?php echo $row_listadmin['admin_id']; ?></td>
              <td><?php echo "ชื่อ : ",$row_listadmin['admin_name']; ?><br /></td>
                <td><?php echo "User : ",$row_listadmin['admin_user']; ?><br />
              </td>
                <td><?php echo "ที่อยู่ : " ,$row_listadmin['admin_address']; ?><br />
                  <?php echo "เบอร์โทร : " ,$row_listadmin['admin_tel']; ?><br />
                  <?php echo "E-mail : " ,$row_listadmin['admin_email']; ?>
                </td>
                <td align="center"><?php
                if ($row_listadmin['status'] == 'staff') {
                  $stu = 'พนักงาน';
                }elseif ($row_listadmin['status'] == 'admin') {
                  $stu = 'ผู้ดูแลระบบ';
                }elseif ($row_listadmin['status'] == 'superadmin') {
                  $stu = 'ผู้บริหาร';
                }elseif ($row_listadmin['status'] == 'ex') {
                 $stu = "<font color='red'>ยกเลิกบัญชี</font>";
               }

               echo $stu; ?><br />
               <td align="center"><?php echo date("d-m-Y",strtotime($row_listadmin['date_save'])); ?></td>

               <?php if ($row_mm['status'] == 'superadmin') { ?>

               <?php }else{ ?>
                <td><center> <a href="edit_admin.php?admin_id=<?php echo $row_listadmin['admin_id'];?>" class="btn btn-warning btn-xs"> แก้ไข </a> </center> </td>
                <td><center> <a href="del_admin.php?admin_id=<?php echo $row_listadmin['admin_id'];?>" onClick="return confirm('ยืนยันการลบ');" class="btn btn-danger btn-xs"> ลบ </a> </center> </td>
              <?php  } ?>


            </tr>
            <?php
            $i += 1;
          } while ($row_listadmin = mysql_fetch_assoc($listadmin)); ?>
        </table>
      </div>
    </div>
  </div>
</div>
</body>
</html>
<?php
mysql_free_result($listadmin);
?>
<?php  include('f.php');?>
