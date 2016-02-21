<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$localhost = "localhost";
$db = "fuxfordb";
$user = "admin";
$password = "admin";
$link = mysqli_connect($localhost, $user, $password) or trigger_error(mysql_error(),E_USER_ERROR); 
mysqli_query($link, "SET NAMES 'utf8';") or die(mysql_error());
mysqli_query($link, "SET CHARACTER SET 'utf8';") or die(mysql_error());
mysqli_query($link, "SET SESSION collation_connection = 'utf8_general_ci';"); 
?>