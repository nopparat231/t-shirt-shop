<?php
error_reporting(0);
$hostname_condb = "localhost";
$database_condb = "leather-shop";
$username_condb = "root";
$password_condb = "";
$condb = mysql_connect($hostname_condb, $username_condb, $password_condb , $database_condb) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_query("SET NAMES UTF8");

?>
