<?php
session_start();
unset($_SESSION['MM_admin']);
unset($_SESSION['MM_AdminGroup']);
//session_destroy();
header("Location: admin/ ");	
?>