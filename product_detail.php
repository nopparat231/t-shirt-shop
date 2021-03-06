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
  .form-radio
  {
   -webkit-appearance: none;
   -moz-appearance: none;
   appearance: none;
   display: inline-block;
   position: relative;
   background-color: #f1f1f1;
   color: #666;
   top: 10px;
   height: 30px;
   width: 30px;
   border: 0;
   border-radius: 50px;
   cursor: pointer;     
   margin-right: 7px;
   outline: none;
 }
 .form-radio:checked::before
 {
   position: absolute;
   font: 13px/1 'Open Sans', sans-serif;
   left: 11px;
   top: 7px;
   content: '\02143';
   transform: rotate(40deg);
 }
 .form-radio:hover
 {
   background-color: #f7f7f7;
 }
 .form-radio:checked
 {
   background-color: #f1f1f1;
 }
 label
 {
   font: 15px/1.7 'Open Sans', sans-serif;
   color: #333;
   -webkit-font-smoothing: antialiased;
   -moz-osx-font-smoothing: grayscale;
   cursor: pointer;
 } 
</style>
<?php 

if (isset($_GET['product_detail'])) {

$ts_id = $_GET['ts_id'];

 $t_id = $_GET['t_id'];
 $p_id = $_GET['p_id'];

 mysql_select_db($database_condb);
 $query_prd = "SELECT * FROM tbl_product WHERE p_qty > 0 AND t_id = '$t_id' AND ts_id = '$ts_id' ";
 $prd = mysql_query($query_prd,$condb) or die(mysql_error());
 $row_prd = mysql_fetch_assoc($prd);
 $totalRows_prd = mysql_num_rows($prd);

 $query_pid = "SELECT * FROM tbl_product WHERE p_id = '$p_id' AND p_qty > 0 ";
 $pid = mysql_query($query_pid,$condb) or die(mysql_error());
 $row_pid = mysql_fetch_assoc($pid);
 $totalRows_pid = mysql_num_rows($pid);


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

              <?php if ($row_pid['p_img2'] <> ""): ?>
                <li role="presentation" class="pot-small-img">
                  <a href="pimg/<?php echo $row_pid['p_img2'];?>" target="_blank" >
                    <img src="pimg/<?php echo $row_pid['p_img2'];?>" alt="small-image" style="height: 131px;width: 100px">
                  </a>
                </li>
              <?php endif ?>

              <?php if ($row_pid['p_img3'] <> ""): ?>
               <li role="presentation" class="pot-small-img hidden-xs">
                <a href="pimg/<?php echo $row_pid['p_img3'];?>" target="_blank">
                  <img src="pimg/<?php echo $row_pid['p_img3'];?>" alt="small-image" style="height: 131px;width: 100px">
                </a>
              </li>
            <?php endif ?>

              <?php if ($row_pid['p_img4'] <> ""): ?>
               <li role="presentation" class="pot-small-img hidden-xs">
                <a href="pimg/<?php echo $row_pid['p_img4'];?>" target="_blank">
                  <img src="pimg/<?php echo $row_pid['p_img4'];?>" alt="small-image" style="height: 131px;width: 100px">
                </a>
              </li>
            <?php endif ?>


          </ul>
          <!-- End Small images -->
          <div class="product__big__images">
            <div class="portfolio-full-image tab-content">
              <div role="tabpanel" class="tab-pane active" id="img-tab-1">
                <img src="pimg/<?php echo $row_pid['p_img1'];?>" alt="full-image">
              </div>
   
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12 col-lg-6 col-sm-12 smt-30 xmt-30">
        <div class="htc__product__details__inner">
          <div class="pro__detl__title">
            <h2><?php echo $row_pid['p_name']; ?></h2>
          </div>

          <div class="pro__details">
            <p><?php echo $row_pid['p_detial']; ?></p>
          </div>
          <ul class="pro__dtl__prize">
            <!-- <li class="old__prize">$15.21</li> -->
            <li><?php echo $row_pid['p_price']; ?></li>
          </ul>


          <form id='myform' name="myform" method='POST' action='#'>
            <div class="pro__dtl__size">
              <h2 class="title__5">ไซส์</h2>


              <?php  do{  ?> 

                <input type="radio" name="p_id" value="<?php echo $row_prd['p_id']; ?>" id="radio-one" class="form-radio" checked>
                <label for="radio-one"><?php echo $row_prd['p_size']; ?>&nbsp;&nbsp;</label>

              <?php  } while ($row_prd = mysql_fetch_assoc($prd)); ?>

                        </div>
                        <div class="product-action-wrap">
                          <div class="prodict-statas"><span>จำนวณ :</span></div>
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
                            เพิ่มสินค้า
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