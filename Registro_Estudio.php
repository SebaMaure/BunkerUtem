<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ingresar Estudio de Grabacion</title>
<style type="text/css">
<!--
.Estilo1 {
	font-family: "arial";
	font-weight: bold;
	font-size: 13px;
}
.Estilo2 {font-family: "arial"; font-size: 13px}
.Estilo3 {font-weight: bold}
-->
</style>

</head>

<body bgcolor=#bbbbbb link=white vlink=white alink=white>

<table border=0 width=1000 height=580 align=center bgcolor=#ffffff cellpadding=0 cellspacing=0>
<tr>
<td valign=top> <center>
<img src="imagenes/titulo_registrar_estudio.jpg"></center>

<br><br><br><br><br>
<form action="" method="post" name="insertar" class="Estilo2" id="insertar">
<table border=0 width=750 align=center cellpadding=0 cellspacing=0
<tr>
<td align=right valign=bottom>
  <a href="index.php">
  <input name="Submit2" type="button" class="Estilo1" value="Volver" />
  </a><a href="index.php">
  <label></label>
  </a>
</td>
<td width=550>

<table width=480 height=156 border=0 cellpadding=0 cellspacing=0 bgcolor=#ccccff align=center> <tr> <td>
<form action="" method="post" name="insertar" class="Estilo2" id="insertar">
<table border="0" align='center' bgcolor=#ccccff cellpadding=5 cellspacing=0>
<tr>
<td align=right>
Nombre:&nbsp;</td>
<td>
<input name="Estudio" type="text" id="Estudio" size="50" /></td>
</tr>
<tr>
<td align=right valign=top>
Activo:&nbsp;</td>
<td>
    <label>
      <input type="radio" name="GrupoOpciones1" value="opcion" />
      Si</label>
    <br />
    <label>
      <input type="radio" name="GrupoOpciones1" value="opcion" />
      No</label>
    <br />

</td>
</tr>
</table>
</tr> </td> </table>

</td>
<td align=left valign=bottom>
  <input name="Submit" type="submit" class="Estilo1" value="Insertar" />
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
    
    $que = "INSERT INTO `Estudio` (idestudio, Estudio, Enactivo) ";
    $que.= "VALUES ('".$_POST['']."', '".$_POST['Estudio']."', '".$_POST['Enactivo']."') ";
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