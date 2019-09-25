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
date_default_timezone_set('Asia/Bangkok');
mysql_select_db($database_condb);
$query_prd = "
SELECT * FROM tbl_product as p, tbl_type as t
WHERE p.t_id = t.t_id ORDER BY p.p_id ASC";
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

      <?php
      mysql_select_db($database_condb);
      $query_view = "SELECT p_qty , p_name FROM tbl_product";
      $view = mysql_query($query_view, $condb) or die(mysql_error());
      $row_view = mysql_fetch_assoc($view);
      $totalRows_view = mysql_num_rows($view);


      ?>

      <style type="text/css">

      th { white-space: nowrap; }
    </style>

    <h3 align="center"> รายงานข้อมูลสินค้า</h3>

<table width="100%" border="1" cellspacing="0" class="display" id="example3">
  <?php $r = '<h3 align="center">รายการสินค้า</h3>' ?>
  <thead>
    <tr>

      <th>ลำดับที่</th>
      <th>ประเภท</th>
      <th>ชื่อสินค้า</th>
<!--       <th>ชื่อตัวแทนจำหน่าย</th> -->
      <th>จำนวน</th>
      <th>ไซส์</th>
      <th>ค่าจัดส่ง</th>
      <th>การเข้าชม</th>
      <th>ราคา</th>

    </tr>
  </thead>
  <tbody>
    <?php if($totalRows_prd>0){?>

      <?php
      $i = 1;

      do { ?>
        <tr>
          <td align="center" valign="top"><?php echo $i; ?></td>
          <td valign="top"><?php echo $row_prd['t_name']; ?></td>
          <td valign="top"><b> <?php echo $row_prd['p_name']; ?></b>
          </td>
       
          <td align="center" valign="top">
           <?php echo $row_prd['p_qty']; ?>

           <?php echo $row_prd['p_unit'];?>
         </td>
         <td align="center" valign="top">
          <?php echo $row_prd['p_size'];?>
        </td>
        <td align="center" valign="top">
          <?php echo $row_prd['p_ems'];?>
        </td>
        <td align="center" valign="top">
          <?php echo $row_prd['p_view'];?>
        </td>

        <td align="right" valign="top"><?php echo number_format($row_prd['p_price'],2); ?></td>
      </tr>
      <?php
      $i += 1;
    } while ($row_prd = mysql_fetch_assoc($prd)); ?>
  <?php } ?>
</tbody>

</table>
</div>
</div>
</div>
</body>
</html>
<?php
mysql_free_result($prd);
mysql_free_result($view);

?>
<?php include('f.php');?>
