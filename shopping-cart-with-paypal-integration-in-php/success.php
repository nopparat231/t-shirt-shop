 <?php 
session_start();
include("inc/config.inc.php"); 
include("header.php"); 
?>
<title>phpzag.com : Shopping Cart with PayPal Integration in PHP</title>
<link href="style/style.css" rel="stylesheet" type="text/css">
<?php include('container.php');?>
<div class="container">	
	<h2>Demo - Shopping Cart with PayPal Integration in PHP</h2>
	<div class="text-left">		
		<?php
		// payment information from PayPal 
		$txn_id = $_GET['tx'];
		$payment_gross = $_GET['amt'];
		$currency_code = $_GET['cc'];
		$payment_status = $_GET['st'];
		?>	
		<strong>Your order payment has been successful!</strong>		
	</div>
</div>
<?php include('footer.php');?>




