<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ingresar nuevo Socio</title>
<style type="text/css">
<!--
.Estilo1 {	font-family: "Comic Sans MS";
	font-weight: bold;
}
.Estilo2 {font-family: "Comic Sans MS"}
-->
</style>
<h1><b><u><font face="Comic Sans MS">Socio</font></u></b></h1>
</head>

<body>

<style>
#fondo{
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
z-index:-50;
}
</style>

<img id="fondo" src="imagenes/22-dragonball.jpg" />

<table   width='80%' height='50' align='center'>
<tr>
<td>
<span class="Estilo1"><u>Ingrese nuevo Socio</u></span> <br />
<br />
</td>
</tr>
</table>
<form id="insertar" name="insertar" method="post" action="">
<table width='39%' border="1" align='left'>
<tr>
  <td bordercolor="#000099"><span class="Estilo2">Socio Nº </span></td>
  <td bordercolor="#000099"><label>
    <input name="dniSocio" type="text" id="dniSocio" size="50" />
  </label></td>
</tr>
<tr>
<td bordercolor="#000099"><span class="Estilo2">
Nombre:</span></td>
<td bordercolor="#000099">
<input name="Nombre" type="text" id="Nombre" size="50" /></td>
</tr>
<tr>
<td bordercolor="#000099"><span class="Estilo2">
Apellidos:</span></td>
<td bordercolor="#000099">
<input name="Apellidos" type="text" id="Apellidos" size="50" /></td>
</tr>
<tr>
<td bordercolor="#000099"><span class="Estilo2">
FechaAlta:</span></td>
<td bordercolor="#000099">
<input name="FechaAlta" type="text" id="FechaAlta" size="50" /></td>
</tr>
<tr>
<td bordercolor="#000099"><span class="Estilo2">
FechaCaducidad:</span></td>
<td bordercolor="#000099">
<input name="FechaCaducidad" type="text" id="FechaCaducidad" size="50" /></td>
</tr>
<tr>
<td bordercolor="#000099"><span class="Estilo2">
Direccion:</span></td>
<td bordercolor="#000099">
<input name="Direccion" type="text" id="Direccion" size="50" /></td>
</tr>
<tr>
<td bordercolor="#000099"><span class="Estilo2">
Poblacion:</span></td>
<td bordercolor="#000099">
<input name="Poblacion" type="text" id="Poblacion" size="50" /></td>
</tr>
<tr>
<td bordercolor="#000099"><span class="Estilo2">
Provincia:</span></td>
<td bordercolor="#000099">
<input name="Provincia" type="text" id="Provincia" size="50" /></td>
</tr>
<tr>
<td bordercolor="#000099"><span class="Estilo2">
email</span></td>
<td bordercolor="#000099">
<input name="email" type="text" id="email" size="50" /></td>
</tr>
<tr>
<td bordercolor="#000099"><span class="Estilo2">
Telefono:</span></td>
<td bordercolor="#000099">
<input name="Telefono" type="text" id="Telefono" size="50" /></td>
</table>
<p><br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
  </p>
<p>&nbsp;</p>
<p><br />
  <input name="Submit" type="submit" class="Estilo1" value="Insertar" />
  <input type="hidden" name="action" value="add" />
  <a href="index.php">      </a><a href="index.php">
    <input name="Submit2" type="button" class="Estilo1" value="Volver" />
    <label></label>
  </a></p>
</form>

<?php
error_reporting(0);
$state = false;
if ($_POST["action"] == "add") { 
    include ("conexion.php");
    
    $que = "INSERT INTO `socio` (dniSocio, Nombre, Apellidos, FechaAlta, FechaCaducidad, Direccion, Poblacion, Provincia, email, Telefono) ";
    $que.= "VALUES ('".$_POST['dniSocio']."', '".$_POST['Nombre']."', '".$_POST['Apellidos']."','".$_POST['FechaAlta']."','".$_POST['FechaCaducidad']."','".$_POST['Direccion']."','".$_POST['Poblacion']."','".$_POST['Provincia']."','".$_POST['email']."','".$_POST['Telefono']."') ";
    $res = mysql_query($que, $conexion) or die(mysql_error());
    $state= true;
include ("cerrar_conexion.php");

}





 ?>


</body>
</html>