<?php
require_once('Connections/condb.php');
@session_start();
date_default_timezone_set('Asia/Bangkok');
$mem_id = $_POST['mem_id'];
$name = $_POST["name"];
$address = $_POST["address"];
$address2 = $_POST["address2"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$p_qty = $_POST["p_qty"];
$p_size = $_POST["p_size"];
$total = $_POST["total"];
$order_date = date("Y-m-d H:i:s");
$status = 1;
$pay_slip = '';
$b_name = '';
$b_number = '';
$pay_date = '';
$time_date = '';
$pay_amount = '';
$p_name = $_POST['p_name'];
$pos_ems = $_POST['ems'];
$emss = $_POST['emss'];
$postcode = '';
$check_id = '';
$sent_id = '';
$st = $_POST['st'];
mysql_select_db($database_condb);
mysql_query("BEGIN" ,$condb );
$sql1 = "INSERT INTO tbl_order VALUES (NULL,'$mem_id','$name','$address','$email','$phone','$status','$pay_slip',
				'$b_name','$b_number','$pay_date','$time_date','$pay_amount','$postcode','$pos_ems','$emss','$check_id','$sent_id','$order_date')";

$query1 = mysql_query($sql1,$condb ) or die ("Error in query : sql1 " . mysql_error());

$sql2 = "SELECT MAX(order_id) AS order_id FROM tbl_order WHERE mem_id='$mem_id'";
$query2 = mysql_query($sql2,$condb  )or die ("Error in query : sql2 " . mysql_error());
$row = mysql_fetch_array($query2)or die(mysql_error());
$order_id = $row['order_id'];

if ($st == 1) {
//เพิ่มที่อยู่ที่1
	$sqlorder ="UPDATE tbl_member SET mem_address = '$address', mem_address_st = '1' WHERE mem_id = '$mem_id'";

	$sqlorderr = mysql_query($sqlorder,$condb  )or die ("Error in query : sqlorderr " . mysql_error());


	$sqlorder3 ="UPDATE tbl_order SET address = '$address' WHERE order_id = '$order_id'";

	$sqlorderr3 = mysql_query($sqlorder3,$condb  )or die ("Error in query : sqlorderr3 " . mysql_error());
}
if ($st == 2) {
	//เพิ่มที่อยู่ที่2


	$sqlorder2 ="UPDATE tbl_member SET mem_address2 = '$address2' , mem_address_st = '2' WHERE mem_id = '$mem_id'";

	$sqlorderr2 = mysql_query($sqlorder2,$condb  )or die ("Error in query : sqlorderr " . mysql_error());

	$sqlorder3 ="UPDATE tbl_order SET address = '$address2' WHERE order_id = '$order_id'";
	$sqlorderr3 = mysql_query($sqlorder3,$condb  )or die ("Error in query : sqlorderr3 " . mysql_error());

}




foreach($_SESSION['shopping_cart'] as $p_id=>$p_qty)
{
	$sql3 = "SELECT * FROM tbl_product where p_id=$p_id";
	$query3 =mysql_query($sql3,$condb  )or die ("Error in query : sql3 " . mysql_error());
	$row3 = mysql_fetch_array($query3)or die(mysql_error());

	$count = mysql_num_rows($query3)or die(mysql_error());
	//$sum  = $row3['p_price']*$p_qty;

	$sql4 = "INSERT INTO tbl_order_detail VALUES(null , '$order_id','$p_id','$p_name','$p_qty','$total')";
	$query4 = mysql_query($sql4,$condb  )or die ("Error in query : sql4 " . mysql_error());

	$sqlpname ="UPDATE tbl_order_detail t2,
	(
	SELECT p_name , p_id FROM tbl_product
	)
	t1
	SET t2.p_name = t1.p_name WHERE t1.p_id = t2.p_id";

	$querypanem = mysql_query($sqlpname,$condb  )or die ("Error in query : querypanem " . mysql_error());
        //ตัดสต๊อก
        //ตัดสต๊อก
	for($i = 0; $i < $count; $i++){

		$have = $row3['p_qty'];
		$stc = $have - $p_qty;

		$sql9 = "UPDATE tbl_product SET p_qty = $stc WHERE p_id = $p_id ";
		$query9 = mysql_query($sql9, $condb );
	}


}

	//exit

if($query1 && $query4){
	mysql_query("COMMIT" ,$condb )or die(mysql_error());

	foreach($_SESSION['shopping_cart'] as $p_id)
	{

		unset($_SESSION['shopping_cart']);
		echo "<script>";
		echo "alert('บันทึกข้อมูลเรียบร้อยแล้ว');";
		echo "window.location='my_order.php?order_id=$order_id$act=show-order';";
		echo "</script>";
	}
}
else{
	mysql_query("ROLLBACK", $condb  )or die(mysql_error());


	echo "<script>";
	echo "alert('บันทึกข้อมูลไม่สำเร็จ');";
	echo "window.location='confirm_order.php';";
	echo "</script>";

}

mysql_close($condb);



?>
