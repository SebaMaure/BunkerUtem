<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ingresar Director</title>
<style type="text/css">
<!--
.Estilo1 {
	font-family: "arial";
	font-weight: bold;
	color: #000000;
}
.Estilo3 {font-family: "arial"; font-size: 13px;}
.Estilo4 {font-weight: bold; font-family: "arial"; font-size: 13px;}
.Estilo6 {color: #000000; font-family: "arial"; font-size: 13px;}
-->
</style>
</head>

<body bgcolor=#bbbbbb link=white alink=white vlink=white>

<table border=01 width=1000 height=580 bgcolor=#ffffff align=center cellpadding=0 cellspacing=0>
<tr>
<td valign=top><center>
<img src="imagenes/titulo_registrar_director.jpg"></center>
<br><br><br><br>
<table border=0 width=750 align=center cellpadding=0 cellspacing=0>
<tr>
<td align=right valign=bottom>
  <a href="index.php">
  <label>
  <input name="Submit2" type="button" class="Estilo4" value="Volver" />
  </label>
  </a>
</td>
<td width=565>

<table border=0 width=500 height=250 cellpadding=0 cellspacing=0 align=center bgcolor=#ccccff> <tr> <td>
<form id="insertar" name="insertar" method="post" action="">
<table border="0" align=center bgcolor=#ccccff cellpadding=5 cellspacing=0>
<tr>
<td align=right><span class="Estilo6">
DNI Director:&nbsp;
</span></td>
<td>
<input name="dniDirector" type="text" id="dniDirector" size="50" /></td>
</tr>
<tr>
<td align=right><span class="Estilo6">
Nombre:&nbsp;
</span></td>
<td>
<input name="Nombre" type="text" id="Nombre" size="50" /></td>
</tr>
<tr>
<td align=right><span class="Estilo6">
Fecha nacimiento:&nbsp;
</span></td>
<td>
<input name="Fechanacimiento" type="text" id="Fechanacimiento" size="20" /><span class="Estilo3"><i><font color=#666666>&nbsp;dd/mm/aaaa</font></span></i></td>
</tr>
<tr>
<td><span class="Estilo6">
Fecha fallecimiento:&nbsp;
</span></td>
<td>
<input name="Fechafallecimiento" type="text" id="Fechafallecimiento" size="20" /><span class="Estilo3"><i><font color=#666666>&nbsp;dd/mm/aaaa</font></span></i></td>
</tr>
<tr>
<td align=right><span class="Estilo6">
Nacionalidad:&nbsp;
</span></td>
<td>
<input name="Lugarnacimiento" type="text" id="Lugarnacimiento" size="40" /></td>
</tr>
</table>
</tr> </td> </table>

</td>
<td align=left valign=bottom>
  <input name="Submit" type="submit" class="Estilo4" value="Insertar" />
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
    
    $que = "INSERT INTO `director` (dniDirector, Nombre, Fechanacimiento, Fechafallecimiento, Lugarnacimiento) ";
    $que.= "VALUES ('".$_POST['dniDirector']."', '".$_POST['Nombre']."', '".$_POST['Fechanacimiento']."','".$_POST['Fechafallecimiento']."','".$_POST['Lugarnacimiento']."') ";
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