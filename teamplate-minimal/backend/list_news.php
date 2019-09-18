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
$query_mem = "SELECT * FROM tbl_new ORDER BY new_id desc";
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
</head>
<body>
 <?php include('navbar.php');?>
 <div class="container">






    <?php include('m.php');?>
  <div class="row">
  <div class="col-md-12">
    <h3 align="center"> รายการข่าวสาร  <a href="add_news.php" class="btn btn-primary"> + เพิ่ม </a> </h3>
    <div class="table ">
      <table id="example" class="display" cellspacing="0" border="1">
        <thead>
          <tr align="center">
            <th >ลำดับ</th>
            <th >ข้อมูล</th>
            <th >เวลา</th>

            <th >แก้ไข </th>
            <th >ลบ</th>
          </tr>
        </thead>
        <?php
        $i = 1;
        do { ?>
          <tr>
            <td align="center"><?php echo $i; ?></td>
            <td><?php echo mb_substr($row_mem['new_title'], 0,30,'utf-8'); ?>...</td>
            <td><?php echo $row_mem['new_time']; ?></td>
            <td><center> <a href="edit_news.php?new_id=<?php echo $row_mem['new_id'];?>" class="btn btn-warning btn-xs"> แก้ไข </a> </center> </td>
            <td><center> <a href="del_new.php?new_id=<?php echo $row_mem['new_id'];?>" onClick="return confirm('ยืนยันการลบ');" class="btn btn-danger btn-xs"> ลบ </a> </center> </td>
          </tr>
          <?php
          $i += 1;
        } while ($row_mem = mysql_fetch_assoc($mem)); ?>
      </table>
    </div>
  </div>
</div>
</div>
</body>
</html>
<?php
mysql_free_result($mem);
?>
<?php // include('f.php');?>
