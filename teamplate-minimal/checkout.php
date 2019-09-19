
<?php 

if($_SESSION['MM_Username']!=''){

    $mem_user = $_SESSION['MM_Username'];

    mysql_select_db($database_condb);
    $query_buyer = "SELECT * FROM tbl_member WHERE mem_username = '$mem_user' ";
    $buyer = mysql_query($query_buyer, $condb) or die(mysql_error());
    $row_buyer = mysql_fetch_assoc($buyer);
    $totalRows_buyer = mysql_num_rows($buyer);
    ?>
    <!-- Start Checkout Area -->

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

                       foreach($_SESSION["products"] as $product)
                       {
                           $p_id = $product["p_id"];
                           $product_qty = $product["product_qty"];
                           $product_price = $product["p_price"];

                           mysql_select_db($database_condb);
                           $sql = "SELECT * FROM tbl_product WHERE p_id = '$p_id' ";
                           $query = mysql_query($sql, $condb );
                           $row = mysql_fetch_array($query);

                           $subtotal = ($product_price * $product_qty);
                           $total = ($total + $subtotal);

                           ?>

                           <div class="shp__single__product">
                            <div class="shp__pro__thumb">
                                <a href="#">
                                    <img src="pimg/<?php echo $row['p_img1'];?>" alt="product images">
                                </a>
                            </div>
                            <div class="shp__pro__details">
                                <h2><a href="product-details.html">
                                    <?php echo $row['p_name']; ?></a></h2>
                                    <span class="quantity">QTY: 
                                        <?php echo $product_qty; ?>
                                    </span>
                                    <input type="hidden" name="p_qty" value="<?php echo $product_qty; ?>">
                                    <span class="shp__price">
                                        <?php echo $product_price; ?>
                                    </span>
                                </div>
                                <div class="remove__btn" id="shopping-cart-results">

                                </div>
                            </div>

                        <?php } ?>
                        <ul class="shoping__total">
                            <li class="subtotal">Subtotal:</li>
                            <li class="total__price">
                                <strong style="font-size: 30px">
                                    <?php echo $total; ?> บาท</strong>
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
<!-- End Checkout Area -->
<?php } else{
  include('logout3.php');
 }//seseion
 ?>