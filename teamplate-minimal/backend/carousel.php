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
$query_row_eprd = "SELECT * FROM tbl_carousel";
$row_eprdt = mysql_query($query_row_eprd, $condb) or die(mysql_error());
$row_eprd = mysql_fetch_assoc($row_eprdt);


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
  <!-- ckeditor-->
  <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>

  <?php include('navbar.php');?>
</head>
<body>
  <div class="container">




      <?php include('m.php');?>
    <div class="row">

    <div class="col-md-12">
      <h3 align="center"> แก้ไขรูปภาพโลโก้ หน้าปก<?php include 'edit-ok.php'; ?> </h3>
      <div class="table">
        <form action="carousel_edit.php"  method="post" enctype="multipart/form-data" name="Add_Product" id="Add_Product" >


          <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td colspan="3" align="center">&nbsp;</td>
            </tr>

            <tr>
              <td align="right" valign="middle">&nbsp;</td>
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
              <td align="right" valign="middle">&nbsp;</td>

            </tr>
            <tr>
              <td align="right" valign="middle">&nbsp;</td>
              <td colspan="2"><img src="../pimg/<?php echo $row_eprd['carousel_img_1']; ?>" width="100"></td>
            </tr>
            <tr>
              <td align="right" valign="middle">แก้รูปหน้าปก :&nbsp;&nbsp;&nbsp;</td>
              <td colspan="2"><label for="p_img1"></label>
                <input name="p_img1" type="file"  class="bg-warning" id="p_img1" size="40" />
                <input name="p_img11" type="hidden" id="p_img11" value="<?php echo $row_eprd['carousel_img_1']; ?>">
                <input name="carousel_id" type="hidden" id="p_id" value="<?php echo $row_eprd['carousel_id']; ?>"></td>
              </tr>
              <tr>
                <td align="right" valign="middle">&nbsp;</td>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td align="right" valign="middle">&nbsp;</td>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td align="right" valign="middle">&nbsp;</td>

              </tr>
              <tr>
                <td align="right" valign="middle">&nbsp;</td>
                <td colspan="2"><img src="../pimg/<?php echo $row_eprd['logo']; ?>" width="100"></td>
              </tr>

                  <tr>
                    <td align="right" valign="middle">แก้โลโก้ :&nbsp;&nbsp;&nbsp;</td>
                    <td colspan="2"><label for="p_logo"></label>
                      <input name="p_logo" type="file"  class="bg-warning" id="p_logo" size="40" />
                      <input name="p_logo11" type="hidden" id="p_logo11" value="<?php echo $row_eprd['logo']; ?>">

                    </tr>

                    <tr>
                      <td>&nbsp;</td>
                      <td colspan="2">&nbsp;</td>
                    </tr>
                    <td align="right" valign="middle">&nbsp;</td>
                    <tr>
                      <td>&nbsp;</td>
                      <td colspan="2"><button type="submit" name="button" id="button" value="ตกลง" class="btn btn-primary">แก้ไขรูปภาพ</button></td>
                    </tr>
                  </table>
                </form>
              </div>
            </div>
            <!-- ------------------------------------------------------------------------------------- -->


          </div>
        </div>
      </body>
      </html>

      <?php include('f.php');?>
