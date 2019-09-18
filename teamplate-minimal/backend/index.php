<?php include('access.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include('h.php');?>
  <?php include('datatable2.php');?>

  </head> <?php include('navbar.php'); ?>
  <body>
    <?php // include('menu.php');  ?>
    <div class="container">



     <div class="row">


         <?php include('m.php');?>


       <div class="col-md-12" >

        <?php

        $act = $_GET['act'];
        if ($row_mm['status'] == 'staff') {


          if ($act =='show-order') {
            include('detail_order_after_cartdone_new.php');
          }elseif ($act == 'show-payed'){
            include('show_cart_pay.php');
          }elseif ($act == 'show-post') {
            include('show_cart_post.php');
          }elseif ($act == 'show-cancel'){
            include('show_cancel_cart.php');
          }elseif ($act == 'show-check'){
            include('show_check_cart.php');
          }elseif ($act == 'show-new'){
            include('show_new_cart.php');
          }else{
            include 'show_all_order.php';

            include 'f.php';

          }

          ?>



        <?php }
        elseif ($row_mm['status'] == 'sale') {


          if ($act =='show-order') {
            include('detail_order_after_cartdone_new.php');
          }elseif ($act == 'show-payed'){
            include('show_cart_pay.php');
          }elseif ($act == 'show-post') {
            include('show_cart_post.php');
          }elseif ($act == 'show-cancel'){
            include('show_cancel_cart.php');
          }elseif ($act == 'show-check'){
            include('show_check_cart.php');
          }elseif ($act == 'show-new'){
            include('show_new_cart.php');
          }else{
            include 'show_all_order.php';

            include 'f.php';

          }

          ?>



        <?php }elseif ($row_mm['status'] == 'confirm') {


          if ($act =='show-order') {
            include('detail_order_after_cartdone_new.php');
          }elseif ($act == 'show-payed'){
            include('show_cart_pay.php');
          }elseif ($act == 'show-post') {
            include('show_cart_post.php');
          }elseif ($act == 'show-cancel'){
            include('show_cancel_cart.php');
          }elseif ($act == 'show-check'){
            include('show_check_cart.php');
          }elseif ($act == 'show-new'){
            include('show_new_cart.php');
          }else{
            include 'show_all_order.php';

            include 'f.php';

          }

          ?>



        <?php }elseif ($row_mm['status'] == 'superadmin'){
                      echo "<font size = 4>ยินดีต้อนรับ คุณ</font>";
                      echo "<font size = 4>";
                      echo $row_mm['admin_name'];
                      echo "</font>";
      } elseif ($row_mm['status'] == 'admin'){
                    echo "<font size = 4>ยินดีต้อนรับ คุณ</font>";
                    echo "<font size = 4>";
                    echo $row_mm['admin_name'];
                    echo "</font>";
      }

      elseif ($row_mm['status'] == 'add'){
                    echo "<font size = 4>ยินดีต้อนรับ คุณ</font>";
                    echo "<font size = 4>";
                    echo $row_mm['admin_name'];
                    echo "</font>";
      }
      else {
        echo "<font size = 4>คุณไม่ได้รับอนุญาติให้ใช้งานระบบ</font>";
      }
      ?>




      </div>
    </div>
  </div>
</body>
</html>
