<?php include('access.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include('h.php');?>
  <?php include('datatable.php');?>

  </head> <?php include('navbar.php'); ?>
  <body>
    <?php // include('menu.php');  ?>
    <div class="container">



     <div class="row">
       <div class="col-md-3">

        <span id="hp">
          <?php 
          include 'report_db.php';     
          ?>
        </span>

      </div>
      <div class="col-md-9" >
        <br />
        <p><h4> ยินดีต้อนรับ</h4></p>
        <?php 
        if ($row_mm['status'] == 'staff') 
       { ?>
        <a href="index.php?act=show-new" class="btn btn-danger" id="hp">รอชำระเงิน <span class="badge"><?php echo $totalRows_ptype1; ?></span></a>
        <a href="index.php?act=show-payed" class="btn btn-success" id="hp">ชำระเงินแล้ว <span class="badge"><?php echo $totalRows_ptype2; ?></span></a>
        <a href="index.php?act=show-post" class="btn btn-info" id="hp">ส่งของแล้ว <span class="badge"><?php echo $totalRows_ptype3; ?></span></a>
        <a href="index.php?act=show-cancel" class="btn btn-danger" id="hp">ยกเลิกคำสั่งซื้อ <span class="badge"><?php echo $totalRows_ptype4; ?></span></a>
      <?php }

      ?>


      <br />
      <br />
      <?php
      $act = $_GET['act'];
      if ($act =='show-order') {
        include('detail_order_after_cartdone.php');
      }elseif ($act == 'show-payed'){
        include('show_cart_pay.php');
      }elseif ($act == 'show-post') {
        include('show_cart_post.php');
      }elseif ($act == 'show-cancel'){
        include('show_cancel_cart.php');
      }elseif ($act == 'show-new'){
        include('show_new_cart.php');
      }
      




      ?>
    </div>
  </div>
</div>
</body>
</html>

