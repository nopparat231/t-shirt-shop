<?php require_once('Connections/condb.php'); ?>
<?php include 'header.php'; ?>
<!-- Body main wrapper start -->
<div class="wrapper fixed__footer">


	<!-- Start Header Style -->
	<?php include 'header_menu.php'; ?>
	<!-- End Header Style -->

	<div class="body__overlay"></div>


	<?php if (isset($_GET['cart'])) {
		//แสดงสินค้า
		include 'cart.php';
	}elseif (isset($_GET['product_all'])) {
		//แสดงสินค้าทั้งหมด
		include 'product_all.php';
	}elseif (isset($_GET['desing'])) {
		//ออกแบบเสื้อ
		include 'Tee-Designer/desing.php';
	}elseif (isset($_GET['checkout'])) {
		//สั่งซื้อสินค้า
		include 'checkout.php';
	}elseif (isset($_GET['login'])) {
		//เข้าสู่ระบบ
		include 'login.php';
	}else{
		//หน้าหลัก
		include 'home.php';
	} ?>



	<!-- Start Footer Area -->
	<?php include 'footer_content.php'; ?>
	<!-- End Footer Area -->

</div>
<!-- Body main wrapper end -->

<!-- Placed js at the end of the document so the pages load faster -->
<?php include 'footer.php'; ?>