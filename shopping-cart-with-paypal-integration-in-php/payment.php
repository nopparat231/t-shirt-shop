 <?php 
session_start();
include_once("db_connect.php");
include("inc/config.inc.php"); 
include("header.php"); 
// You need to use logged in member id
$member_id = 1; 
// insert order details
$order_id = 0;
if(!empty($_POST["proceedPayment"])) {
	$firstName = $_POST ['firstName'];
	$lastName = $_POST ['lastName'];
    $address = $_POST ['address'];
    $contactNumber = $_POST ['contactNumber'];
    $emailAddress = $_POST ['emailAddress'];	
	$insertOrderSQL = "INSERT INTO shop_order(member_id, name, address, mobile, email, order_status, order_at, payment_type)VALUES('".$member_id."', '".$firstName." ".$lastName."', '".$address."', '".$contactNumber."', '".$emailAddress."', 'PENDING', '".date("Y-m-d H:i:s")."', 'PAYPAL')";
	mysqli_query($conn, $insertOrderSQL) or die("database error:". mysqli_error($conn));	
	$order_id = mysqli_insert_id($conn);	
}
// insert order item details
if($order_id) {	
	if(isset($_SESSION["products"]) && count($_SESSION["products"])>0) { 
		foreach($_SESSION["products"] as $product){	
			$insertOrderItem = "INSERT INTO shop_order_item(order_id, product_id, item_price, quantity)VALUES('".$order_id."', '".$product["product_code"]."',  '". $product["product_price"]."', '".$product["product_qty"]."')";
			mysqli_query($conn, $insertOrderItem) or die("database error:". mysqli_error($conn));	
		}
	}
}
?>
<title>phpzag.com : Demo Shopping Cart with PayPal Integration in PHP</title>
<link href="style/style.css" rel="stylesheet" type="text/css">
<?php include('container.php');?>
<div class="container">	
	<div class="text-left">	
		<h4>Payable Amount (Rs): <?php echo $_SESSION["payableAmount"]; ?>	</h4>
		<strong>Shipping Address:</strong> <br>
		<?php 
		echo "Name: ".$_POST['firstName']." ".$_POST['lastName']."<br>Address:".$_POST['address']."<br>Email Address:".$_POST['emailAddress']."<br>Contact Number:".$_POST['contactNumber']; ?>
		<div></div>
		<form class="form-horizontal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="POST">
			<input type='hidden' name='business' value='Your Business Email Address'>
			<input type='hidden' name='item_name' value='<?php echo $_SESSION["cartItems"]; ?>'> 
			<input type='hidden' name='item_number' value="<?php echo $order_id; ?>">
			<input type='hidden' name='amount' value='<?php echo $_SESSION["payableAmount"]; ?>'> 
			<input type='hidden' name='currency_code' value='USD'> 
			<input type='hidden' name='notify_url' value='http://yourdomain.com/shopping-cart-with-paypal-integration/notify.php'>
			<input type='hidden' name='return' value='http://yourdomain.com/shopping-cart-with-paypal-integration/success.php'>
			<input type="hidden" name="cmd" value="_xclick"> 
			<input type="hidden" name="order" value="<?php echo $_SESSION["orderNumber"]; ?>">
			<br>
			<div class="form-group">
				<div class="col-sm-2"> 
					 <input type="submit" class="btn btn-lg btn-block btn-danger" name="continue_payment" value="Pay Now">				 
				</div>
			</div>
		</form>
	</div>
</div>
<?php include('footer.php');?>




