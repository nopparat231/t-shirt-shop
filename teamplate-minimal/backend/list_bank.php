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
$query_lbk = "SELECT * FROM tbl_bank ";
$lbk = mysql_query($query_lbk, $condb) or die(mysql_error());
$row_lbk = mysql_fetch_assoc($lbk);
$totalRows_lbk = mysql_num_rows($lbk);
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
  <?php include('navbar.php');?>
  <div class="container">






        <?php include('m.php');?>
      <div class="row">
      <div class="col-md-12">
        <h3 align="center"> รายการข้อมูลธนาคาร   </h3>
        <div class="table">
          <table id="example" class="display" cellspacing="0" border="1">
            <thead>
              <tr align="center">

                <th width="15%">ข้อมูล</th>
                <th width="10%">โลโก้</th>
                <th width="5%">สถานะ</th>

                <th width="5%">ลบ</th>
              </tr>
            </thead>
            <?php do { ?>
              <tr>

                <td>
                  <?php echo "ชื่อบัญชี : ",$row_lbk['b_name']; ?><br />
                  <?php echo "เลขบัญชี : ",$row_lbk['b_number']; ?><br />
                  <?php echo "ประเภท : ",$row_lbk['b_type']; ?><br />
                  <?php echo "เชื่อบัญชี : ",$row_lbk['b_owner']; ?></br>
                  <?php echo "สาขา : ",$row_lbk['bn_name']; ?></td>

                  <td><center><img src="../bimg/<?php echo $row_lbk['b_logo'];?>" width="100px"></center>

                  </td>

                  <?php if ($row_lbk['b_status'] == '0'): ?>
                    <td><center>ปกติ</center></td>
                  <?php endif ?>
                  <?php if ($row_lbk['b_status'] == '1'): ?>
                    <td><center><font color ="red">ปิดบัญชี</center></font></td>
                  <?php endif ?>

                  
                  <td><center> <a href="del_bank.php?bank_id=<?php echo $row_lbk['b_id'];?>" onClick="return confirm('ยืนยันการปิดบัญชี');" class="btn btn-danger btn-xs"> ปิดบัญชี </a> </center> </td>
                </tr>
              <?php } while ($row_lbk = mysql_fetch_assoc($lbk)); ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </body>
  </html>
  <?php
  mysql_free_result($lbk);
  ?>
  <?php  //include('f.php');?>
