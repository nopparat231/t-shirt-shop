<?php
if ($status == 1) {
	echo "<font color='#8917BF'><span class='glyphicon glyphicon-certificate'></span> ";
	echo "รอชำระเงิน";
	echo "</font>";
}elseif ($status == 2) {
	echo "<font color='#b36b00'><span class='glyphicon glyphicon-certificate'></span> ";
	echo "รอตรวจสอบการชำระเงิน";
	echo "</font>";
}elseif ($status == 3) {
	echo "<font color='blue'><span class='glyphicon glyphicon-certificate'></span> ";
	echo "ส่งของแล้ว";
	echo "</font>";
}elseif ($status == 4) {
	echo "<font color='red'><span class='glyphicon glyphicon-certificate'></span> ";
	echo "ยกเลิกคำสั่งซื้อ";
	echo "</font>";

}elseif ($status == 5) {
	echo "<font color='green'><span class='glyphicon glyphicon-certificate'></span> ";
	echo "ตรวจสอบการชำระแล้ว";
	echo "</font>";
}
?>
