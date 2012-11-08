<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Actor</title>
<style type="text/css">
<!--
.Estilo1 {	font-family: "arial";
	font-weight: bold;
}
.Estilo4 {font-family: arial; color: #000000; font-size:13px; }
.Estilo5 {font-family: arial; color: #666666; font-size:13px; }
.Estilo6 {font-family: arial; font-weight: bold; color: #000000; }
-->
</style>
</head>

<body bgcolor=#bbbbbb link=white vlink=white alink=white>

<table border=0 width=1000 height=580 cellpadding=0 cellspacing=0 align=center bgcolor=#ffffff>
<tr>
<td valign=top><center>
<img src="imagenes/titulo_registrar_actor.jpg"></center>

<form id="insertar" name="insertar" method="post" action="">
<br><br><br><br>
<table border=0 width=750 cellpadding=0 cellspacing=0 align=center>
<tr>
<td align=right valign=bottom>
<a href="index.php">
<input name="Submit2" type="button" class="Estilo1" value="Volver" />
<label></label>
</a>
</td>
<td width=620>

<table border=0 width=530 height=250 cellpadding=0 cellspacing=0 align=center bgcolor=#ccccff> <tr> <td>
<table border=0 bordercolor="#000099" align=center bgcolor=#ccccff cellpadding=4 cellspacing=0>
<tr>
<td align=right><span class="Estilo4">
DNI Actor:&nbsp;</span></td>
<td>
<input name="dniActor" type="text" id="dniActor" size="50" /></td>
</tr>
<tr>
<td align=right><span class="Estilo4">
Nombre:&nbsp;</span></td>
<td>
<input name="Nombre" type="text" id="Nombre" size="50" /></td>
</tr>
<tr>
<td align=right><span class="Estilo4">
Fecha nacimiento:&nbsp;</span></td>
<td>
<input name="FNacimiento" type="text" id="FNacimiento" size="30" /><span class="Estilo5"><i>&nbsp;dd/mm/aaaa</i></span></td>
</tr>
<tr>
<td align=right><span class="Estilo4">
Fecha fallecimiento:&nbsp;</span></td>
<td>
<input name="FFallecimiento" type="text" id="FFallecimiento" size="30" /><span class="Estilo5"><i>&nbsp;dd/mm/aaaa</i></span></td>
</tr>
<tr>
<td align=right><span class="Estilo4">
Nacionalidad:&nbsp;</span></td>
<td>
<input name="Lugarnacimiento" type="text" id="Lugarnacimiento" size="40" /></td>
</tr>
</table>
</tr> </td> </table>

</td>
<td align=left valign=bottom>
<input name="Submit" type="submit" class="Estilo1" value="Insertar"/>
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
    
    $que = "INSERT INTO `Actor` (dniActor, Nombre, FNacimiento, FFallecimiento, Lugarnacimiento) ";
    $que.= "VALUES ('".$_POST['dniActor']."', '".$_POST['Nombre']."', '".$_POST['FNacimiento']."','".$_POST['FFallecimiento']."','".$_POST['Lugarnacimiento']."') ";
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