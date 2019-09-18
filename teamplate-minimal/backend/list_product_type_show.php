
<?php if (isset($_GET['t'])) { ?>
	<h3 align="center">  <a href="list_product_type.php?t" class="btn btn-primary"> แสดงประเภทหลัก </a>  <a href="list_product_type1.php?t1" class="btn btn-warning"> แสดงประเภทย่อย </a> </h3><br>


	<h3 align="center">  <a href="add_product_type.php" class="btn btn-primary"> เพิ่มประเภทหลัก </a>  </h3>

<?php }elseif(isset($_GET['t1'])) { ?>

	<h3 align="center">  <a href="list_product_type.php?t" class="btn btn-primary"> แสดงประเภทหลัก </a>  <a href="list_product_type1.php?t1" class="btn btn-warning"> แสดงประเภทย่อย </a> </h3><br>

	<h3 align="center">
		<a href="add_product_type1.php" class="btn btn-warning"> เพิ่มประเภทย่อย </a>
		 </h3>
<?php }elseif (isset($_GET['list'])) { ?>
	<h3 align="center">  <a href="list_product_type.php?t" class="btn btn-primary"> แสดงประเภทหลัก </a>  <a href="list_product_type1.php?t1" class="btn btn-warning"> แสดงประเภทย่อย </a> </h3>
<?php } ?>
