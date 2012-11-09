<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Arriendo de Peliculas</title>
<style type="text/css">
<!--
.Estilo1 {	font-family: "arial";
	font-weight: bold;
}
.Estilo2 {font-family: "arial"; font-size: 13px }
-->
</style>

</head>

<body bgcolor=#bbbbbb link=white vlink=white alink=white>

<table border=0 cellpadding=0 cellspacing=0 width=1000 bgcolor=#ffffff align=center>
<tr>
<td><center><img src="imagenes/titulo_registrar_arriendo.jpg"></center>
<form id="insertar" name="insertar" method="post" action="">
<br>
<br>
<br>
<br>
<table border=0 width=750 cellpadding=0 cellspacing=0 align=center>
  <tr>
    <td align=right valign=bottom>
    <a href="index.php">
    <input name="Submit2" type="button" class="Estilo1" value="Volver" />
    <label></label>
    </a>

    </td>
    <td>
<table border=0 cellpadding=0 cellspacing=0 width=500 height=263 align=center bgcolor=#ccccff> <tr> <td>
<table width=500 border="0" align='center' bgcolor=#ccccff cellpadding=4 cellspacing=0>
<tr width=250>
<td align=right><span class="Estilo2">
Codigo Pelicula:</span></td>
<td>
<input name="idPelicula" type="text" id="idPelicula" size="50" /></td>
</tr>
<tr>
<td align=right><span class="Estilo2">
Socio N:</span></td>
<td>
<input name="dniSocio" type="text" id="dniSocio" size="50" /></td>
</tr>
<tr>
<td align=right><span class="Estilo2">
Fecha entrega:</span></td>
<td>
<input name="Fechaentrega" type="text" id="Fechaentrega" size="50" /></td>
</tr>
<tr>
<td align=right><span class="Estilo2">
Fecha devoluci&oacute;n:</span></td>
<td>
<input name="Fechadevolucion" type="text" id="Fechadevolucion" size="50" /></td>
</tr>
<tr>
<td align=right><span class="Estilo2">
Nombre pel&iacute;cula:</span></td>
<td>
<input name="Pelicula" type="text" id="Pelicula" size="50" /></td>
</tr>
</table>
</td> </tr> </table>
    </td>
    <td align=left valign=bottom>
    <input name="Submit" type="submit" class="Estilo1" value="Insertar"/>
    <input type="hidden" name="action" value="add" />
    </td>
  </tr>
</table>
<br><br><br><br><br><br><br><br>

</form>

<?php
error_reporting(0);
$state = false;
if ($_POST["action"] == "add") { 
    include ("conexion.php");
    
    $que = "INSERT INTO `Arri` (idPelicula, dniSocio, Fechaentrega, Fechadevolucion, Pelicula) ";
    $que.= "VALUES ('".$_POST['idPelicula']."', '".$_POST['dniSocio']."', '".$_POST['Fechaentrega']."','".$_POST['Fechadevolucion']."','".$_POST['Pelicula']."') ";
    $res = mysql_query($que, $conexion) or die(mysql_error());
    $state= true;
include ("cerrar_conexion.php");

}


 ?>
</td>
</tr>
</table>

</body>
</html>