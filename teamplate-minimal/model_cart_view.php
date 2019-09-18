    <!-- Start Offset Wrapper -->
    <div class="offset__wrapper">
        <!-- Start Search Popap -->
        <div class="search__area">
            <div class="container" >
                <div class="row" >
                    <div class="col-md-12" >
                        <div class="search__inner">
                            <form action="#" method="get">
                                <input placeholder="Search here... " type="text">
                                <button type="submit"></button>
                            </form>
                            <div class="search__close__btn">
                                <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Popap -->

        <!-- Start Cart Panel -->
        <div class="shopping__cart">
            <div class="shopping__cart__inner">
                <div class="offsetmenu__close__btn">
                    <a href="#"><i class="zmdi zmdi-close"></i></a>
                </div>
                <div class="shp__cart__wrap">


                    <?php 

                    foreach($_SESSION["products"] as $product)
                    {
                        $p_id = $product["p_id"];
                        $product_qty = $product["product_qty"];
                        $product_price = $product["p_price"];
                        $p_name = $product["p_name"];

                        // mysql_select_db($database_condb);
                        // $sql = "SELECT * FROM tbl_product WHERE p_id = '$p_id' ";
                        // $query = mysql_query($sql, $condb );
                        // $row = mysql_fetch_array($query);

                        ?>

                        <div class="shp__single__product">
                            <div class="shp__pro__thumb">
                                <a href="#">
                                    <img src="pimg/<?php //echo $row['p_img1'];?>" alt="product images">
                                </a>
                            </div>
                            <div class="shp__pro__details">
                                <h2><a href="product-details.html"><?php echo $p_name; ?></a></h2>
                                <span class="quantity">QTY: <?php echo $product_qty; ?></span>
                                <span class="shp__price"><?php echo $product_price; ?></span>
                            </div>
                            <div class="remove__btn" id="shopping-cart-results">
                                <a href="#" title="Remove this item" class="remove-item" data-code="<?php echo $p_id; ?>"><i class="zmdi zmdi-close"></i></a>
                            </div>
                        </div>

                    <?php } ?>

                </div>
                <ul class="shoping__total">
                    <li class="subtotal">Subtotal:</li>
                    <li class="total__price">$130.00</li>
                </ul>
                <ul class="shopping__btn">
                    <li><a href="index.php?cart">View Cart</a></li>
                    <li class="shp__checkout"><a href="checkout.html">Checkout</a></li>
                </ul>
            </div>
        </div>
        <!-- End Cart Panel -->
    </div>
    <!-- End Offset Wrapper -->