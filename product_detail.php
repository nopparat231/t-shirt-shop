<style type="text/css">
    button {
        border: 1px solid #722A1B;
        padding: 15px 30px;
        background-color: #fff;
        color: #722A1B;
        text-transform: uppercase;
        float: center;
        margin: 5px 0;
        font-weight: bold;
        cursor: pointer;
    }

</style>
<?php 

if (isset($_GET['product'])) {


 $p_id = $_GET['product'];

 mysql_select_db($database_condb);
 $query_prd = "SELECT * FROM tbl_product WHERE p_id = '$p_id' ";
 $prd = mysql_query($query_prd,$condb) or die(mysql_error());
 $row_prd = mysql_fetch_assoc($prd);
 $totalRows_prd = mysql_num_rows($prd);
 ?>

 <!-- Start Product Details -->
 <form class="product-form">

     <section class="htc__product__details pt--120 pb--100 bg__white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6 col-sm-12">
                    <div class="product__details__container">
                        <!-- Start Small images -->
                        <ul class="nav product__small__images" role="tablist">
                            <li role="presentation" class="pot-small-img active">
                                <a href="pimg/<?php echo $row_prd['p_img1'];?>" target="_blank">
                                    <img src="pimg/<?php echo $row_prd['p_img1'];?>" alt="small-image" style="height: 131px;width: 100px" >
                                </a>
                            </li>

                            <?php if ($row_prd['p_img2'] <> ""): ?>
                                <li role="presentation" class="pot-small-img">
                                    <a href="pimg/<?php echo $row_prd['p_img2'];?>" target="_blank" >
                                        <img src="pimg/<?php echo $row_prd['p_img2'];?>" alt="small-image" style="height: 131px;width: 100px">
                                    </a>
                                </li>
                            <?php endif ?>

                            <?php if ($row_prd['p_img3'] <> ""): ?>
                               <li role="presentation" class="pot-small-img hidden-xs">
                                <a href="pimg/<?php echo $row_prd['p_img3'];?>" target="_blank">
                                    <img src="pimg/<?php echo $row_prd['p_img3'];?>" alt="small-image" style="height: 131px;width: 100px">
                                </a>
                            </li>
                        <?php endif ?>



                    </ul>
                    <!-- End Small images -->
                    <div class="product__big__images">
                        <div class="portfolio-full-image tab-content">
                            <div role="tabpanel" class="tab-pane active" id="img-tab-1">
                                <img src="pimg/<?php echo $row_prd['p_img1'];?>" alt="full-image">
                            </div>
                            <div role="tabpanel" class="tab-pane" id="img-tab-2">
                                <img src="pimg/<?php echo $row_prd['p_img1'];?>" alt="full-image">
                            </div>
                            <div role="tabpanel" class="tab-pane" id="img-tab-3">
                                <img src="pimg/<?php echo $row_prd['p_img1'];?>" alt="full-image">
                            </div>
                            <div role="tabpanel" class="tab-pane" id="img-tab-4">
                                <img src="pimg/<?php echo $row_prd['p_img1'];?>" alt="full-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 col-sm-12 smt-30 xmt-30">
                <div class="htc__product__details__inner">
                    <div class="pro__detl__title">
                        <h2><?php echo $row_prd['p_name']; ?></h2>
                    </div>

                    <div class="pro__details">
                        <p><?php echo $row_prd['p_detial']; ?></p>
                    </div>
                    <ul class="pro__dtl__prize">
                        <!-- <li class="old__prize">$15.21</li> -->
                        <li><?php echo $row_prd['p_price']; ?></li>
                    </ul>

                    <form id='myform' method='POST' action='#'>
                        <div class="pro__dtl__size">
                            <h2 class="title__5">ไซส์</h2>
                            <ul class="pro__choose__size">

                                <li>
                                    <input type="radio" name="size" value="p_size_s" required >&nbsp;S<br>
                                </li>
                                <li>
                                    <input type="radio" name="size" value="p_size_m">&nbsp;M<br>
                                </li>
                                <li>
                                    <input type="radio" name="size" value="p_size_l">&nbsp;L<br>
                                </li>
                                <li>
                                    <input type="radio" name="size" value="p_size_xl">&nbsp;XL<br>
                                </li>
                                <li>
                                    <input type="radio" name="size"  value="p_size_xxl">&nbsp;XL
                                </li>
                            </ul>
                        </div>
                        <div class="product-action-wrap">
                            <div class="prodict-statas"><span>Quantity :</span></div>
                            <div class="product-quantity">

                                <div class="product-quantity">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="product_qty" value="1">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                    <ul class="pro__dtl__btn">
                        <li class="buy__now__btn">
                            <button type="submit" class="shoping-cart"  title="Add TO Cart"  >
                                <span class="ti-shopping-cart" ></span>
                            </button>
                        </li>

                    </ul>

                    <input type="hidden" name="p_id" value="<?php echo $row_prd['p_id'];?>" />

                </div>
            </div>
        </div>
    </div>
</section>

</form>
<?php } ?>
        <!-- End Product Details -->