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


$ts_id = $_POST['ts_id'];
$ts_name = $_POST['ts_name'];
// $t_type = $_POST['t_type'];

mysql_select_db($database_condb);
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "ptype")) {
  $updateSQL = sprintf("UPDATE tbl_type_sub SET ts_name='$ts_name' WHERE ts_id='$ts_id'");

  mysql_select_db($condb, $condb);
  $Result1 = mysql_query($updateSQL, $condb) or die(mysql_error());

  $updateGoTo = "edit_product_type_sub.php?t_id=" . $row_edittype['ts_id'] . "";
  if (isset($_SERVER['QUERY_STRING'])) {
   header(sprintf("Location: list_product_type_sub.php"));
 }

}

$colname_edittype = "-1";
if (isset($_GET['ts_id'])) {
  $colname_edittype = $_GET['ts_id'];
}
mysql_select_db($database_condb);
$query_edittype = sprintf("SELECT * FROM tbl_type_sub WHERE ts_id = '$colname_edittype'");
$edittype = mysql_query($query_edittype, $condb) or die(mysql_error());
$row_edittype = mysql_fetch_assoc($edittype);
$totalRows_edittype = mysql_num_rows($edittype);
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
<body>      <?php //include('menu.php');?>
  <div class="container">
    
   <div class="row">
    

<div class="col-md-3">
  
</div>
    <div class="col-md-9">
      <h3 align="center"> แก้ไขประเภทสินค้าย่อย </h3>
      <div class="table">
        <form action="<?php echo $editFormAction; ?>" method="POST" name="ptype" id="ptype" class="form-horizontal">
        	<div class="form-group">
           <div class="col-sm-3" align="right"> ประเภทสินค้า </div>
           <div class="col-sm-7">
             <input name="ts_name" type="text" required class="form-control" value="<?php echo $row_edittype['ts_name']; ?>">
           </div>
           <br>
<!--            <br>
           <div class="col-sm-3" align="right"> ชื่อย่อ </div>
           <div class="col-sm-4">
            <input type="text" name="t_type" class="form-control"  value="<?php echo $row_edittype['t_type']; ?>" required>
          </div>
 -->

        </div>
        <div class="form-group">
         <div class="col-sm-3"></div>
         <div class="col-sm-7">
           <button type="submit" name="save" class="btn btn-primary"> บันทึก </button>
           <input name="ts_id" type="hidden" id="ts_id" value="<?php echo $row_edittype['ts_id']; ?>"> <a href="list_product_type_sub.php" type="btn" class="btn btn-danger">ยกเลิก</a>
         </div>
       </div>
       <input type="hidden" name="MM_update" value="ptype">
     </form>
   </div>
 </div>
</div>
</div>
</body>
</html>
<?php
mysql_free_result($edittype);
?>
<?php include('f.php');?>
