        <section class="htc__product__area ptb--130 bg__white">
            <div class="container">
                <div class="htc__product__container">
                    <!-- Start Product MEnu -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="product__menu">

                                <?php
                                //print_r($_SESSION["products"]);
                                mysql_select_db($database_condb);
                                $query_type = "SELECT * FROM tbl_type";
                                $type = mysql_query($query_type, $condb) or die(mysql_error());
                                $row_type = mysql_fetch_assoc($type);
                                $totalRows_type = mysql_num_rows($type);

                                ?>
                                <?php if ($totalRows_type > 0) {?>

                                   <button data-filter="*"  class="is-checked">ทั้งหมด</button>

                                   <?php do { ?>


                                    <button id="btn1" data-filter=".cat--<?php echo $row_type['t_id'];?>"><?php echo $row_type['t_name']; ?></button>


                                <?php } while ($row_type = mysql_fetch_assoc($type)); ?>
                            <?php }
                            mysql_free_result($type);
                            ?>

                        </div>
                    </div>
                </div>
                <!-- End Product MEnu -->
                <!-- ShowProduct -->
                <div class="row product__list">

                    <?php 


                    mysql_select_db($database_condb);
                    $query_prd = "SELECT * FROM tbl_product ORDER BY p_id DESC ";
                    $prd = mysql_query($query_prd,$condb) or die(mysql_error());
                    $row_prd = mysql_fetch_assoc($prd);
                    $totalRows_prd = mysql_num_rows($prd);
                    ?>
                    <?php if ($totalRows_prd > 0) {?>

                        <?php do { ?>

                            <!-- Start Single Product -->
                            <form class="product-form">
                                <div class="col-md-3 single__pro col-lg-3 col-md-4 cat--<?php echo $row_prd['t_id'];?> col-sm-12">
                                    <div class="product foo" >
                                        <div class="product__inner" >
                                            <div class="pro__thumb"  >
                                                <a href="#">
                                                    <img src="pimg/<?php echo $row_prd['p_img1'];?>" alt="product images" style="height: 300px">
                                                </a>
                                            </div>

                                            <div class="product__hover__info">
                                                <ul class="product__action">
                                                    <li>
                                                        <a data-toggle="modal" data-target="#productModal" title="Quick View" class="btn btn-info quick-view modal-view detail-link" href="#">
                                                            <span class="ti-plus"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <button type="submit" class="btn btn-info" title="Add TO Cart"  >
                                                            <span class="ti-shopping-cart" ></span>
                                                        </button>
                                                       <!--  <a title="Add TO Cart" href=""><span class="ti-shopping-cart"></span>
                                                       </a> -->
                                                   </li>
                                               </ul>
                                           </div>
                                           <input type="hidden" name="p_id" value="<?php echo $row_prd['p_id'];?>" />
                                           <input type="hidden" name="product_qty" value="1" />

                                       </div>
                                       <div class="product__details">
                                        <h2><a href="product-details.html"><?php echo $row_prd['p_name']; ?></a></h2>
                                        <ul class="product__price">
                                            <!-- <li class="old__price">$16.00</li> -->
                                            <li class="new__price">
                                                <?php echo $row_prd['p_price']; ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- End Single Product -->

                    <?php } while ($row_prd = mysql_fetch_assoc($prd)); ?>
                <?php }
                mysql_free_result($prd);
                ?>

            </div>

        </div>
    </div>
</section>
