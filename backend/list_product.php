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
SELECT * FROM tbl_product as p, tbl_type as t , tbl_type_sub as ts
WHERE p.t_id = t.t_id AND p.ts_id= ts.ts_id
ORDER BY p.p_id desc";
$prd = mysql_query($query_prd, $condb) or die(mysql_error());
$row_prd = mysql_fetch_assoc($prd);
$totalRows_prd = mysql_num_rows($prd);
?>
<?php include('access.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include('h.php');?>
    <?php include('datatable.php');?>

  </head>    <?php include('navbar.php');?>
  <body> <?php //include('menu.php');?>

  <div class="container">

<style type="text/css">
  td a{
    width: 40px;

  }
</style>

    <div class="row">


<div class="col-md-3">

</div>
    <div class="col-md-9">
        <h3 align="center"> จัดการสินค้า <a href="add_product.php" class="btn btn-primary"> เพิ่มสินค้า </a> </h3>
        <div class="table-responsive">
           <table width="100%" border="1" cellspacing="0" class="display" id="example">
		<thead>
         <tr>
            <th width="5%">รหัสสินค้า</th>
            <th width="10%">ประเภท</th>
            <th width="10%">ประเภทย่อย</th>
            <th width="20%">รายละเอียด</th>
            <th width="5%">ราคา</th>
            <th width="5%">จำนวน</th>
            <th width="5%">ไซส์</th>
            <th width="5%">จัดส่ง</th>
            <th width="10%">ภาพสินค้า</th>
            <th>แก้ไข</th>
            
          </tr>
          </thead>
          <?php if($totalRows_prd>0){?>
          <?php do { ?>
            <tr>
              <td align="center" valign="top">TS00<?php echo $row_prd['p_id']; ?></td>
              <td valign="top"><?php echo $row_prd['t_name']; ?></td>
              <td valign="top"><?php echo $row_prd['ts_name']; ?></td>
              <td valign="top"><b> <?php echo $row_prd['p_name']; ?>
              <br>
              <a href="product_detail.php?p_id=<?php echo $row_prd['p_id'];?>&t_id=<?php echo $row_prd['t_id'];?>&act=edit" class="btn btn-info btn-xs" target="_blank"> รายละเอียด </a>
              </b>
   
               </td>
              <td align="right" valign="top"><?php echo number_format($row_prd['p_price'],2); ?></td>
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
              <td><img src="../pimg/<?php echo $row_prd['p_img1'];?>" width="100px"></td>
              <td><center>
              <a href="edit_product.php?p_id=<?php echo $row_prd['p_id'];?>&t_id=<?php echo $row_prd['t_id'];?>&act=edit" class="btn btn-warning btn-xs">
              แก้ไข </a>
              </center><center> <a href="del_product.php?p_id=<?php echo $row_prd['p_id'];?>" class="btn btn-danger btn-xs" onClick="return confirm('ยืนยันการลบ');"> ลบ </a> </center></td>
            </tr>
            <?php } while ($row_prd = mysql_fetch_assoc($prd)); ?>
            <?php } ?>
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
