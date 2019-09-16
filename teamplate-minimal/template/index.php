<?php include 'header.php'; ?>
<!-- Body main wrapper start -->
<div class="wrapper fixed__footer">


	<!-- Start Header Style -->
	<?php include 'header_menu.php'; ?>
	<!-- End Header Style -->

	<div class="body__overlay"></div>


	<?php if (isset($_GET['cart'])) {
		include 'cart.php';
	}elseif (isset($_GET['product_all'])) {
		include 'product_all.php';
	}else{
		include 'home.php';
	} ?>



	<!-- Start Footer Area -->
	<?php include 'footer_content.php'; ?>
	<!-- End Footer Area -->

</div>
<!-- Body main wrapper end -->

<!-- Placed js at the end of the document so the pages load faster -->
<?php include 'footer.php'; ?>