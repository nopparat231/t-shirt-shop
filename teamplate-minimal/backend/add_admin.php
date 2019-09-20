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
<body>

    <?php //include('menu.php');?>
  <div class="container">

    <div class="row">

      <div class="col-md-3">

</div>
    <div class="col-md-9">
        <h3 align="center">  เพิ่ม  ผู้ดูแลระบบ </h3>
<div class="table-responsive">
        <form  name="register" action="add_admin_db.php" method="POST" id="register" class="form-horizontal">
         <div class="form-group">
           <div class="col-sm-2">  </div>
           <div class="col-sm-5" align="left">
             <font color="red"> *กรุณากรอกข้อมูลให้ครบทุกช่อง </font>
           </div>
         </div>
         <div class="form-group">
          <div class="col-sm-2" align="right"> ชื่อผู้ใช้ : </div>
          <div class="col-sm-5" align="left">
            <input  name="admin_user" type="text" required class="form-control" id="admin_user" placeholder="ชื่อผู้ใช้" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-2" align="right"> รหัสผ่าน : </div>
          <div class="col-sm-5" align="left">
            <input  name="admin_pass" type="password" required class="form-control" id="admin_pass" placeholder="รหัสผ่าน" pattern="^[a-zA-Z0-9]+$" minlength="2" />
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-2" align="right"> ชื่อ-สกุล : </div>
          <div class="col-sm-5" align="left">
            <input  name="admin_name" type="text" required class="form-control" onkeyup="validate();" id="input-field" placeholder="ชื่อ-สกุล" />
          </div>
        </div>

         <div class="form-group">
        <div class="col-sm-2" align="right"> ที่อยู่ : </div>
        <div class="col-sm-5" align="left">
          <textarea name="admin_address" type="textarea" required class="form-control" id="admin_address" placeholder="ที่อยู่" ></textarea>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-2" align="right"> เบอร์โทร : </div>
        <div class="col-sm-5" align="left">
          <input  name="admin_tel" type="text" required class="form-control"  id="input-num" placeholder="0912345678" pattern="[0-9]{10}" minlength="2" title="เบอร์โทร 0-9"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
          type="tel"
          maxlength = "10" onkeyup="num();"/>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-2" align="right"> อีเมล : </div>
        <div class="col-sm-5" align="left">
          <input  name="admin_email" type="E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required class="form-control" id="admin_email" placeholder="อีเมล" title="กรุณากรอก Email ให้ถูกต้อง" minlength="2"/>
        </div>
      </div>

        <div class="form-group">
          <div class="col-sm-2" align="right"> เลือกสถานะ : </div>
          <div class="col-sm-7" align="left">

           <select name="status">
              <?php if (isset($_GET['admin'])): ?>
                 <option value="admin">ผู้ดูแลระบบ</option>
              <?php endif ?>
                <?php if (isset($_GET['staff'])): ?>
             <option value="staff">พนักงาน</option>
             <?php endif ?>
             <?php if (isset($_GET['superadmin'])): ?>
             <option value="superadmin">ผู้บริหาร</option>
             <?php endif ?>

          </select>
         </div>
       </div>



         <div class="form-group">
          <div class="col-sm-2"> </div>
          <div class="col-sm-6">
            <button type="submit" class="btn btn-primary" id="btn"> บันทึก  </button>
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
