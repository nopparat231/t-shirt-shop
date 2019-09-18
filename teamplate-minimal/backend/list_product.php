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
$query_prd = "
SELECT * FROM tbl_product as p, tbl_type as t
WHERE p.t_id = t.t_id
ORDER BY p.p_id desc";
$prd = mysql_query($query_prd, $condb) or die(mysql_error());
$row_prd = mysql_fetch_assoc($prd);
$totalRows_prd = mysql_num_rows($prd);
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

</head>
<body>
  <?php include('navbar.php');?>
  <div class="container">






        <?php include('m.php');?>
      <div class="row">
      <div class="col-md-12">
        <h3 align="center"> รายการหนังสือ <a href="add_product.php" class="btn btn-primary"> + เพิ่ม </a> </h3>
        <div class="table">
         <table width="100%" border="1" cellspacing="0" class="display" id="example">
          <thead>
            <tr>
              <th width="5%">ลำดับ</th>
              <th width="10%">ประเภท</th>
              <th width="40%">รายละเอียด</th>
              <th width="7%">ราคา</th>
              <th width="7%">จำนวน</th>

              <th width="10%">ภาพสินค้า</th>
              <th>สถานะ</th>
              <th>แก้ไข</th>
              <th>ลบ</th>
            </tr>
          </thead>
          <?php if($totalRows_prd>0){?>
            <?php

            $i = 1;
            do { ?>
              <tr>
                <td align="center" valign="top"><?php echo $i; ?></td>
                <td valign="top"><?php echo $row_prd['t_name']; ?></td>
                <td valign="top"><b> <?php echo $row_prd['p_name']; ?>

                <a href="product_detail.php?p_id=<?php echo $row_prd['p_id'];?>&t_id=<?php echo $row_prd['t_id'];?>&act=edit" class="btn btn-info btn-xs"> รายละเอียด </a>
              </b>
              <br>
              <?php // echo $row_prd['p_detial']; ?>
            </td>
            <td align="center" valign="top"><?php echo $row_prd['p_price']; ?></td>
            <td align="center" valign="top">
             <?php echo $row_prd['p_qty']; ?>

             <?php echo $row_prd['p_unit'];?>
           </td>

           <td><img src="../pimg/<?php echo $row_prd['p_img1'];?>" width="100px"></td>

           <?php if ($row_prd['p_status'] == '0' && $row_prd['p_qty'] != '0'): ?>
            <td><center>พร้อมจำหน่าย</center></td>

            <?php elseif ($row_prd['p_status'] == '1' && $row_prd['p_qty'] == '0'): ?>
              <td><center><font color="brown">หนังสือเลิกผลิต</font></center></td>

              <?php elseif ($row_prd['p_status'] == '1' ): ?>
                <td><center><font color="brown">หนังสือเลิกผลิต</font></center></td>


                <?php elseif ($row_prd['p_qty'] == '0'): ?>
                  <td><center><font color="red">สินค้าหมด</font></center></td>
                <?php endif ?>


                <td><center>

                  <a href="edit_product.php?p_id=<?php echo $row_prd['p_id'];?>&t_id=<?php echo $row_prd['t_id'];?>&t1_id=<?php echo $row_prd['t1_id'];?>&act=edit" class="btn btn-warning btn-xs">
                  แก้ไข  </a>
                </center></td>
                <td><center> <a href="del_product.php?p_id=<?php echo $row_prd['p_id'];?>" class="btn btn-danger btn-xs" onClick="return confirm('ยืนยันการยกเลิกหนังสือเลิกผลิต');"> ยกเลิก </a> </center></td>
              </tr>
              <?php
              $i += 1;
            } while ($row_prd = mysql_fetch_assoc($prd)); ?>
          <?php } ?>
        </table>
      </div>
    </div>
  </div>
</div>
</body>
</html>
<?php
mysql_free_result($prd);
?>
<?php //include('f.php');?>
