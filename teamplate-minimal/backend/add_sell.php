<?php include('access.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include('h.php');?>


  </head><?php include('navbar.php');?>
  <body>

    <?php //include('menu.php');?>

    <div class="container">






        <?php include('m.php');?>
        <div class="row">

    <div class="col-md-12">
      <h3 align="center"> เพิ่มรายการตรวจรับหนังสือ</h3>
      <div class="table-responsive">
        <form action="add_sell_db.php"  method="post" enctype="multipart/form-data" name="Add_Product" id="Add_Product" >


          <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td colspan="3" align="center">&nbsp;</td>
            </tr>
            <tr>
              <td width="129" align="right" valign="middle">เลขที่ใบตรวจรับ :</td>
              <td width="471" colspan="2"><label for="b_type"></label>
                <input name="s_number" type="text" required id="pro_name2" size="20"/></td>
              </tr>
              <tr>
                <td align="right" valign="middle">&nbsp;</td>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td align="right" valign="middle">จำนวน :&nbsp;</td>
                <td colspan="2"><input name="sn_number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                  type = "number"
                  maxlength = "8" required  size="5"  onkeydown="javascript: return event.keyCode == 69 ? false : true" />

                </tr>
                <tr>
                  <td align="right" valign="middle">&nbsp;</td>
                  <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                  <td align="right" valign="middle">ราคา :&nbsp;</td>
                  <td colspan="2">

                    <input name="s_price" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
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
                    <input name="s_name" type="text" required id="pro_name2" size="20"/></td>
                  </tr>
                  <tr>
                    <td align="right" valign="middle">&nbsp;</td>
                    <td colspan="2">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="129" align="right" valign="middle">ที่อยู่ :</td>
                    <td width="471" colspan="2"><label for="b_type"></label>
                      <input name="s_address" type="text" required id="pro_name2" size="20"/></td>
                    </tr>
                    <tr>
                      <td align="right" valign="middle">&nbsp;</td>
                      <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="129" align="right" valign="middle">เบอร์โทร :</td>
                      <td width="471" colspan="2"><label for="b_type"></label>
                        <input name="s_phone" type="text" required id="pro_name2" size="20"/></td>
                      </tr>
                      <tr>
                        <td align="right" valign="middle">&nbsp;</td>
                        <td colspan="2">&nbsp;</td>
                      </tr>
                      <tr>
                        <td width="129" align="right" valign="middle">อีเมลล์ :</td>
                        <td width="471" colspan="2"><label for="b_type"></label>
                          <input name="s_email" type="text" required id="pro_name2" size="20"/></td>
                        </tr>

                <tr>
                  <td align="right" valign="top">&nbsp;</td>
                  <td colspan="2">&nbsp;</td>
                </tr>

                <tr>
                  <td align="right" valign="middle">วันที่สั่งซื้อสินค้า :&nbsp;</td>
                  <td colspan="2"><input name="s_date" type="date" required id="pro_name4" size="60"/></td>
                </tr>
                <tr>
                  <td align="right" valign="middle">&nbsp;</td>
                  <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                  <td align="right" valign="middle">วันที่รับสินค้า :&nbsp;</td>
                  <td colspan="2"><input name="sn_date" type="date" required id="pro_name5" size="60"/></td>
                </tr>
                <tr>
                  <td align="right" valign="middle">&nbsp;</td>
                  <td colspan="2">&nbsp;</td>
                </tr>

                <tr>
                  <td align="right" valign="middle"><br>ใบตรวจรับ :&nbsp;</td>
                  <td colspan="2"><label for="b_logo"></label>
                    <input type="file" name="s_bill" id="b_logo" required></td>
                  </tr>
                  <tr>
                    <td align="right" valign="middle">&nbsp;</td>
                    <td colspan="2">&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;<input type="number" hidden name="add_id" value="<?php echo $row_mm['admin_id'];?>" /></td>
                    <td colspan="2">
                      <button type="submit" name="button" id="button" value="ตกลง" class="btn btn-primary">เพิ่มข้อมูล</button></td>
                    </tr>
                  </table>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>
    </html>

    <?php include('f.php');?>
