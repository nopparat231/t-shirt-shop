<?php require_once('../Connections/condb.php'); ?>

<?php //require_once('Connections/condb.php'); ?>
<?php
error_reporting( error_reporting() & ~E_NOTICE );
session_start();
  //print_r($_SESSION);
if (!function_exists("GetSQLValueString")) {
  function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "")
  {
    if (PHP_VERSION < 6) {
      $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
    }

    $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

    switch ($theType) {
      case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
      case "long":
      case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
      case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
      case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
      case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
    }
    return $theValue;
  }
}

$colname_buyer = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_buyer = $_SESSION['MM_Username'];
}
mysql_select_db($database_condb);
$query_buyer = sprintf("SELECT * FROM tbl_member WHERE mem_username = %s", GetSQLValueString($colname_buyer, "text"));
$buyer = mysql_query($query_buyer, $condb) or die(mysql_error());
$row_buyer = mysql_fetch_assoc($buyer);
$totalRows_buyer = mysql_num_rows($buyer);


$colname_cartdone = "-1";
if (isset($_GET['order_id'])) {
  $colname_cartdone = $_GET['order_id'];
}
mysql_select_db($database_condb);
$query_cartdone = sprintf("
  SELECT * FROM
  tbl_order as o,
  tbl_order_detail as d,
  tbl_product as p,
  tbl_member  as m
  WHERE o.order_id = %s
  AND o.order_id=d.order_id
  AND d.p_id=p.p_id
  AND o.mem_id = m.mem_id
  ORDER BY o.order_date ASC", GetSQLValueString($colname_cartdone, "int"));
$cartdone = mysql_query($query_cartdone, $condb) or die(mysql_error());
$row_cartdone = mysql_fetch_assoc($cartdone);
$totalRows_cartdone = mysql_num_rows($cartdone);
$ems = $row_cartdone['pos_ems'];
$totalsum = $row_cartdone['pay_amount'];
?>

        <?php
        $status =  $row_cartdone['order_status'];
        

        ?>
<table width="700" border="0" align="center" class="table">
  <tr>
    <a href="../print_report.php?order_id=<?php echo $colname_cartdone;?>" class="btn btn-primary btn-sm pull-right" target="_blank" id="hp" >  <span class="icon icon-print"></span> พิมพ์ใบเสร็จ </a> 

&nbsp;&nbsp;

<?php if ($status == 2): ?>
    <a href="../print_report_post.php?order_id=<?php echo $colname_cartdone;?>" class="btn btn-info btn-sm pull-left" target="_blank" id="hp" >  <span class="icon icon-print"></span> พิมพ์ใบส่งสินค้า </a> 
<?php endif ?>
  

  </tr>
  <td width="1558" colspan="5" align="center">


    <strong>รายการสั่งซื้อ คุณ<?php echo $row_cartdone['mem_fname']."&nbsp;&nbsp;".$row_cartdone['mem_lname'];?> <br />
      เบอร์โทร :  <?php echo $row_cartdone['phone']; ?> <br />
      ที่อยู่ :  <?php echo $row_cartdone['address'];?><br />
      วันที่ทำรายการ : <?php echo date('d/m/Y',strtotime($row_cartdone['order_date']));?><br />

      <font color="red"> สถานะ :
        <?php
        $status =  $row_cartdone['order_status'];
        include('status.php');

        ?>
        <br />
      </font>
    </strong>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">

      <tr>
        <td align="left" valign="top">
          <strong><font color="red"><br />
            ชำระเงิน ธ.<?php echo $row_cartdone['b_name'];?> <br />
            เลข บ/ช <?php echo $row_cartdone['b_number'];?> <br />
            จำนวน <?php echo $row_cartdone['pay_amount'];?><br />
            วันที่ชำระ <?php echo date('d/m/Y',strtotime($row_cartdone['pay_date']));?></font><br />
            <h4 style="color:blue">
              เลขพัสดุ : 
              <?php 

              if ($row_cartdone['postcode'] == 0 && $row_cartdone['order_status'] != 3 && $row_cartdone['order_status'] != 1  ) {?>

                <form action="add_postcode.php" method="get" >
                  <input type="number" hidden name="order_id" value="<?php echo $row_cartdone['order_id'];?>" />
                  <input type="text" hidden name="mem_fname" value="<?php echo $row_cartdone['mem_fname'];?>" />
                  <input type="text" hidden name="mem_lname" value="<?php echo $row_cartdone['mem_lname'];?>" />
                  <input type="text" hidden name="mem_email" value="<?php echo $row_cartdone['mem_email'];?>" />
                  <input type="text" name="postcode" />
                  <input type="number" name="status" value="3" hidden /> 
                  <button type="submit" name="submit" value="เพิ่มเลขพัสดุ" >ยืนยัน</button>
                </form>

                <?php
  // <a href='add_postcode.php?p_id=$colname_cartdone&postcode' class='btn btn-primary'>เพิ่มเลขพัสดุ</a> ";
              }else {
                echo $row_cartdone['postcode'];

              }

              ?>

            </h4>


          </td>
          <td width="59%"><strong><font color="red">

            <?php if ($row_cartdone['pay_slip'] != '') { ?>

             <img src="../pimg/<?php echo $row_cartdone['pay_slip'];?>"  width="300px"/>

           <?php } ?>


         </font></strong></td>
       </tr>
     </table>
     <strong><font color="red"><br />


     </font></strong></td>
   </tr>
   <tr class="success">
    <td  align="center">รหัส</td>
    <td  align="center">สินค้า</td>
    <td align="center">ไซส์</td>
    <td  align="center">ราคา</td>
    <td  align="center">จำนวน</td>

    <td align="center">รวม</td>
  </tr>
  <?php do { ?>

    <?php 
    $sum  = $row_cartdone['p_price']*$row_cartdone['p_c_qty'];
    $total  += $sum;

      // $ems = $row_cartdone['p_ems'] * $row_cartdone['p_c_qty'];
      // $total += $ems;

      // $sumems +=$ems;
    ?>
    <tr>
      <td align="center">TS<?php echo str_pad($row_cartdone['order_id'], 6, "0", STR_PAD_LEFT);?></td>
      <td><?php echo $row_cartdone['p_name'];?></td>
      <td align="center"><?php echo $row_cartdone['p_size'];?></td>
      <td align="center"><?php echo number_format($row_cartdone['p_price'],2);?></td>
      <td align="center"><?php echo $row_cartdone['p_c_qty'];?></td>

      <td align="center"><?php echo number_format($sum,2);?></td>
    </tr> 

  <?php } while ($row_cartdone = mysql_fetch_assoc($cartdone)); 

    // $tax = $total*0.09;
    // $total += $tax;
//$total = $row_cartdone['o.total'];

  echo "<tr>";
  echo "<td  align='left' colspan='5'><b>จัดส่ง</b></td>";
  echo "<td align='center'>"."<b>".number_format($ems,2)."</b>"."</td>";
  echo "</tr>";


  echo "<tr class='success'>";
  echo "<td colspan='5' bgcolor='#CEE7FF' align='center'><b>ราคารวม</b></td>";
  echo "<td align='center' bgcolor='#CEE7FF'>"."<b>".number_format($totalsum,2)."</b>"."</td>";

  echo "</tr>";

  ?>
</table>



<p>&nbsp;</p>
<p>&nbsp;</p>
</div>
</div>
</div>

<?php
mysql_free_result($buyer);
mysql_free_result($cartdone);
?>