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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "ptype")) {
  $insertSQL = sprintf("INSERT INTO tbl_type1 (t1_name,t_id) VALUES (%s,%s)",
   GetSQLValueString($_POST['t1_name'], "text"),GetSQLValueString($_POST['t_id'], "text"));

  mysql_select_db($database_condb);
  $Result1 = mysql_query($insertSQL, $condb) or die(mysql_error());

  $insertGoTo = "list_product_type1.php?t1";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_condb);
$query_ptype = "SELECT * FROM tbl_type1";
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
</head>
<body>
  <div class="container">
    <div class="row">
     <?php include('navbar.php');?>
   </div>



      <?php include('m.php');?>
    <div class="row">
    <div class="col-md-12">
      <h3 align="center"> เพิ่มประเภทย่อยสินค้า </h3><p>
      <div class="table">
        <form action="<?php echo $editFormAction; ?>" method="POST" name="ptype" id="ptype" class="form-horizontal">
        	<div class="form-group">
           <div class="col-sm-3" > ประเภทหลัก <br></div>
           <div class="col-sm-7">

     <?php include 'tbl_type.php'; ?>
          </div>
          <div class="col-sm-3"> ประเภทย่อย</div>
          <div class="col-sm-7">

            <input type="text" name="t1_name" class="form-control" required>
          </div>
        </div>
        <div class="form-group">
         <div class="col-sm-3"></div>
         <div class="col-sm-7">
           <button type="submit" name="save" class="btn btn-primary"> บันทึก </button>
           <a href="list_product_type1.php?t1" type="btn" class="btn btn-danger">ยกเลิก</a>
         </div>
       </div>
       <input type="hidden" name="MM_insert" value="ptype">

     </form>
   </div>
 </div>
</div>
</div>
</body>
</html>
<?php
mysql_free_result($ptype);
?>
<?php include('f.php');?>
