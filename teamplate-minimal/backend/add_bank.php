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

  	<div class="row">

       <div class="col-md-3">

</div>
    <div class="col-md-9">
        <h3 align="center"> เพิ่มรายการธนาคาร</h3>
        <div class="table-responsive">
        		<form action="add_bank_db.php"  method="post" enctype="multipart/form-data" name="Add_Product" id="Add_Product" >


  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="3" align="center">&nbsp;</td>
    </tr>
    <tr>
      <td width="129" align="right" valign="middle">ธนาคาร :</td>
      <td width="471" colspan="2"><label for="b_type"></label>
        <input name="b_name" type="text" required id="pro_name2" size="60"/></td>
    </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" valign="middle">เลขบัญชี :</td>
      <td colspan="2"><input name="b_number"id="input-num" required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                      type="tel"
                      maxlength = "10" onkeyup="num();" size="60"/></td>
    </tr>
    <tr>
      <td align="right" valign="top">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" valign="middle">ประเภท :</td>
      <td colspan="2"><input name="b_type" type="text" required id="pro_name3" size="40"/></td>
    </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" valign="middle">สาขา :</td>
      <td colspan="2"><input name="bn_name" type="text" required id="pro_name4" size="60"/></td>
    </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" valign="middle">ชื่อบัญชี :</td>
      <td colspan="2"><input name="b_owner" type="text" required id="pro_name5" size="60"/></td>
    </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>

    <tr>
      <td align="right" valign="middle">ตราธนาคาร : </td>
      <td colspan="2"><label for="b_logo"></label>
        <input type="file" name="b_logo" id="b_logo" required></td>
    </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">
      <button type="submit" name="button" id="button" value="ตกลง" class="btn btn-primary">เพิ่มข้อมูล</button></td>
    </tr>
  </table>
</form>
            </div>
      </div>
    </div>
 </div>
  </body>
</html>

<?php include('f.php');?>

<script type="text/javascript">

  function validate() {
  var element = document.getElementById('input-field');
  element.value = element.value.replace(/[^a-zA-Zก-๙ @]+/, '');
};

function num() {
  var element = document.getElementById('input-num');
  element.value = element.value.replace(/[^0-9]+/, '');
};
</script>
