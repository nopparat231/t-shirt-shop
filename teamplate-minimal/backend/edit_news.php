<?php include('access.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
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

    $colname_editnew = "-1";
    if (isset($_GET['new_id'])) {
      $colname_editnew = $_GET['new_id'];
    }
    mysql_select_db($database_condb);
    $query_editnew = sprintf("SELECT * FROM tbl_new WHERE new_id = %s", GetSQLValueString($colname_editnew, "int"));
    $editnew = mysql_query($query_editnew, $condb) or die(mysql_error());
    $row_editnew = mysql_fetch_assoc($editnew);
    $totalRows_editnew = mysql_num_rows($editnew);
    ?>

    <div class="col-md-10">
      <h3 align="center">  แก้ไขข่าว </h3><?php include('edit-ok.php');?>
      <div class="table">
        <form  name="register" action="edit_news_db.php" method="POST" id="register" class="form-horizontal">
         <div class="form-group">
           <div class="col-sm-2">  </div>

         </div>
         <tr>

           <td colspan="2">
            <input type="text" name="new_title" class="form-control" placeholder="กรุณากรอกหัวข้อข่าว" required value="<?php echo $row_editnew['new_title']; ?>" />
          </td>
          <br>

          <td colspan="2">
            <input type="text" name="new_img" class="form-control" placeholder="กรุณากรอก URL รูปภาพข่าว" required value="<?php echo $row_editnew['new_img']; ?>" />
          </td>
          <br>


          <td colspan="2">

            <textarea name="new_v" cols="100" class="ckeditor" rows="5"><?php echo $row_editnew['new_v']; ?></textarea>
            <input type="number" name="new_id" hidden="hidden" value="<?php echo $row_editnew['new_id']; ?>" />

          </td>
        </tr>
        <br>
        <div class="form-group">
          <div class="col-sm-2"> </div>
          <div class="col-sm-6">
            <button type="submit" class="btn btn-primary" id="btn"> บันทึก  </button>
            <a href="list_news.php" class="btn btn-danger" >ยกเลิก</a>
          </div>

        </div>
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
<?php  include('f.php');?>
