<?php
session_start();
unset($_SESSION['MM_Username']);
unset($_SESSION['MM_UserGroup']);
unset($_SESSION['User']);
//session_destroy();
header("Location: index.php ");	
?>