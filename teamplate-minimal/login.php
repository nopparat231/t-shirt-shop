<!-- Start Login Register Area -->
<div class="htc__login__register bg__white ptb--130" style="background: rgba(0, 0, 0, 0) url(images/bg/1800x800.jpg) no-repeat scroll center center / cover ;">
  <div class="container">
    <div class="row">
      <div class="col-md-6 ml-auto mr-auto">
        <ul class="login__register__menu nav justify-contend-center" role="tablist">
          <li role="presentation" class="login active"><a class="active" href="#login" role="tab" data-toggle="tab">Login</a></li>
          <li role="presentation" class="register"><a href="#register" role="tab" data-toggle="tab">Register</a></li>
        </ul>
      </div>
    </div>
    <!-- Start Login Register Content -->
    <div class="row tab-content">
      <div class="col-md-6  ml-auto mr-auto">
        <div class="htc__login__register__wrap">
          <!-- Start Single Content -->
          <div id="login" role="tabpanel" class="single__tabs__panel tab-pane active">

            <form class="login" method="post" action="login_db.php">
              <input type="text" name="mem_username" placeholder="User Name*" required="required">
              <input type="password" name="mem_password" placeholder="Password*" required="required">
              <input type="hidden" name="login" value="login">

              <div class="tabs__checkbox">

                <span class="forget">
                  <a href="#">Forget Pasword?</a>
                </span>
              </div>
              <div class="htc__login__btn mt--30">
                <button type="submit" class="btn btn-warning btn-lg">Login</button>
              </div>
            </form>

          </div>
          <!-- End Single Content -->
          <!-- Start Single Content -->
          <div id="register" role="tabpanel" class="single__tabs__panel tab-pane">
            <form class="login" method="post" action="login_db.php">

              <input type="text" name="mem_username" placeholder="Username*" required="required">

              <input type="password" name="mem_password" placeholder="Password*" required="required">
              <input type="email" name="mem_email" placeholder="Email*" required="required">

              <input type="text" name="mem_name" placeholder="ชื่อ - นามสกุล*" required="required">

              <input type="number" name="mem_tel" placeholder="เบอร์โทร*" required="required">
              <div class="single-review-form">
                <div class="review-box message">
                  <textarea name="mem_address" placeholder="ที่อยู่*" required="required"></textarea>
                </div>
              </div>

              <input type="hidden" name="register" value="register">

              <br>
              <div class="htc__login__btn">
                <button type="submit" class="btn btn-warning btn-lg">register</button>
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