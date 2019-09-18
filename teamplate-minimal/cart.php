
<!-- cart-main-area start -->
<div class="cart-main-area ptb--120 bg__white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <form action="#">               
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="product-thumbnail">Image</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php 
                                //print_r($_SESSION["products"]);
                                $total = 0;
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

                                    <tr>
                                        <td class="product-thumbnail"><a href="#">
                                            <img src="pimg/<?php echo $row['p_img1'];?>" alt="product img" /></a></td>
                                            <td class="product-name"><a href="#"><?php echo $row['p_name']; ?></a></td>
                                            <td class="product-price"><span class="amount"><?php echo $product_price; ?></span></td>
                                            <td class="product-quantity">
                                                <input type="number" value="<?php echo $product_qty; ?>" class="text-center quantity" data-code="<?php echo $p_id; ?>" value="<?php echo $product_qty; ?>" /></td>
                                            <td class="product-subtotal"><?php echo $subtotal; ?></td>
                                            <td class="product-remove">
                                                <div id="shopping-cart-results">
                                                    <a href="#" class="remove-item" data-code="<?php echo $row['p_id']; ?>">X</a>
                                                </div>
                                            </td>
                                        </tr>

                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <div class="buttons-cart">
                                    <input type="submit" value="Update Cart" />
                                    <a href="#">Continue Shopping</a>
                                </div>

                            </div>
                            <div class="col-md-4 col-sm-12 ">
                                <div class="cart_totals">
                                    <h2>Cart Totals</h2>
                                    <table>
                                        <tbody>
                                            <tr class="cart-subtotal">
                                                <th>Subtotal</th>
                                                <td><span class="amount"><?php echo $total; ?></span></td>
                                            </tr>
                                            <tr class="shipping">
                                                <th>Shipping</th>
                                                <td>
                                                    <ul id="shipping_method">
                                                        <li>
                                                            <input type="radio" /> 
                                                            <label>
                                                                Flat Rate: <span class="amount">£7.00</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" /> 
                                                            <label>
                                                                Free Shipping
                                                            </label>
                                                        </li>
                                                        <li></li>
                                                    </ul>
                                                    <p><a class="shipping-calculator-button" href="#">Calculate Shipping</a></p>
                                                </td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Total</th>
                                                <td>
                                                    <strong>
                                                        <span class="amount"><?php echo $total; ?></span>
                                                    </strong>
                                                </td>
                                            </tr>                                           
                                        </tbody>
                                    </table>
                                    <div class="wc-proceed-to-checkout">
                                        <a href="checkout.html">Proceed to Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
        <!-- cart-main-area end -->