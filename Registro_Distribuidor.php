<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ingresar Distribuidor</title>
<style type="text/css">
<!--
.Estilo2 {	font-family: "arial";
	font-weight: bold;
}
.Estilo3 {font-family: arial; font-size: 13px;}
-->
</style>
</head>

<body bgcolor=#bbbbbb link=white vlink=white alink=white>

<table border=0 width=1000 height=580 cellpadding=0 cellspacing=0 align=center bgcolor=#ffffff>
<tr>
<td valign=top><center>
<img src="imagenes/titulo_registrar_distribuidor.jpg"></center>
<br><br><br>


<form id="insertar" name="insertar" method="post" action="">

<table border=0 cellpadding=0 cellspacing=0 width=740 align=center>
<tr>
<td align=right valign=bottom>
    <a href="index.php">
    <input name="Submit2" type="button" class="Estilo2" value="Volver" />
      </a></p>
<a href="index.php">
<label></label>
</a>
</td>
<td width=580>

<table border=0 align=center width=500 height= 300 bgcolor=#ccccff cellpadding=0 cellspacing=0> <tr> <td>
<table border=0 align=center width=500 bgcolor=#ccccff cellpadding=4 cellspacing=0>
<tr>
<td align=right><span class="Estilo3">
Rut:&nbsp;
</span></td>
<td>
<input name="dniDistribuidor" type="text" id="dniDistribuidor" size="10" /><span class="Estilo3">&nbsp;-&nbsp;</span><input type="text" size=1 /></td>
</tr>
<tr>
<td align=right><span class="Estilo3">
Nombre:&nbsp;
</span></td>
<td>
<input name="Nombre" type="text" id="Nombre" size="50" /></td>
</tr>
<tr>
<td align=right><span class="Estilo3">
Direccion:&nbsp;
</span></td>
<td>
<input name="Direccion" type="text" id="Direccion" size="50" /></td>
</tr>
<tr>
<td align=right><span class="Estilo3">
Comuna:&nbsp;
</span></td>
<td>
<input name="Poblacion" type="text" id="Poblacion" size="30" /></td>
</tr>
<tr>
<td align=right><span class="Estilo3">
Ciudad:&nbsp;
</span></td>
<td>
<input name="Provincia" type="text" id="Provincia" size="30" /></td>
</tr>
<tr>
<td align=right><span class="Estilo3">
Correo electr&oacute;nico:&nbsp;
</span></td>
<td>
<input name="email" type="text" id="email" size="50" /></td>
</tr>
<tr>
<td align=right><span class="Estilo3">
Tel&eacute;fono:&nbsp;
</span></td>
<td>
<input name="Telefono" type="text" id="Telefono" size="50" /></td>
</tr>
<tr>
<td align=right><span class="Estilo3">
Fax:&nbsp;
</span></td>
<td>
<input name="Fax" type="text" id="Fax" size="50" /></td>
</tr>
</table>
</tr> </td> </table>

</td>
<td align=left valign=bottom>
    <input name="Submit" type="submit" class="Estilo2" value="Insertar" />
    <input type="hidden" name="action" value="add" />
</td>
</tr>
</table>

</form>

<?php
error_reporting(0);
$state = false;
if ($_POST["action"] == "add") { 
    include ("conexion.php");
    
    $que = "INSERT INTO `distribuidor` (dniDistribuidor, Nombre, Direccion, Poblacion, Provincia,email,Telefono,Fax) ";
    $que.= "VALUES ('".$_POST['dniDistribuidor']."', '".$_POST['Nombre']."', '".$_POST['Direccion']."','".$_POST['Poblacion']."','".$_POST['Provincia']."','".$_POST['email']."','".$_POST['Telefono']."','".$_POST['Fax']."') ";
    $res = mysql_query($que, $conexion) or die(mysql_error());
    $state= true;
include ("cerrar_conexion.php");

}





 ?>

</tr>
</td>
</table>
</body>
</html>