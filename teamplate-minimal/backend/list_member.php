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
  $start_date = date('2012-01-01');
  $end_date = date('Y/m/d');
}else {
  $start_date = date('2012-01-01');
  $end_date = date('Y/m/d');
}

mysql_select_db($database_condb);
$query_mem = "SELECT * FROM tbl_member where date(dateinsert) >= '$start_date' and date(dateinsert) <= '$end_date' ORDER BY mem_id ASC";
$mem = mysql_query($query_mem, $condb) or die(mysql_error());
$row_mem = mysql_fetch_assoc($mem);
$totalRows_mem = mysql_num_rows($mem);
?>
<?php include('access.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include('h.php');?>
  <?php include('./datatable2.php');?>
  <?php include 'date.php'; ?>
  </head>    <?php include('navbar.php');?>
  <body>  <?php //include('menu.php');?>
  <div class="container">
    <div class="row">

    </div>

        <?php include('m.php');?>
        <div class="row">

          <div class="col-md-12">
        <h3 align="center"> รายการ ข้อมูลลูกค้า </h3>
        <form action="list_member.php" method="post">
         <div class="row">

           <div class="col-md-1">
            <label><font size="2">จากวัน</font></label>
          </div>
          <div class="col-md-4">
            <input  id="from" name="start_date"type="date"  autocomplete="off"  />
          </div>
          <div class="col-md-1">
            <label><font size="2">ถึงวันที่</font></label>
          </div>
          <div class="col-md-4">
           <input   id="to" name="end_date" type="date"  autocomplete="off"  />
         </div>

         <div class="col-md-2">
          <input type="submit" name="search" id="search" value="ค้นหา" class="btn btn-info" />
        </div>
      </div>
    </form><br>
    <table id="example" class="display" cellspacing="0" border="1">
      <thead>
        <tr align="center">
          <th>ลำดับ</th>
          <th width=5%>รหัส</th>
          <th width=35%>ข้อมูล</th>
          <th width=35%>ที่อยู่</th>
          <th width=5%>สถานะ</th>
          <th width=28%>วันที่สมัคร</th>
          <?php if ($row_mm['status'] == 'superadmin') { ?>

          <?php }else{ ?>
            <th width=5%>แก้ไข </th>
            <th width=5%>ยกเลิก</th>
          <?php  } ?>
        </tr>
      </thead>
      <?php
      $i = 1;
      do { ?>
        <tr>
         <td align="center" ><?php echo $i; ?></td>
         <td align="center">US<?php echo $row_mem['mem_id']; ?></td>
         <td><?php echo "ชื่อ : ",$row_mem['mem_name']; ?><br />
          <?php echo "User : ",$row_mem['mem_username']; ?><br />
          <?php echo "Pass : ",'**********' ?></td>
          <td><?php echo "ที่อยู่ : " ,$row_mem['mem_address']; ?><br />
            <?php echo "เบอร์โทร : " ,$row_mem['mem_tel']; ?><br />
            <?php echo "E-mail : " ,$row_mem['mem_email']; ?>
          </td>
          <td align="center">

            <?php


            if ($row_mem['status'] == 'user'){
              $ida = 'สมาชิก';
            }elseif ($row_mem['status'] == 'ex') {
             $ida = "<font color='red'>ยกเลิกบัญชี</font>";

           } ?>
           <?php echo $ida; ?></td>
           <td align="center"><?php echo date("d-m-Y",strtotime($row_mem['dateinsert'])); ?></td>


           <?php if ($row_mm['status'] == 'superadmin') { ?>

           <?php }else{ ?>
             <td><center> <a href="edit_mem.php?mem_id=<?php echo $row_mem['mem_id'];?>" class="btn btn-warning btn-xs"> แก้ไข </a> </center> </td>
             <td><center> <a href="del_mem.php?mem_id=<?php echo $row_mem['mem_id'];?>" onClick="return confirm('ยืนยันการยกเลิกบัญชี');" class="btn btn-danger btn-xs"> ยกเลิก </a> </center> </td>
           <?php  } ?>


         </tr>
         <?php
         $i += 1;
       } while ($row_mem = mysql_fetch_assoc($mem)); ?>
     </table>
   </div>
 </div>
</div>
</body>
</html>
<?php
mysql_free_result($mem);
?>
<?php //include('f.php');?>
