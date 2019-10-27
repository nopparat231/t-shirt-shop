<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<style type="text/css">

  #form1 table tr h3 {
   text-align: center;
 }
 
 @media print{
  #hp{
    display:none;
  }

  @charset "UTF-8";
</style>
<?php include 'detail_order_afer_cartdone_DB.php';


date_default_timezone_set('Asia/Bangkok');

?>


<br>
<br>
<div class="container">
  <div class="row" >



   <br>
   <br>
   <center>

     <form id="form1" name="form1" method="post" action="">
      <table border="0">
        <tr>

          <th width="25" scope="row" >&nbsp;</th>
          <th width="100" scope="row" >
            <img width="100%" src="https://scontent.fbkk4-1.fna.fbcdn.net/v/t1.15752-9/72839742_396255554655162_7405830469477990400_n.png?_nc_cat=111&_nc_eui2=AeEdX5cTf9jNd2gEptR_T7yDlZwadtO4rXO8qae72ZuKTyXuf99Ca6gppdJpGZ4oAftDdppTGUs5j4Mlga4rw-JyNNHDuCDYAryIuyr6P_gCZA&_nc_oc=AQkcnLFjjVeyInrhds_LdX54E7ngCQNFvFYddR0Iuvi3pXC-5B35H4-zkre_ZGPVLCo&_nc_ht=scontent.fbkk4-1.fna&oh=11bdb9f13ac1ece20e3a493c6dee60d2&oe=5DEF0605" />
          </th>

          <th width="553" nowrap="nowrap">
           <div style="text-align: right;">
            <?php 

            $status =  $row_cartdone['order_status'];  
            if ($status == 1) { ?>

             <a href="" class="btn btn-success" target="_blank" id="hp" onclick="window.print();">  <span class="glyphicon glyphicon-print"></span> พิมพ์ใบแจ้งหนี้ </a>


           <?php }else{ ?>
             <a href="" class="btn btn-success " target="_blank" id="hp" onclick="window.print();" >  <span class="glyphicon glyphicon-print"></span> พิมพ์ใบเสร็จ </a>


           <?php }  ?>
         </div>
         <div ><h3 style="text-align: left;"><strong>ร้าน Up2youscreen</strong></h3></div>
         <p> นิคมไฮเทค อ.บางประอิน จ.อยุธยา 13160 </p>
         <p> โทร. 062-6237888</p>
         <p>&nbsp;</p>
         <table width="416" border="0" cellpadding="0" cellspacing="0">
          <?php 

          if ($status == 1) { ?>
           <tr>
            <th width="406" align="center" scope="row"><h2 align="left"><strong>ใบแจ้งหนี้</strong></h2>
              <h2 align="left">INVOICE</h2></th>
            </tr>



          <?php }else{ ?>
           <tr>
            <th width="406" align="center" scope="row"><h2 align="left"><strong>ใบเสร็จ</strong></h2>
              <h2 align="left">INVOICE</h2></th>
            </tr>



          <?php }  ?>

        </table>
        <h4>&nbsp;</h4></th>
      </tr>
      <tr>
        <th scope="row">&nbsp;</th>
        <th height="195" scope="row">
          <table width="489" border="0" style="text-align: left;">
            <tr>
              <th width="100" style="text-align: left;" scope="row"><p>&nbsp; &nbsp; ชื่อสมาชิก</p></th>
              <td width="100" align="left" valign="bottom"><p><?php echo $row_cartdone['mem_fname']."&nbsp; &nbsp;".$row_cartdone['mem_lname'];?></p></td>
            </tr>
            <tr>
              <th style="text-align: left;" scope="row"><p>&nbsp; &nbsp; ที่อยู่</p></th>
              <td style="text-align: left;" valign="bottom">
                <p>
                  <?php echo $row_cartdone['mem_address'];?>
                </p>
              </td>
            </tr>

          </table>        <h3>&nbsp;</h3></th>
          <td>
            <table width="224" border="0" align="right">
              <tr>
                <th scope="row">เลขที่</th>
                <td>TS<?php echo  str_pad($row_cartdone['order_id'], 6, "0", STR_PAD_LEFT);?></td>
              </tr>
              <tr>
                <th scope="row">วันที่</th>
                <td><?php echo date($row_cartdone['order_date']);?></td>

              </tr>
            </table>
          </td>
        </tr>
      </table>
      <table width="2" height="204" border="1" cellpadding="0" cellspacing="0">
        <col width="36" />
        <col width="23" />
        <col width="28" />
        <col width="123" />
        <col width="94" />
        <col width="68" />
        <col width="10" />
        <col width="8" />
        <col width="22" />
        <col width="59" />
        <col width="57" />
        <col width="22" />
        <col width="54" />
        <col width="9" />
        <col width="45" />
        <col width="13" />
        <col width="8" />
        <col width="13" />
        <col width="63" />
        <col width="41" />
        <col width="127" />
        <col width="20" />
      </table>
      <table width="1081" border="1" cellpadding="0" cellspacing="0">
        <tr align="center" class="bg-danger">
          <td width="103" nowrap="nowrap" scope="row"><B>ลำดับ</td>
            <td width="156" nowrap="nowrap"><B>รหัสสินค้า</td>
              <td width="295" nowrap="nowrap"><B>รายละเอียด</td>
                <td width="47" nowrap="nowrap"><B>ไซส์</td>
                  <td width="80" nowrap="nowrap"><B>จำนวน</td>
                    <td width="88" nowrap="nowrap"><B>หน่วย</td>
                      <td width="124" nowrap="nowrap"><B>ราคา/หน่วย</td>
                        <td width="170" nowrap="nowrap"><B>จำนวนเงิน</td>
                        </tr>


                        <?php
                        $i = 1;


                        do { ?>

                          <?php
                          $t_id = $row_cartdone['t_id'];
                          include 't_id.php';
                          $sum  = $row_cartdone['p_price']*$row_cartdone['p_c_qty'];
                          $totalp  += $sum;
                          $total  += $sum;
                        // $ems = $row_cartdone['p_ems'] * $row_cartdone['p_c_qty'];
                        // $total += $ems;
                          $sumems = $row_cartdone['pos_ems'];
                          ?>

                          <tr>
                            <td align="center" scope="row"><?php echo $i; ?></td>
                            <td align="center"><?php echo $row_typeprd['t_type'];?><?php echo str_pad($row_cartdone['p_id'], 6, "0", STR_PAD_LEFT);?></td>
                            <td align="center"><?php echo $row_cartdone['p_name'];?></td>
                            <td align="center"><?php echo $row_cartdone['p_size'];?></td>
                            <td align="center"><?php echo $row_cartdone['p_c_qty'];?></td>
                            <td align="center"><?php echo $row_cartdone['p_unit'];?></td>
                            <td align="center"><?php echo number_format($row_cartdone['p_price'],2);?></td>
                            <td align="right"><?php echo number_format($sum,2);?></td>
                          </tr>


                          <?php
                          $i += 1;
                        } while ($row_cartdone = mysql_fetch_assoc($cartdone));

                        ?>



                        <tr>
                          <th align="center" scope="row">&nbsp;</th>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                        </tr>
                        <tr>
                          <th align="center" scope="row">&nbsp;</th>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                        </tr>
                        <tr>
                          <th align="center" scope="row">&nbsp;</th>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                        </tr>
                        <tr>
                          <th align="center" scope="row">&nbsp;</th>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                        </tr>
                        <tr>
                          <th align="center" scope="row">&nbsp;</th>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                        </tr>
                        <tr>
                          <th align="center" scope="row">&nbsp;</th>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                        </tr>
                        <tr>
                          <th align="center" scope="row">&nbsp;</th>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                        </tr>
                        <tr>
                          <th align="center" scope="row">&nbsp;</th>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                        </tr>
                      </table>
                      <?php include 'detail_order_afer_cartdone_DB.php';
                      include 'number_to_thai.php';

                      ?>
                      <?php
                    // $tax = $total*0.07;
                    // $total += $tax;

                      ?>
                      <?php $total = $row_cartdone['total'];?>
                      <table width="1081" border="1" cellpadding="0" cellspacing="0">
                        <tr>
                          <th width="70%" align="left" scope="row">&nbsp;ตัวอักษร : (<?php echo convert($total); ?>)</th>
                          <td width="20%"> &nbsp;<B>รวมเงิน<br />
                            &nbsp;<B>TOTAL</td>

                              <td width="10%" align="right"><?php echo number_format($total,2);?></td>
                            </tr>

                            <tr>
                              <?php if ($row_cartdone['b_name'] <> ''){
                                $checked ='checked';
                              }else{}?>
                              <th align="left" valign="bottom" scope="row"> &nbsp; &nbsp;</th>
                              <td>&nbsp;<B>ค่าจัดส่ง<br />
                                &nbsp;<B>SHIPPING CHARGE</td>
                                  <td align="right">&nbsp; <?php echo number_format($sumems,2); ?></td>
                                </tr>

                                <tr> <th align="left" valign="bottom" scope="row"> </th>

                                  <td>&nbsp;<B>ภาษีมูลค่าเพิ่ม<br />
                                    &nbsp;<B>VAT 7%</td>
                                      <td align="right"><?php echo number_format($tax,2);?></td>
                                    </tr>
                                    <tr>
                                      <th align="left" scope="row">&nbsp;</th>
                                      <td>&nbsp;<B>ยอดรวมสุทธิ<br />
                                        &nbsp;<B>GRAND TOTAL</td>
                                          <td align="right"><strong><?php echo number_format($total,2);?></strong></td>
                                        </tr>
                                      </table>
                                      <p>&nbsp;</p>
                                      <table width="691" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                          <td width="943" colspan="22" align="center"><h4>กรณีชำระด้วยเช็ค ใบแจ้งหนี้ จะสมบูรณ์ต่อเมื่อบริษัทฯ    ได้รับเงินแล้วเท่านั้น</h4></td>
                                        </tr>
                                      </table>
                                      <table width="1081" border="1" cellpadding="0" cellspacing="0">
                                        <tr>
                                          <th height="53" align="center" valign="bottom" scope="row"> &nbsp;ผู้รับสินค้า ............................................................</th>
                                          <th align="center" valign="bottom"> &nbsp;ผู้ส่งสินค้า ............................................................</th>
                                          <th align="center" valign="bottom"> &nbsp;ลงวันที่  .................................................................</th>
                                        </tr>
                                        <tr>
                                          <th height="63" valign="bottom" scope="row"> &nbsp;ลงวันที่  .................................................................</th>
                                          <th valign="bottom">&nbsp;ลงวันที่  .................................................................</th>
                                          <th align="center" valign="bottom"></th>
                                        </tr>
                                      </table>
                                      <p>&nbsp;</p>
                                      <p>&nbsp;</p>
                                      <p>&nbsp;</p>
                                      <p>&nbsp;</p>
                                    </form>
                                  </center>
                                </div>
                              </div>
                              <?php mysql_free_result($cartdone); ?>
