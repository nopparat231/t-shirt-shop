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

mysql_select_db($database_condb);
$query_prd = "
SELECT * FROM tbl_product as p, tbl_type as t
WHERE p.t_id = t.t_id
ORDER BY p.p_id ASC";
$prd = mysql_query($query_prd, $condb) or die(mysql_error());
$row_prd = mysql_fetch_assoc($prd);
$totalRows_prd = mysql_num_rows($prd);
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

</head>
<body>
  <div class="container">
    <div class="row">
     <?php include('navbar.php');?>
   </div>



      <?php include('m.php');?>
    <div class="row">
    <div class="col-md-12">
      <h3 align="center"> เพิ่มรายการหนังสือ </h3>
      <!--<h5><font color="red">*กรณีไม่ต้องการให้แสดงส่วนลด ไม่ต้องกรอกราคาก่อนลด และวันที่</font></h5>-->

      <div class="table-responsive">
        <form action="add_product_db.php"  method="post" enctype="multipart/form-data" name="Add_Product" id="Add_Product" >


          <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td colspan="1" align="center"></td>
            </tr>
            <tr>
              <td width="129" align="right" valign="middle"><font color="red">*</font>ชื่อหนังสือ :</td>
              <td colspan="2"><label for="pro_name2"></label>
                <input name="p_name" type="text" required id="pro_name2" size="50"/></td>
              </tr>
              <tr>
                <td align="right" valign="middle">&nbsp;</td>
                <td colspan="2">&nbsp;</td>
              </tr>
              <?php include 'in.php'; ?>
              <tr>
                <td align="right" valign="middle">&nbsp;</td>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td width="129" align="right" valign="middle">ผู้เขียน :</td>
                <td colspan="2"><label for="p_at"></label>
                  <input name="p_at" type="text" required size="50"/></td>
                </tr>

                <tr>
                  <td align="right" valign="middle">&nbsp;</td>
                  <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                  <td width="129" align="right" valign="middle">สำนักพิมพ์ :</td>
                  <td colspan="2"><label for="p_pu"></label>
                    <input name="p_pu" type="text" required size="50"/></td>
                  </tr>

                  <tr>
                    <td align="right" valign="middle">&nbsp;</td>
                    <td colspan="2">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="129" align="right" valign="middle">ISBN :</td>
                    <td colspan="2"><label for="p_br"></label>
                      <input name="p_br" type="number" required size="50"/></td>
                    </tr>

                    <tr>
                      <td align="right" valign="middle">&nbsp;</td>
                      <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="right" valign="top"><font color="red">*</font>รายละเอียดหนังสือ :&nbsp;</td>
                      <td colspan="2">
                       <textarea name="p_detial" id="p_detial" class="ckeditor" cols="80" rows="5"></textarea>
                     </td>
                   </tr>
                   <tr>
                    <td align="right" valign="middle">&nbsp;</td>
                    <td colspan="2">&nbsp;</td>
                  </tr>


                  <tr>
                    <td align="right" valign="middle"><br><font color="red">*</font>รูปภาพหนังสือ1 :&nbsp;</td>
                    <td colspan="2"><label for="p_img1"></label>
                      <input name="p_img1" type="file" required class="bg-warning" id="p_img1" size="40" /></td>
                    </tr>
                    <tr>
                      <td align="right" valign="middle">&nbsp;</td>
                      <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="right" valign="middle"><br>รูปภาพหนังสือ2 :&nbsp;</td>
                      <td colspan="2"><label for="p_img2"></label>
                        <input name="p_img2" type="file"  class="bg-warning" id="p_img2" size="40" /></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td colspan="2">&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td colspan="2">&nbsp;__________________________________</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td colspan="2">&nbsp;</td>
                      </tr>
              <tr>
                <td width="129" align="right" valign="middle"><font color="red">*</font>จำนวนหนังสือ :</td>
                <td colspan="2"><label for="p_qty"></label>
                  <input name="p_qty" min="0"type="number" required id="p_qty" size="5"/></td>
                </tr>

                <tr>
                  <td align="right" valign="middle">&nbsp;</td>
                  <td colspan="2">&nbsp;</td>
                </tr>

                <tr>
                  <td align="right" valign="middle"><font color="red">*</font>หน่วยนับ</td>
                  <td colspan="2"><label for="pro_qty"></label> :
                   <select name="p_unit" id="p_unit" required>
                    <option value="เล่ม">เล่ม</option>
                    <option value="แผ่น">ชุด</option>

                  </select></td>
                </tr>
                <tr>
                 <td align="right" valign="middle">&nbsp;</td>
                 <td colspan="2">&nbsp;</td>
               </tr>

               <tr>
                 <td width="129" align="right" valign="middle"><font color="red">*</font>น้ำหนัก :</td>
                 <td colspan="2"><label for="p_ems"></label>
                   <input name="p_ems" min="0"type="number" required id="p_ems" size="5"/> กรัม</td>
                 </tr>
                <tr>
                  <td align="right" valign="middle">&nbsp;</td>
                  <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                  <td align="right" valign="middle"><font color="red">*</font>ราคาขาย :</td>
                  <td width="2"><label for="p_price"></label>
                   <input name="p_price"min="0" type="number" required id="p_price" value="" size="5"/></td>
                 </tr>

                <td align="right" valign="middle">&nbsp;</td>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr >
                <td align="right" valign="middle">ราคาก่อนลด :</td>
                <td width="2"><label for="promo"></label>
                  <input name="promo"min="0" type="number" required id="promo" value="0" size="5"/></td>
                </tr>


                <?php $dd = date('Y-m-d'); ?>
                <tr>
                  <td align="right" valign="middle">&nbsp;</td>
                  <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                  <td align="right" valign="middle">เริ่มลดราคา :</td>
                  <td width="2"><label for="promo_start"></label>
                    <input type="date" name="promo_start" min="<?php echo $dd; ?>" ">
                  </td>
                </tr>
                <tr>
                  <td align="right" valign="middle">&nbsp;</td>
                  <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                  <td align="right" valign="middle">สิ้นสุดการลดราคา :</td>
                  <td width="2"><label for="promo_done"></label>
                    <input type="date" name="promo_done" min="<?php echo $dd; ?>" ">
                  </td>
                </tr>
                  <tr>
                    <td align="right" valign="middle">&nbsp;</td>
                    <td colspan="2">&nbsp;</td>
                  </tr>





                  <tr>
                    <td align="right" valign="middle">เลขที่ใบตรวจรับหนังสือ :</td>
                    <td colspan="2">

                     <?php

                     $query_sell = "SELECT * FROM tbl_sell ";
                     $sell = mysql_query($query_sell, $condb) or die(mysql_error());
                     $row_sell = mysql_fetch_assoc($sell);
                     $totalRows_sell = mysql_num_rows($sell);

                     ?>

                     <label for=""></label>
                     <select name="s_id" required="required">
                      <option value="">กรุณาเลือกเลขที่ใบตรวจรับหนังสือ</option>

                      <?php
                      do {
                        ?>
                        <option value="<?php echo $row_sell['s_id']?>"><?php echo $row_sell['s_number']?></option>
                        <?php
                      } while ($row_sell = mysql_fetch_assoc($sell));

                      ?>
                    </select>
                  </td>
                </tr>

                <tr>
                  <td align="right" valign="middle">&nbsp;</td>
                  <td colspan="2">&nbsp;</td>
                </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td colspan="2"><button type="submit" name="button" id="button" value="ตกลง" class="btn btn-primary">เพิ่มหนังสือ</button></td>
                        </tr>
                      </table>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </body>
          </html>
          <?php
          mysql_free_result($ptype);

          mysql_free_result($prd);
          ?>
          <?php include('f.php');?>
