
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
  $status = $row_cartdone['order_status'];

  $query_rb = "SELECT * FROM tbl_bank";
  $rb = mysql_query($query_rb, $condb) or die(mysql_error());
  $row_rb = mysql_fetch_assoc($rb);
  $totalRows_rb = mysql_num_rows($rb);

  ?>

  <!-- ถ้ายังไม่ชำระเงิน -->
  <?php if ($status == 1): ?>

    <form  action="add_payslip_db.php" method="post" enctype="multipart/form-data" name="formpay" class="form-horizontal">

     <section class="our-checkout-area ptb--120 bg__white">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-6">
            <div class="ckeckout-left-sidebar">
              <!-- Start Checkbox Area -->
              <div class="checkout-form">
                <h2 class="section-title-3">แจ้งชำระเงิน</h2>


                <style type="text/css">
                  td{
                    font-size: 16px;
                    padding: 3px;
                  }
                </style>
                <br>
                <table border="0" align="center" cellpadding="0" cellspacing="0">

                  <tr>
                    <td colspan="4">เลขที่ใบสั่งซื้อ</td>
                    <td colspan="5" align="left"><label for="pay_date"></label>
                      TS<?php echo str_pad($row_cartdone['order_id'], 6, "0", STR_PAD_LEFT);?>
                    </tr>
                    <tr>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>

                    <tr>
                      <td colspan="4">วันที่ชำระเงิน</td>
                      <td colspan="5" align="left"><label for="pay_date"></label>
                        <input type="date" name="pay_date" id="pay_date" value="<?php echo date('Y-m-d');?>"/></td>
                      </tr>
                      <tr>
                        <td >&nbsp;</td>
                        <td >&nbsp;</td>
                        <td >&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="4">เวลาชำระเงิน</td>
                        <td colspan="5" align="left"><label for="time_date"></label>
                          <input type="time" name="time_date" id="time_date" value="<?php echo date("H:i"); ?>"/></td>
                        </tr>
                        <tr>
                          <td >&nbsp;</td>
                          <td >&nbsp;</td>
                          <td >&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>

                        <tr>
                          <td colspan="4">จำนวนเงิน</td>
                          <td colspan="5" align="left"><label for="pay_amount"></label>
                            <input type="number" step="0.01" name="pay_amount" pattern="([0-9]{1,3}).([0-9]{1,3})" value="<?php echo $row_cartdone['total'] ?>" required="required" value="" /></td>
                          </tr>



                          <tr>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>

                          <tr>
                            <td colspan="4">หลักฐานการโอน </td>
                            <td colspan="5" align="left">
                              <input name="pay_slip" id="pay_slip" type="file"  required="required" accept="image/jpeg"/>

                            </td>
                          </tr>
                          <tr>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td >&nbsp;</td>
                            <td><input name="order_id" type="hidden" id="order_id" value="<?php echo $row_cartdone['order_id'];?>" /></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td colspan="4">
                              <strong>
                                <font color="red">*</font>โอนไปยังบัญชี<br><p>
                                </strong>
                              </td>
                            </tr>
                            <?php do { ?>
                              <tr>

                                <td colspan="5">
                                  <br>
                                  <label class="container-re">
                                   <input <?php if (!(strcmp($row_rb['b_name'],"b_bank"))) {echo "checked=\"checked\"";} ?> type="radio" name="bank"  value="<?php echo $row_rb['b_name'].'_'.$row_rb['b_number'];?>" required="required" />

                                   <img src="bimg/<?php echo $row_rb['b_logo']; ?>" width="50" />
                                   <span class="checkmark"></span>
                                 </label>
                               </td>

                               <td></td>
                               <td><?php echo $row_rb['b_name']; ?>&nbsp;&nbsp;&nbsp;</td>
                               <td> <?php echo $row_rb['b_number']; ?>&nbsp;&nbsp;&nbsp;</td>
                               <td><strong></strong><?php echo $row_rb['b_owner']; ?></td>
                             </tr>
                           <?php } while ($row_rb = mysql_fetch_assoc($rb)); ?>

                         </table>




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
                           $subtotal = ($row_cartdone['p_price'] * $row_cartdone['p_c_qty']);
                           $total = ($total + $subtotal);
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
                                <?php echo $total; ?> บาท
                              </strong>
                            </li>
                            <input type="hidden" name="total" value="<?php echo $total; ?>">
                          </ul>
                          <ul class="shopping__btn">
                            <li><a href="index.php?my_order">รายการสั่งซื้อทั้งหมด</a></li>
                            <li class="shp__checkout"> <button type="submit" class="btn btn-warning btn-lg" style="width: 100%" >ยืนยันการสั่งซื้อ</button></li>
                          </ul>

                        </ul>

                      </div>
                    </div>

                  </div>
                </div>
              </section>

            </form>

            <!-- ถ้าชำระเงินแล้ว -->
            <?php else: ?>



             <section class="our-checkout-area ptb--120 bg__white">
              <div class="container">
                <div class="row">
                  <div class="col-md-6 col-lg-6">
                    <div class="ckeckout-left-sidebar">
                      <!-- Start Checkbox Area -->
                      <div class="checkout-form">
                        <h2 class="section-title-3">ข้อมูลการชำระเงิน</h2>

                        <style type="text/css">
                          td{
                            font-size: 20px;
                            padding: 4px;
                          }
                        </style>
                        <br>
                        <table border="0" align="center" >

                         <tr>
                          <td >เลขที่ใบสั่งซื้อ : </td>
                          <td colspan="8" align="left"><label for="order_id"></label>
                            <?php echo "BK00000".$row_cartdone['order_id']; ?>
                            <input type="hidden" name="order_id" value="<?php echo $row_cartdone['order_id']; ?>">
                          </tr>

                          <tr>
                            <td >สถานะ : </td>
                            <td colspan="8" align="left"><label for="order_status"></label>
                              <input type="hidden" name="order_status" value="<?php echo $row_cartdone['order_status']; ?>">
                              <?php
                              $status =  $row_cartdone['order_status'];
                              include('status.php');
                              ?>

                            </td>
                          </tr>

                          <tr>
                            <td >โอนเงินไปยังบัญชี : </td>
                            <td colspan="8" align="left"><label for="b_name"></label>
                             <input type="hidden" name="b_name" value="<?php echo $row_cartdone['b_name']; ?>">
                             <?php echo $row_cartdone['b_name'];?>
                           </td>
                         </tr>

                         <tr>
                          <td >เลขที่บัญชี : </td>
                          <td colspan="8" align="left"><label for="b_number"></label>
                           <input type="hidden" name="b_number" value="<?php echo $row_cartdone['b_number']; ?>">
                           <?php echo $row_cartdone['b_number'];?>
                         </td>
                       </tr>
                     </tr>

                     <tr>
                      <td >จำนวนเงิน : </td>
                      <td colspan="8" align="left"><label for="pay_amount"></label>
                        <input type="hidden" name="pay_amount" value="<?php echo $row_cartdone['pay_amount']; ?>">
                        <?php echo  number_format($row_cartdone['pay_amount'],2);?> บาท
                      </td>
                    </tr>

                    <tr>
                      <td >วันที่ชำระเงิน : </td>
                      <td colspan="8" align="left"><label for="pay_date"></label>
                       <?php $old_startDate = date("d-m-Y",strtotime($row_cartdone['pay_date'])); ?>
                       <?php echo date($old_startDate);?>
                       <input type="hidden" name="pay_date" value="<?php echo $old_startDate; ?>">

                     </td>
                   </tr>

                   <tr>
                    <td >เวลาที่ชำระเงิน : </td>
                    <td colspan="8" align="left"><label for="time_date"></label>
                      <?php $old_startTime = date("H:i",strtotime($row_cartdone['time_date'])); ?>
                      <?php echo date($old_startTime);?>
                      <input type="hidden" name="pay_date" value="<?php echo $old_startDate; ?>">
                    </td>
                  </tr>

                  <?php if ($row_cartdone['postcode'] != '') { ?>
                    <tr>
                      <td>เลขที่ใบส่งของ : </td>
                      <td colspan="8" align="left"><label for="postcode"></label>

                        <b style="color: #4E70EB;">
                          <?php echo $row_cartdone['postcode'];?>
                        </b>

                      </td>
                    </tr>
                  <?php } ?>

                  <tr>
                    <td colspan="8" align="left" bgcolor="#FFFFFF">

                     <hr style="border-radius: 5px;border: 1px solid black;">

                     <center><b>หลักฐานการโอน</b><br><p><p>

                      <?php if ($row_cartdone['pay_slip'] != '') { ?>

                       <img src="pimg/<?php echo $row_cartdone['pay_slip'];?>"  width="300px"/>

                     <?php } ?>

                   </center>
                   <br>


                 </td>

               </tr>

               <tr>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>

            </table>




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
               $subtotal = ($row_cartdone['p_price'] * $row_cartdone['p_c_qty']);
               $total = ($total + $subtotal);
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
                    <?php echo $total; ?> บาท
                  </strong>
                </li>
                <input type="hidden" name="total" value="<?php echo $total; ?>">
              </ul>
              <ul class="shopping__btn">
                <li><a href="index.php?my_order">รายการสั่งซื้อทั้งหมด</a></li>

              </ul>

            </ul>

          </div>
        </div>

      </div>
    </div>
  </section>

<?php endif ?>


<?php }else{ 
  $mem_id = $_SESSION['User_id'];
  $query_cartdone = "
  SELECT o.order_id as oid, o.mem_id, o.order_status, o.order_date, d.p_id , d.p_c_qty, d.order_id , count(d.order_id) as coid , SUM(d.total) as ctotal FROM tbl_order as o, tbl_order_detail as d WHERE o.mem_id = '$mem_id' AND o.order_id = d.order_id GROUP BY o.order_id ORDER BY o.order_id DESC";

  mysql_select_db($database_condb);
  $cartdone = mysql_query($query_cartdone, $condb) or die(mysql_error());
  $row_cartdone = mysql_fetch_assoc($cartdone);
  $totalRows_cartdone = mysql_num_rows($cartdone);


  ?>
  <?php if ( $totalRows_cartdone > 0): ?>
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
                    <td><?php echo number_format($row_cartdone['ctotal']); ?></td>
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
                    <?php if ($status == 4 || $status == 3): ?>
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
      <?php else: ?>
       <section class="htc__store__area ptb--120 bg__white">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="section-title-3">ไม่มีคำสั่งซื้อ</h2>
            </div>
          </div>
        </div>
      </section>
    <?php endif ?>
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