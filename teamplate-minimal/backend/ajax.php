
<meta charset="utf-8">
<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com
*/

include('db.php');
if(isset($_POST['id'])){
	
	$id=$_POST['id'];
	
	$sql = mysqli_query($con,"SELECT * FROM tbl_type1 WHERE t_id='$id'");
	while($row = mysqli_fetch_array($sql)){
		echo '<option value="'.$row['t1_id'].'">'.$row['t1_name'].'</option>';
	}
	
}
?>