<?php
if ($status == 1) {
	echo "<font color='#FF6B67'>";
	echo "รอชำระเงิน";
	echo "</font>";
}elseif ($status == 2) {
	echo "<font color='#92E8C6'>";
	echo "ชำระเงินแล้ว";
	echo "</font>";
}elseif ($status == 3) {
	echo "<font color='#4E70EB'>";
	echo "ส่งของแล้ว";
	echo "</font>";
}elseif ($status == 4) {
	echo "<font color='#2B130F'>";
	echo "ยกเลิกคำสั่งซื้อ";
	echo "</font>";
}
?>
