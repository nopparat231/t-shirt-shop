<!-- Start Login Register Area -->
<div class="htc__login__register bg__white ptb--130" style="background: rgba(0, 0, 0, 0) url(images/bg/1800x800.jpg) no-repeat scroll center center / cover ;">
  <div class="container">
    <div class="row">
      <div class="col-md-6 ml-auto mr-auto">
        <ul class="login__register__menu nav justify-contend-center" role="tablist">
          <li role="presentation" class="login active"><a class="active" href="#login" role="tab" data-toggle="tab">ลืมรหัสผ่าน</a></li>
        
        </ul>
      </div>
    </div>
    <!-- Start Login Register Content -->
    <div class="row tab-content">
      <div class="col-md-6  ml-auto mr-auto">
        <div class="htc__login__register__wrap">
          <!-- Start Single Content -->
          <div id="login" role="tabpanel" class="single__tabs__panel tab-pane active">

            <form class="login" method="post" action="forget_password_db.php">
              <input type="email" name="mem_email" placeholder="email*" required="required">

              <div class="htc__login__btn mt--30">
                <button type="submit" class="btn btn-warning btn-lg">รีเซ็ตรหัสผ่าน</button>
              </div>
            </form>

          </div>
          <!-- End Single Content -->

        </div>
      </div>
    </div>
    <!-- End Login Register Content -->
  </div>
</div>
        <!-- End Login Register Area -->