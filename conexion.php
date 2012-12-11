<?php
$dbhost="localhost";  
$dbusuario="root"; 
$dbpassword="ragnarok"; 

$db="bunker";       
$conexion = mysql_connect($dbhost, $dbusuario, $dbpassword);
mysql_select_db($db);
?>