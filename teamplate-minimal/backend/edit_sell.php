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

$colname_editbank = "-1";
if (isset($_GET['bank_id'])) {
  $colname_editbank = $_GET['bank_id'];
}
mysql_select_db($database_condb);
$query_editbank = sprintf("SELECT * FROM tbl_sell WHERE s_id = %s", GetSQLValueString($colname_editbank, "int"));
$editbank = mysql_query($query_editbank, $condb) or die(mysql_error());
$row_editbank = mysql_fetch_assoc($editbank);
$totalRows_editbank = mysql_num_rows($editbank);
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








        <?php include('m.php');?>
      <div class="row">
    <div class="col-md-12">
        <h3 align="center">  แก้ไขการตรวจรับสินค้า  <?php include('edit-ok.php');?> </h3>
<div class="table-responsive">
   <form action="edit_sell_db.php?bank_id=<?php echo $row_editbank['s_id']; ?> "  method="post" enctype="multipart/form-data" name="Add_Product" id="Add_Product" >


  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="3" align="center">&nbsp;</td>
    </tr>
    <tr>
      <td width="129" align="right" valign="middle">เลขที่ใบตรวจรับ :</td>
      <td width="471" colspan="2"><label for="b_type"></label>
        <input name="s_number" type="text" required id="pro_name2" size="20" value="<?php echo $row_editbank['s_number']; ?>" /></td>
    </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>

    <tr>
      <td align="right" valign="middle">จำนวน :</td>
      <td colspan="2">
<input name="sn_number"  value="<?php echo $row_editbank['sn_number']; ?>" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                      type = "number"
                      maxlength = "8" required  size="5"  onkeydown="javascript: return event.keyCode == 69 ? false : true" />

      </td>
    </tr>
    <tr>
      <td align="right" valign="top">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" valign="middle">ราคา :</td>
      <td colspan="2">
<input name="s_price" value="<?php echo $row_editbank['s_price']; ?>" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                      type = "number"
                      maxlength = "8" required  size="5"  onkeydown="javascript: return event.keyCode == 69 ? false : true" />

      </td>
    </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td width="129" align="right" valign="middle">สำนักพิมพ์ :</td>
      <td width="471" colspan="2"><label for="b_type"></label>
        <input name="s_name" type="text" required id="pro_name2" size="20" value="<?php echo $row_editbank['s_name']; ?>" /></td>
    </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td width="129" align="right" valign="middle">ที่อยู่ :</td>
      <td width="471" colspan="2"><label for="b_type"></label>
        <input name="s_address" type="text" required id="pro_name2" size="20" value="<?php echo $row_editbank['s_address']; ?>" /></td>
    </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td width="129" align="right" valign="middle">เบอร์โทร :</td>
      <td width="471" colspan="2"><label for="b_type"></label>
        <input name="s_phone" type="text" required id="pro_name2" size="20" value="<?php echo $row_editbank['s_phone']; ?>" /></td>
    </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td width="129" align="right" valign="middle">อีเมลล์ :</td>
      <td width="471" colspan="2"><label for="b_type"></label>
        <input name="s_email" type="text" required id="pro_name2" size="20" value="<?php echo $row_editbank['s_email']; ?>" /></td>
    </tr>

    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" valign="middle">วันที่สั่งซื้อสินค้า :</td>
      <td colspan="2"><input name="s_date" type="date" required id="pro_name4" size="60" value="<?php echo $row_editbank['s_date']; ?>"/></td>
    </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" valign="middle">วันที่รับสินค้า :</td>
      <td colspan="2"><input name="sn_date" type="date" required id="pro_name5" size="60" value="<?php echo $row_editbank['sn_date']; ?>"/></td>
    </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>

    <tr>
      <td align="right" valign="middle">ใบเสร็จ :</td>

      <td colspan="2"><img src="../bimg/<?php echo $row_editbank['s_bill']; ?>" width="100">
        <input type="file" name="s_bill" id="s_bill" required value="<?php echo $row_editbank['s_bill']; ?>"></td>
    </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">
      <button type="submit" name="button" id="button" value="ตกลง" class="btn btn-primary">แก้ไข</button></td>
    </tr>
  </table>
</form>
</div>
</div>
</div>
</div>
      </div>
    </div>
 </div>
  </body>
</html>
<?php
mysql_free_result($editbank);

 include('f.php');?>
