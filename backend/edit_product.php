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

$colname_eprd = "-1";
if (isset($_GET['p_id'])) {
  $colname_eprd = $_GET['p_id'];
}
mysql_select_db($database_condb);
$query_eprd = sprintf("SELECT * FROM tbl_product WHERE p_id = %s", GetSQLValueString($colname_eprd, "int"));
$eprd = mysql_query($query_eprd, $condb) or die(mysql_error());
$row_eprd = mysql_fetch_assoc($eprd);
$totalRows_eprd = mysql_num_rows($eprd);

$t_id=$_GET['t_id'];

mysql_select_db($database_condb);
$query_prd = "
SELECT * FROM  tbl_type as t
WHERE t.t_id=$t_id";
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

  </head> <?php include('navbar.php');?>
  <body>   <?php //include('menu.php');?>
  <div class="container">

   <div class="row">
    

     
     
     <div class="col-md-3">
      
     </div>
     <div class="col-md-9">
      <h3 align="center"> แก้ไขข้อมูลสินค้า
       <?php include('edit-ok.php');?>
     </h3>
     <div class="table-responsive">
      <form action="edit_product_db.php"  method="post" enctype="multipart/form-data" name="Add_Product" id="Add_Product" >


        <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td colspan="3" align="center">&nbsp;</td>
          </tr>
          <tr>
            <td width="129" align="right" valign="middle">ชื่อสินค้า :</td>
            <td colspan="2"><label for="pro_name2"></label>
              <input name="p_name" type="text" required id="pro_name2" value="<?php echo $row_eprd['p_name']; ?>" size="50"/></td>
            </tr>
            <tr>
              <td align="right" valign="middle">&nbsp;</td>
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
              <td width="129" align="right" valign="middle">จำนวนสินค้า :</td>
              <td colspan="2"><label for="p_qty"></label>
                <input name="p_qty" value="<?php echo $row_eprd['p_qty']; ?>" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                type = "number"
                maxlength = "4" required  size="5"  onkeydown="javascript: return event.keyCode == 69 ? false : true" /></td>
              </tr>
              <tr>
                <td align="right" valign="middle">&nbsp;</td>
                <td colspan="2">&nbsp;</td>
              </tr>
             <!--  <tr>
                <td align="right" valign="middle">ราคาก่อนลด :</td>
                <td width="2"><label for="promo"></label>
                 <input name="promo" value="<?php echo $row_eprd['promo']; ?>" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                 type = "number"
                 maxlength = "5" required id="promo" onkeydown="javascript: return event.keyCode == 69 ? false : true"/></td>
               </tr>

               <tr>
                <td align="right" valign="middle">&nbsp;</td>
                <td colspan="2">&nbsp;</td>
              </tr> -->
              <tr>
                <td align="right" valign="middle">ราคาหลังลด :</td>
                <td width="2"><label for="p_price"></label>
                 <input name="p_price" value="<?php echo $row_eprd['p_price']; ?>"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                 type = "number"
                 maxlength = "5" required id="p_price" value="" size="5" onkeydown="javascript: return event.keyCode == 69 ? false : true"/></td>
               </tr>

               <tr>
                <td align="right" valign="middle">&nbsp;</td>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td width="129" align="right" valign="middle">ไซส์ :</td>
                <td colspan="2"><label for="p_size"></label>
                  <input name="p_size" value="<?php echo $row_eprd['p_size']; ?>"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                  type = "text"
                  maxlength = "3"  required id="p_size" /></td>
                </tr>
                <tr>
                  <td align="right" valign="middle">&nbsp;</td>
                  <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                  <td width="129" align="right" valign="middle">ค่าจัดส่ง :</td>
                  <td colspan="2"><label for="p_ems"></label>
                    <input name="p_ems" value="<?php echo $row_eprd['p_ems']; ?>" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                    type = "number"
                    maxlength = "3" required id="p_ems" size="5"  onkeydown="javascript: return event.keyCode == 69 ? false : true"/></td>
                  </tr>
                  <tr>
                    <td align="right" valign="middle">&nbsp;</td>
                    <td colspan="2">&nbsp;</td>
                  </tr>

                  <tr>
                    <td align="right" valign="middle">ตัวแทนจำหน่าย :</td>
                    <td colspan="2">
                      <label for=""></label>

                      <?php
                      $n = "";
                      $ng = "";
                      $ns = "";
                      if ($row_eprd['p_sell'] == 'koramex'){
                        $n = "selected='selected'";
                      }elseif ($row_eprd['p_sell'] == 'fashion shoes') {
                        $ng = "selected='selected'";
                      }    
                     //  elseif ($row_eprd['p_sell'] == 'บ.3') {
                     //   $ns = "selected='selected'";
                     // } 
                     ?>

                     <select class="form-control" id="sel1" name="p_sell">
                      <option value="koramex" <?php echo $n; ?>>koramex</option>
                      <option value="fashion shoes" <?php echo $ng; ?>>fashion shoes</option>
                     <!--  <option value="บ.3" <?php echo $ns; ?>>บ.3</option> -->
                    </select>
                  </td>
                </tr>

                <tr>
                  <td align="right" valign="middle">&nbsp;</td>
                  <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                  <td align="right" valign="middle">ประเภทสินค้า :</td>
                  <td colspan="2">
                    <label for=""></label>
                    <select name="t_id" id="t_id" required="required">
                     <option value="<?php echo $row_prd['t_id'];?>"><?php echo $row_prd['t_name'];?></option>
                     <option value="">กรุณาเลือกประเภท</option>
                     <?php
                     do {
                      ?>
                      <option value="<?php echo $row_ptype['t_id']?>"><?php echo $row_ptype['t_name']?></option>
                      <?php
                    } while ($row_ptype = mysql_fetch_assoc($ptype));
                    $rows = mysql_num_rows($ptype);
                    if($rows > 0) {
                      mysql_data_seek($ptype, 0);
                      $row_ptype = mysql_fetch_assoc($ptype);
                    }
                    ?>
                  </select>
                </td>
              </tr>
              <tr>
                <td align="right" valign="middle">&nbsp;</td>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td align="right" valign="top">รายละเอียดสินค้า :</td>
                <td colspan="2">
                  <textarea name="p_detial" id="p_detial" class="ckeditor" cols="80" rows="5"><?php echo $row_eprd['p_detial']; ?></textarea>
                </td>
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
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td align="right" valign="middle">หน่วยสินค้า</td>
                <td colspan="2"><label for="pro_qty"></label>
                 :
                 <select name="p_unit" id="p_unit" required>
                  <option value="<?php echo $row_eprd['p_unit'];?>"><?php echo $row_eprd['p_unit'];?></option>
                  <option value="ชิ้น">ชิ้น</option>
                  <option value="ใบ">ใบ</option>
                  <option value="คู่">คู่</option>
                  <option value="ตัว">ตัว</option>

                </select></td>
              </tr>
              <tr>
                <td align="right" valign="middle">&nbsp;</td>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td align="right" valign="middle">&nbsp;</td>
                <td colspan="2">รูปที่&nbsp;1</td>
              </tr>
              <tr>
                <td align="right" valign="middle">&nbsp;</td>
                <td colspan="2"><img src="../pimg/<?php echo $row_eprd['p_img1']; ?>" width="100"></td>
              </tr>
              <tr>
                <td align="right" valign="middle">แก้รูปที่1 :</td>
                <td colspan="2"><label for="p_img1"></label>
                  <input name="p_img1" type="file"  class="bg-warning" id="p_img1" size="40" />
                  <input name="p_img11" type="hidden" id="p_img11" value="<?php echo $row_eprd['p_img1']; ?>">
                  <input name="p_id" type="hidden" id="p_id" value="<?php echo $row_eprd['p_id']; ?>"></td>
                </tr>
                <tr>
                  <td align="right" valign="middle">&nbsp;</td>
                  <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                  <td align="right" valign="middle">&nbsp;</td>
                  <td colspan="2">รูปที่&nbsp;2</td>
                </tr>
                <tr>
                  <td align="right" valign="middle">&nbsp;</td>
                  <td colspan="2"><img src="../pimg/<?php echo $row_eprd['p_img2']; ?>" width="100"></td>
                </tr>
                <tr>
                  <td align="right" valign="middle">แก้รูปที่2 :</td>
                  <td colspan="2"><label for="p_img2"></label>
                    <input name="p_img2" type="file"  class="bg-warning" id="p_img2" size="40" />
                    <input name="p_img22" type="hidden" id="p_img22" value="<?php echo $row_eprd['p_img2']; ?>"></td>
                  </tr>
                  <tr>
                    <tr>
                      <td align="right" valign="middle">&nbsp;</td>
                      <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="right" valign="middle">&nbsp;</td>
                      <td colspan="2">รูปที่&nbsp;3</td>
                    </tr>
                    <tr>
                      <td align="right" valign="middle">&nbsp;</td>
                      <td colspan="2"><img src="../pimg/<?php echo $row_eprd['p_img3']; ?>" width="100"></td>
                    </tr>
                    <tr>
                      <td align="right" valign="middle">แก้รูปที่3 :</td>
                      <td colspan="2"><label for="p_img3"></label>
                        <input name="p_img3" type="file"  class="bg-warning" id="p_img3" size="40" />
                        <input name="p_img33" type="hidden" id="p_img33" value="<?php echo $row_eprd['p_img3']; ?>"></td>
                      </tr>
                      <tr>
                        <tr>
                          <td align="right" valign="middle">&nbsp;</td>
                          <td colspan="2">&nbsp;</td>
                        </tr>
                        <tr>
                          <td align="right" valign="middle">&nbsp;</td>
                          <td colspan="2">รูปที่&nbsp;4</td>
                        </tr>
                        <tr>
                          <td align="right" valign="middle">&nbsp;</td>
                          <td colspan="2"><img src="../pimg/<?php echo $row_eprd['p_img4']; ?>" width="100"></td>
                        </tr>
                        <tr>
                          <td align="right" valign="middle">แก้รูปที่3 :</td>
                          <td colspan="2"><label for="p_img4"></label>
                            <input name="p_img4" type="file"  class="bg-warning" id="p_img4" size="40" />
                            <input name="p_img44" type="hidden" id="p_img44" value="<?php echo $row_eprd['p_img4']; ?>"></td>
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
                                <td>&nbsp;</td>
                                <td colspan="2"><button type="submit" name="button" id="button" value="ตกลง" class="btn btn-primary">บันทึก</button></td>
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

                mysql_free_result($eprd);

                mysql_free_result($prd);
                ?>
                <?php include('f.php');?>
