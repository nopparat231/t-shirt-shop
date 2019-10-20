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
   /* .radio {
      position: relative;
      cursor: pointer;
      line-height: 20px;
      font-size: 14px;
      margin: 15px;
  }
  .radio .label {
      position: relative;
      display: block;
      float: left;
      margin-right: 10px;
      width: 20px;
      height: 20px;
      border: 2px solid #c8ccd4;
      border-radius: 100%;
      -webkit-tap-highlight-color: transparent;
  }
  .radio .label:after {
      content: '';
      position: absolute;
      top: 3px;
      left: 3px;
      width: 10px;
      height: 10px;
      border-radius: 100%;
      background: #225cff;
      transform: scale(0);
      transition: all 0.2s ease;
      opacity: 0.08;
      pointer-events: none;
  }
  .radio:hover .label:after {
      transform: scale(3.6);
  }
  input[type="radio"]:checked + .label {
      border-color: #225cff;
  }
  input[type="radio"]:checked + .label:after {
      transform: scale(1);
      transition: all 0.2s cubic-bezier(0.35, 0.9, 0.4, 0.9);
      opacity: 1;
  }

  .hidden {
      display: contents;
  }
  .credit {
      position: fixed;
      right: 20px;
      bottom: 20px;
      transition: all 0.2s ease;
      -webkit-user-select: none;
      user-select: none;
      opacity: 0.6;
  }
  .credit img {
      width: 72px;
  }
  .credit:hover {
      transform: scale(0.95);
  }
  */
</style>
<?php 

if (isset($_GET['product'])) {


   $t_id = $_GET['product'];

   mysql_select_db($database_condb);
   $query_prd = "SELECT * FROM tbl_product WHERE t_id = '$t_id' ";
   $prd = mysql_query($query_prd,$condb) or die(mysql_error());
   $row_prd = mysql_fetch_assoc($prd);
   $totalRows_prd = mysql_num_rows($prd);
   ?>

   <?php
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


                    <form id='myform' name="myform" method='POST' action='#'>
                        <div class="pro__dtl__size">
                            <h2 class="title__5">ไซส์</h2>


                            <?php  do{  ?> 

                               <label for="opt1" class="radio">
                                <input type="radio" name="size" value="<?php echo $row_prd['p_size']; ?>" required id="<?php echo $row_prd['p_size']; ?>" class="hidden"/>
                                <span class="label"></span><?php echo $row_prd['p_size']; ?>&nbsp;&nbsp;
                            </label>
                            
                            <label for="opt1" class="radio">
                                <input type="radio" name="p_id" value="<?php echo $row_prd['p_id']; ?>" id="<?php echo $row_prd['p_id']; ?>" class="hidden"/>
                                <span class="label"></span><?php echo $row_prd['p_id']; ?>&nbsp;&nbsp;
                            </label>

                            <script>
                                document.myform.onclick = function(){

                                    if(document.getElementById("<?php echo $row_prd['p_size']; ?>").checked){
                                        document.getElementById("<?php echo $row_prd['p_id']; ?>").checked = true;
                                    }
                                }
                                </script>

                                <?php  } while ($row_prd = mysql_fetch_assoc($prd)); ?><br>

 <!--                            <label for="opt2" class="radio">
                                <input type="radio" name="size" value="p_size_m" id="opt2" class="hidden"/>
                                <span class="label"></span>M&nbsp;&nbsp;
                            </label>



                            <label for="opt3" class="radio">
                                <input type="radio" name="size" value="p_size_l" id="opt3" class="hidden"/>
                                <span class="label"></span>L&nbsp;&nbsp;
                            </label>



                            <label for="opt4" class="radio">
                                <input type="radio" name="size" value="p_size_xl" id="opt4" class="hidden"/>
                                <span class="label"></span>XL&nbsp;&nbsp;
                            </label>



                            <label for="opt5" class="radio">
                                <input type="radio" name="size" value="p_size_xxl" id="opt5" class="hidden"/>
                                <span class="label"></span>XXL&nbsp;&nbsp;
                            </label>
                        -->


                    </div>
                    <div class="product-action-wrap">
                        <div class="prodict-statas"><span>Quantity :</span></div>
                        <div class="product-quantity">

                            <div class="product-quantity">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" min='1' max='5' name="product_qty" value="1">
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



            </div>
        </div>
    </div>
</div>
</section>

</form>
<?php 

} ?>
        <!-- End Product Details -->