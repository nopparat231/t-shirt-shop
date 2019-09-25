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
$query_prd = "
SELECT o.order_id,o.mem_fname,d.p_name,d.p_c_qty,o.order_status,o.order_date,d.total 
FROM tbl_order as o ,tbl_order_detail as d 
WHERE o.order_id = d.order_id and o.order_date >= '$start_date' and o.order_date <= '$end_date'";
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
  <?php include('datatable.php');?>

  </head>  <?php include('navbar.php');?>
  <body>  <?php //include('menu.php');?>
  <div class="container">

   <div class="row">


    <div class="col-md-3">

    </div>
    <div class="col-md-9">


      <style type="text/css">

      th { white-space: nowrap; }
    </style>

    <h3 align="center"> รายการสินค้า  </h3>

  <br />
  <table width="100%" border="1" cellspacing="0" class="display" id="example3">

    <thead>
      <tr>

        <th >ลำดับที่</th>
        <th>รหัสสั่งซื้อ</th>
        <th >ชื่อผู้ใช้</th>

        <th >สินค้า</th>
        <th >จำนวน</th>
        <th >สถานะ</th>
        <th >วันที่</th>
        <th >ราคา</th>

      </tr>
    </thead>
    <tbody>
      <?php if($totalRows_prd>0){?>

        <?php 
        $i = 1;

        do { ?>
          <tr>
            <td align="center" valign="top"><?php echo $i; ?></td>
            <td valign="top"><?php echo $row_prd['o.order_id']; ?></td>
            <td valign="top"> <?php echo $row_prd['o.mem_fname']; ?></td>
            <td valign="top"> <?php echo $row_prd['d.p_name']; ?></td>
            <td valign="top"> <?php echo $row_prd['d.p_c_qty']; ?></td>
            <td valign="top"> <?php echo $row_prd['o.order_status']; ?></td>
            <td valign="top"> <?php echo $row_prd['o.order_date']; ?></td>

            <td align="right" valign="top"><?php echo number_format($row_prd['d.total'],2); ?></td>
          </tr>
          <?php
          $i += 1;
        } while ($row_prd = mysql_fetch_assoc($prd)); ?>
      <?php } ?>
    </tbody>
    <tfoot>
      <tr>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th style="text-align:right">Total:</th>
        <th></th>
      </tr>
    </tfoot>
  </table>
</div>
</div>
</div>
</body>
</html>
<?php
mysql_free_result($prd);


?>
<?php include('f.php');?>
