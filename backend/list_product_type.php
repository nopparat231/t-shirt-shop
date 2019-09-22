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
$query_ptype = "SELECT * FROM tbl_type";
$ptype = mysql_query($query_ptype, $condb) or die(mysql_error());
$row_ptype = mysql_fetch_assoc($ptype);
$totalRows_ptype = mysql_num_rows($ptype);
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
  </head> <?php include('navbar.php');?>
  <body><?php //include('menu.php');?>
  
  <div class="container">
    
   
    
    <div class="row">
      
     <div class="col-md-3">
      
     </div>
     <div class="col-md-9">
      <h3 align="center"> ประเภทสินค้า <a href="add_product_type.php" class="btn btn-primary"> เพิ่มประเภท </a> </h3>
      <table id="example" class="display" cellspacing="0" border="1">
        <thead>
          <tr>
            <th width="5%">รหัส</th>
            
            <th width="50%">ประเภท</th>
            <th width="5%"> <center> แก้ไข </center></th>
            <th width="5%"> <center> ลบ </center></th>
          </tr>
        </thead>
        <?php if($totalRows_ptype>0){?>

          <?php 
          $i =1;  
          do { ?>
           <tr>
            <td align="center"><?php echo $i; ?></td>
            
            <td align="center"><?php echo $row_ptype['t_name']; ?></td>
            <td><center> <a href="edit_product_type.php?t_id=<?php echo $row_ptype['t_id'];?>" class="btn btn-warning btn-xs"> แก้ไข </a> </center></td>
            <td><center>
              <a href="del_product_type.php?t_id=<?php echo $row_ptype['t_id'];?>" class="btn btn-danger btn-xs" onClick="return confirm('ยืนยันการลบ');">
              ลบ </a></center></td>
            </tr>
            <?php $i +=1; ?>
          <?php } while ($row_ptype = mysql_fetch_assoc($ptype)); ?>
        <?php } ?>
      </table>
    </div>
  </div>
</div>
</body>
</html>
<?php
mysql_free_result($ptype);
?>
<?php include('f.php');?>
