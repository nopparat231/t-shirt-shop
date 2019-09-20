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
$query_mem = "SELECT count(mem_id) as SumMem FROM tbl_member ";
$mem = mysql_query($query_mem, $condb) or die(mysql_error());
$row_mem = mysql_fetch_assoc($mem);
$totalRows_mem = mysql_num_rows($mem);



mysql_select_db($database_condb);
$query_view = "SELECT p_qty , p_name , SUM(p_view) as SumView , count(p_id) as Sumprd FROM tbl_product ";
$view = mysql_query($query_view, $condb) or die(mysql_error());
$row_view = mysql_fetch_assoc($view);
$totalRows_view = mysql_num_rows($view);

mysql_select_db($database_condb);
$query_order = "SELECT order_status ,  count(order_id) as Sumorder  FROM tbl_order ";
$order = mysql_query($query_order, $condb) or die(mysql_error());
$row_order = mysql_fetch_assoc($order);
$totalRows_order = mysql_num_rows($order);

// โชว์จำนวน ออเดอร์
$query_order1 = "SELECT order_status FROM tbl_order where order_status=1 ";
$order1 = mysql_query($query_order1, $condb) or die(mysql_error());
$row_ptype = mysql_fetch_assoc($order1);
$totalRows_ptype1 = mysql_num_rows($order1);

$query_order2 = "SELECT order_status FROM tbl_order where order_status=2 ";
$order2 = mysql_query($query_order2, $condb) or die(mysql_error());
$row_ptype = mysql_fetch_assoc($order2);
$totalRows_ptype2 = mysql_num_rows($order2);

$query_order3 = "SELECT order_status FROM tbl_order where order_status=3 ";
$order3 = mysql_query($query_order3, $condb) or die(mysql_error());
$row_ptype = mysql_fetch_assoc($order3);
$totalRows_ptype3 = mysql_num_rows($order3);


$query_order4 = "SELECT order_status FROM tbl_order where order_status=4 ";
$order4 = mysql_query($query_order4, $condb) or die(mysql_error());
$row_ptype = mysql_fetch_assoc($order4);
$totalRows_ptype4 = mysql_num_rows($order4);

// โชว์จำนวน ออเดอร์



?>