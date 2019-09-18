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

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "ptype")) {
  $updateSQL = sprintf("UPDATE tbl_type1 SET t1_name=%s , t_id=%s WHERE t1_id=%s",
                       GetSQLValueString($_POST['t1_name'], "text"),
                       GetSQLValueString($_POST['t_id'], "text"),
                       GetSQLValueString($_POST['t1_id'], "int"));

  mysql_select_db($condb, $condb);
  $Result1 = mysql_query($updateSQL, $condb) or die(mysql_error());

  $updateGoTo = "list_product_type1.php?t1";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: list_product_type1.php?t1"));
}

$colname_edittype = "-1";
if (isset($_GET['t1_id'])) {
  $colname_edittype = $_GET['t1_id'];
}
mysql_select_db($database_condb);
$query_edittype = sprintf("SELECT * FROM tbl_type1 WHERE t1_id = %s", GetSQLValueString($colname_edittype, "int"));
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
  </head>
  <body>
  <div class="container">
  <div class="row">
         <?php include('navbar.php');?>
   </div>

    

        <?php include('m.php');?>
      <div class="row">
      <div class="col-md-12">
        <h3 align="center"> แก้ไขประเภทย่อย </h3>
        <div class="table">
        <form action="<?php echo $editFormAction; ?>" method="POST" name="ptype" id="ptype" class="form-horizontal">
        	<div class="form-group">
            	<div class="col-sm-3" > ประเภทสินค้า </div>
                <div class="col-sm-7">
                     <?php include 'tbl_type.php'; ?>
                   </div>
                     <div class="col-sm-3"> ประเภทย่อย</div>
          <div class="col-sm-7">
                	<input name="t1_name" type="text" required class="form-control" value="<?php echo $row_edittype['t1_name']; ?>">
                </div>
            </div>
            <div class="form-group">
            	<div class="col-sm-3"></div>
                <div class="col-sm-7">
                	<button type="submit" name="save" class="btn btn-primary"> บันทึก </button>
                  <a href="list_product_type1.php?t1" type="btn" class="btn btn-danger">ยกเลิก</a>
                	<input name="t1_id" type="hidden" id="t1_id" value="<?php echo $row_edittype['t1_id']; ?>">
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
