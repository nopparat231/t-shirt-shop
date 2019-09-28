<?php 
include('../Connections/condb.php');

$img_front = $_POST['img_front'];
$img_back = $_POST['img_back'];


$desing_mem = "";
$desing_order = "";
$desing_img_front = "";
$desing_img_back = "";
$desing_status = "";

$desing_small = $_POST['small'];
$desing_medium = $_POST['medium'];
$desing_large = $_POST['large'];
$desing_xlarge = $_POST['xlarge'];
$desing_xxlarge = $_POST['xxlarge'];

mysql_select_db($database_condb);
$sql ="INSERT INTO tbl_desing (desing_mem , desing_order , desing_img_front , desing_img_back , desing_small , desing_medium , desing_large , desing_xlarge , desing_xxlarge , desing_status ) VALUES ('$desing_mem' , '$desing_order' ,'$desing_img_front' ,'$desing_img_back','$desing_status' )";

$result1 = mysql_query($sql,$condb) or die ("Error in query : $sql" .mysql_error());

if ($result1) {

	echo $class_action->goto_page(1,'../index.php');

}else{

	echo $class_action->show_message('Error');

}

?>
