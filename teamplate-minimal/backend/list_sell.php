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

mysql_select_db($database_condb);
$query_lbk = "SELECT * FROM tbl_sell ";
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
  </head>  <?php include('navbar.php');?>
  <body>

    <?php //include('menu.php');?>
    <div class="container">







          <?php include('m.php');?>
        <div class="row">
        <div class="col-md-12">
          <h3 align="center"> รายการตรวจรับหนังสือ  <a href="add_sell.php" class="btn btn-primary"> + เพิ่ม </a> </h3>
          <div class="table-responsive">
            <table id="example" class="display" cellspacing="0" border="1">
              <thead>
                <tr align="center">
                  <th width=3%>ลำดับ</th>
                  <th width=5%>เลขที่ใบตรวจรับ</th>
                  <th width=5%>จำนวน</th>
                  <th width=5%>ราคา</th>
                  <th width=10%>วันที่สั่งซื้อ</th>
                  <th width=10%>วันที่รับสินค้า</th>
                  <th width=5%>ใบเสร็จ</th>
                  <th width=5%>สถานะ</th>
                  <th width=5%>ดูสินค้า</th>
                  <th width=5%>แก้ไข</th>
                  <th width=5%>ลบ</th>

                </tr>
              </thead>
              <?php
              $i = 1;
              do { ?>
               <tr align="center">

                <td><?php echo $i; ?></td>
                <td><?php echo $row_lbk['s_number']; ?></td>
                <td><?php echo $row_lbk['sn_number']; ?></td>
                <td><?php echo $row_lbk['s_price']; ?></td>
                <td><?php echo $row_lbk['s_date']; ?></td>
                <td><?php echo $row_lbk['sn_date']; ?></td>

                <td><center><a href="../bimg/<?php echo $row_lbk['s_bill'];?>" target="_blank"><img src="../bimg/<?php echo $row_lbk['s_bill'];?>" height="50px" ></a></center>
                </td>

                <?php if ($row_lbk['s_status'] == '0'): ?>
                  <td>ปกติ</td>
                <?php endif ?>
                <?php if ($row_lbk['s_status'] == '1'): ?>
                  <td><font color="red">ยกเลิก</font></td>
                <?php endif ?>

                <td><center> <a href="list_sell_prd.php?sell_prd=<?php echo $row_lbk['s_id'];?>" class="btn btn-warning btn-xs"> สินค้า </a> </center> </td>

                <td><center> <a href="edit_sell.php?bank_id=<?php echo $row_lbk['s_id'];?>" class="btn btn-warning btn-xs"> แก้ไข </a> </center> </td>
                <td><center> <a href="del_sell.php?bank_id=<?php echo $row_lbk['s_id'];?>" onClick="return confirm('ยืนยันการยกเลิก');" class="btn btn-danger btn-xs"> ยกเลิก </a> </center> </td>
              </tr>
              <?php
              $i += 1;
            }while ($row_lbk = mysql_fetch_assoc($lbk)); ?>
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
