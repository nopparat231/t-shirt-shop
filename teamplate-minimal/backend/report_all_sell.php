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
$query_lbk = "SELECT * FROM tbl_sell where s_date >= '$start_date' and s_date <= '$end_date'";
$lbk = mysql_query($query_lbk, $condb) or die(mysql_error());
$row_lbk = mysql_fetch_assoc($lbk);
$totalRows_lbk = mysql_num_rows($lbk);
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
  </head>  <?php include('navbar.php');?>
  <body>

    <?php //include('menu.php');?>
    <div class="container">





          <?php include('m.php');?>
          <div class="row">

            <div class="col-md-12">
          <h3 align="center"> รายงานการตรวจรับหนังสือ  </h3>

          <form action="report_all_sell.php" method="post">
            <?php include 'thaidate.php'; ?>
            <div class="row">

             <div class="col-md-1">
              <label><font size="2">จากวัน</font></label>
            </div>
            <div class="col-md-4">
              <input id="from" name="start_date" type="text"  autocomplete="off"  />
            </div>
            <div class="col-md-1">
              <label><font size="2">ถึงวันที่</font></label>
            </div>
            <div class="col-md-4">
              <input  id="to" name="end_date" type="text"  autocomplete="off"  />
            </div>

            <div class="col-md-2">
              <input type="submit" name="search" id="search" value="ค้นหา" class="btn btn-info" />
            </div>
          </div>
        </form>
        <br />

        <div class="table">
          <table id="example" class="display" cellspacing="0" border="1">
            <thead>
              <tr align="center">
                <th>ลำดับ</th>
                <th width = "12%">เลขที่ใบตรวจรับ</th>
                <th>จำนวน</th>
                <th>ราคา</th>
                <th>วันที่สั่งซื้อสินค้า</th>
                <th>วันที่รับสินค้า</th>
                <th width = "12%">ใบเสร็จ</th>
                <th>สินค้า</th>
                <th width = "15%">ผู้ตรวจรับ</th>


              </tr>
            </thead>
            <?php if($totalRows_lbk > 0){?>
              <?php
              $i = 1;
              do { ?>
               <tr align="center">

                <td><?php echo $i; ?></td>
                <td><?php echo $row_lbk['s_number']; ?></td>
                <td><?php echo $row_lbk['sn_number']; ?></td>
                <td><?php echo number_format($row_lbk['s_price'],2); ?></td>
                <td><?php echo date("d-m-Y",strtotime($row_lbk['s_date'])); ?></td>
                <td><?php echo date("d-m-Y",strtotime($row_lbk['sn_date'])); ?></td>

                <td><center><a href="../bimg/<?php echo $row_lbk['s_bill'];?>" target="_blank"><img src="../bimg/<?php echo $row_lbk['s_bill'];?>" height="50px" ></a></center>
                </td>
                <td><center><a href="report_all_sell_prd.php?sell_prd=<?php echo $row_lbk['s_id'];?>" class="btn btn-warning btn-xs">ดูสินค้า</a></center>
                </td>

                <td><center><?php

                $query_add = "SELECT * FROM tbl_admin WHERE admin_id =".$row_lbk['add_id'];
                $add = mysql_query($query_add, $condb) or die(mysql_error());
                $row_add = mysql_fetch_assoc($add);
                $totalRows_add = mysql_num_rows($add);
                echo $row_add['admin_name'];  ?></center></td>

              </tr>
              <?php
              $i += 1;
            }while ($row_lbk = mysql_fetch_assoc($lbk)); ?>
          <?php }?>

        </table>
      </div>
    </div>
  </div>
</div>
</body>
</html>
<?php
mysql_free_result($lbk);
?>
<?php  //include('f.php');?>
