
<?php 
if (isset($_GET['order_id'])) {
  $order_id = $_GET['order_id'];

  mysql_select_db($database_condb);
  $query_cartdone = "
  SELECT * FROM
  tbl_order as o,
  tbl_order_detail as d,
  tbl_product as p,
  tbl_member  as m
  WHERE o.order_id = '$order_id'
  AND o.order_id=d.order_id
  AND d.p_id=p.p_id
  AND o.mem_id = m.mem_id
  ORDER BY o.order_date ASC";
  $cartdone = mysql_query($query_cartdone, $condb) or die(mysql_error());
  $row_cartdone = mysql_fetch_assoc($cartdone);
  $totalRows_cartdone = mysql_num_rows($cartdone);

  ?>


  <form  name="formlogin" action="checkout_db.php" method="POST" class="form-horizontal">

     <section class="our-checkout-area ptb--120 bg__white">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="ckeckout-left-sidebar">
                        <!-- Start Checkbox Area -->
                        <div class="checkout-form">
                            <h2 class="section-title-3">ที่อยู่ในการจัดส่ง</h2>
                            <div class="checkout-form-inner">
                              <div class="review__box">
                                <div id="review-form">
                                    <div class="single-review-form">
                                        <div class="review-box name">

                                            <input type="hidden" name="text">
                                            <input type="hidden" name="mem_id" value="<?php echo $row_buyer['mem_id']; ?>">
                                            <input type="text" name="name" value="<?php echo $row_buyer['mem_name']; ?>" placeholder="ชื่อ- นามสกุล*" >
                                        </div>

                                        <div class="review-box name">
                                          <input type="email" name="email" value="<?php echo $row_buyer['mem_email']; ?>" placeholder="Emil*">
                                          <input type="text" name="phone" value="<?php echo $row_buyer['mem_tel'] ?>" placeholder="Phone*">

                                      </div>

                                  </div>
                                  <div class="single-review-form">
                                    <div class="review-box message">
                                        <textarea name="address" placeholder="Address*"><?php echo $row_buyer['mem_address']; ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="checkout-right-sidebar">
                <div class="our-important-note">
                    <h2 class="section-title-3">รายการสั่งซื้อ</h2>

                    <ul class="important-note">
                       <?php
                       do {
                          ?>

                          <div class="shp__single__product">
                            <div class="shp__pro__thumb">
                                <a href="#">
                                    <img src="pimg/<?php echo $row_cartdone['p_img1'];?>" alt="product images">
                                </a>
                            </div>
                            <div class="shp__pro__details">
                                <h2><a href="product-details.html">
                                    <?php echo $row_cartdone['p_name']; ?></a></h2>
                                    <span class="quantity">QTY: 
                                        <?php echo $row_cartdone['p_c_qty']; ?>
                                    </span>
                                    <input type="hidden" name="p_qty" value="<?php echo $product_qty; ?>">
                                    <span class="shp__price">
                                        <?php echo $row_cartdone['p_price']; ?>
                                    </span>
                                </div>
                                <div class="remove__btn" id="shopping-cart-results">

                                </div>
                            </div>

                        <?php } while ($row_cartdone = mysql_fetch_assoc($cartdone)); ?>

                        <ul class="shoping__total">
                            <li class="subtotal">Subtotal:</li>
                            <li class="total__price">
                                <strong style="font-size: 30px">
                                    <?php echo $row_cartdone['total']; ?> บาท</strong>
                                </li>
                                <input type="hidden" name="total" value="<?php echo $total; ?>">
                            </ul>
                            <ul class="shopping__btn">
                                <li><a href="index.php?cart">View Cart</a></li>
                                <li class="shp__checkout"> <button type="submit" class="btn btn-warning btn-lg" style="width: 100%" >ยืนยันการสั่งซื้อ</button></li>
                            </ul>

                        </ul>

                    </div>
                </div>

            </div>
        </div>
    </section>

</form>


<?php }else{ 
    $mem_id = $_SESSION['User_id'];
    $query_cartdone = "
    SELECT o.order_id as oid, o.mem_id, o.order_status, o.order_date, d.p_id , d.p_c_qty, d.order_id , count(d.order_id) as coid , SUM(d.total) as ctotal FROM tbl_order as o, tbl_order_detail as d WHERE o.mem_id = '$mem_id' AND o.order_id = d.order_id GROUP BY o.order_id ORDER BY o.order_id DESC";

    mysql_select_db($database_condb);
    $cartdone = mysql_query($query_cartdone, $condb) or die(mysql_error());
    $row_cartdone = mysql_fetch_assoc($cartdone);
    $totalRows_cartdone = mysql_num_rows($cartdone);


    ?>

    <section class="htc__store__area ptb--120 bg__white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title-3">รายการสั่งซื้อทั้งหมด</h2>

                    <table id="example" class="display" style="width:100%" >
                        <thead>
                            <tr align="center">
                                <th>ลำดับ</th>
                                <th>รหัสสั่งซื้อ</th>
                                <th>จำนวนรายการ</th>
                                <th>ราคารวม</th>
                                <th>สถานะ</th>
                                <th>วันที่ทำรายการ</th>
                                <th>รายละเอียด</th>
                                <th>ยกเลิก</th>
                            </tr>
                        </thead>
                        <tbody align="center">

                            <?php $i = 1; do { ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td>TS<?php echo str_pad($row_cartdone['order_id'], 6, "0", STR_PAD_LEFT);?></td>
                                    <td><?php echo $row_cartdone['coid']; ?></td>
                                    <td><?php echo $row_cartdone['ctotal']; ?></td>
                                    <td><?php $status = $row_cartdone['order_status']; ?>
                                    <?php include 'status.php'; ?>
                                </td>
                                <td><?php echo $row_cartdone['order_date']; ?></td>
                                <td>
                                    <span id="hp">
                                        <a href="index.php?my_order&order_id=<?php echo $row_cartdone['oid'];?>">
                                            ดูรายละเอียด
                                        </a>
                                    </span>
                                </td>
                                <td><center>
                                    <?php if ($status == 4): ?>
                                        <button class="btn btn-danger btn-sm" disabled>
                                        ยกเลิก </button></center>
                                        <?php else: ?>
                                            <a href="del_order.php?order_id=<?php echo $row_mycart['oid'];?>&order_status=4&q=<?php echo $row_mycart['p_c_qty'];?>&p=<?php echo $row_mycart['p_id'];?>" class="btn btn-danger btn-sm" onClick="return confirm('ยืนยันการยกเลิกคำสั่งซื้อ');">
                                            ยกเลิก </a></center>
                                        <?php endif ?>

                                    </td>
                                </tr>

                                <?php $i++; } while ($row_cartdone = mysql_fetch_assoc($cartdone)); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#example').DataTable({
                    "language": {
                        "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Thai.json"
                    },
                    "bLengthChange" : false
                });
            } );
        </script>

        <?php } ?>