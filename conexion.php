<?php
$dbhost="localhost";  
$dbusuario="root"; 
$dbpassword=""; 

$db="bunker";       
$conexion = mysql_connect($dbhost, $dbusuario, $dbpassword);
mysql_select_db($db);
?>