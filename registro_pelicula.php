<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ingresar pelicula</title>
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	left:652px;
	top:136px;
	width:249px;
	height:255px;
	z-index:1;
}
.Estilo1 {
	font-family: "arial";
	font-weight: bold;
}
#Layer2 {
	position:absolute;
	left:272px;
	top:1576px;
	width:354px;
	height:890px;
	z-index:1;
}
.Estilo2 {font-family: "arial"; font-size:13px }
-->
</style>
</head>

<body bgcolor=#bbbbbb link=white vlink=white alink=white>

<table border=0 cellpadding=0 cellspacing=0 width=1000 bgcolor=#ffffff align=center>
<tr>
<td><center><img src="imagenes/titulo_registrar_pelicula.jpg"></center>
<form id="insertar" name="insertar" method="post" action="">

<table border=0 width=750 cellpadding=0 cellspacing=0 align=center>
  <tr>
    <td align=right valign=bottom>	
    <a href="index.php">
    <label>
    <input name="Submit2" type="button" class="Estilo1" value="Volver" />
    </label>
    </a>
    </td>
    <td>

<table width=500 border="0" align='center' bgcolor=#ccccff cellpadding=2 cellpacing=0>
<tr bordercolor="#000066" width="250">
<td align=right><span class="Estilo2"><br>
Pelicula:&nbsp;</span></td>
<td><br>
<input name="Pelicula" type="text" id="Pelicula" size="50" /></td>
</tr>
<tr bordercolor="#000066">
<td align=right><span class="Estilo2">
Duraci&oacute;n:&nbsp;</span></td>
<td>
<input name="Duracion" type="text" id="Duracion" size="10" /><span class="Estilo2">&nbsp; minutos</span></td>
</tr>
<tr bordercolor="#000066">
<td align=right><span class="Estilo2">
Nacionalidad:&nbsp;</span></td>
<td>
<input name="Nacionalidad" type="text" id="Nacionalidad" size="50" /></td>
</tr>
<tr bordercolor="#000066">
<td align=right><span class="Estilo2">
Fecha estreno:&nbsp;</span></td>
<td>
<input name="Fechaestreno" type="text" id="Fechaestreno" size="20" /><span class="Estilo2"<i> &nbsp; <font color=#666666>dd/mm/aaaa</font></i></span></td>
</tr>
<tr bordercolor="#000066">
<td align=right><span class="Estilo2">
Distribuidor:&nbsp;</span></td>
<td>
<input name="dniDistribuidor" type="text" id="dniDistribuidor" size="50" /></td>
</tr>
<tr bordercolor="#000066">
<td align=right><span class="Estilo2">
Estudio:&nbsp;</span></td>
<td>
<input name="idEstudio" type="text" id="idEstudio" size="50" /></td>
</tr>
<tr bordercolor="#000066">
<td align=right><span class="Estilo2">
Formato:&nbsp;</span></td>
<td>
  <select name="Formato" id="Formato">
    <option></option>
    <option>VHS</option>
    <option>DVD</option>
    <option>VCD</option>
    <option>otro</option>
    </select></td>
</tr>
<tr bordercolor="#000066">
<td align=right><span class="Estilo2">
G&eacute;nero:&nbsp;</span></td>
<td>
  <select name="Genero" id="Genero">
    <option></option>
    <option>acci&oacute;n</option>
    <option>aventura</option>
    <option>ciencia ficci&oacute;n</option>
    <option>comedia</option>
    <option>documental</option>
    <option>drama</option>
    <option>infantil</option>
    <option>musical</option>
    <option>suspenso</option>
    <option>terror</option>
    <option>otro</option>
    </select></td>
</td>
</tr>
<tr bordercolor="#000066">
<td align=right><span class="Estilo2">
Censura:&nbsp;</span></td>
<td>
  <select name="Censura" id="Censura">
    <option></option>
    <option>+ 14 años</option>
    <option>+ 18 años</option>
    <option>Todo espectador</option>
    </select></td>
</td>
</tr>
<tr bordercolor="#000066">
<td align=right><span class="Estilo2">
Precio:&nbsp;</span></td>
<td>
$ <input name="Precio" type="text" id="Precio" size="15" /><span class="Estilo2"<i> &nbsp; <font color=#666666>sin puntos ni coma</font></i></span></td>
</tr>
<tr bordercolor="#000066">
<td align=right><span class="Estilo2">
Numero de copias:&nbsp;</span></td>
<td>
<input name="Numcintas" type="text" id="Numcintas" size="10" /></td>
</tr>
<tr bordercolor="#000066">
<td align=right><span class="Estilo2">
Director:&nbsp;</span></td>
<td>
<input name="dniDirector" type="text" id="dniDirector" size="50" /></td>
</tr>
<tr bordercolor="#000066">
<td align=right valign=top><span class="Estilo2">
Sinopsis:&nbsp;</span></td>
<td>
<textarea rows=5 cols=38 name="Sinopsis" id="Sinopsis"></textarea><br><br></td>
</tr>
</table>
    </td>
    <td align=left valign=bottom>
    <input name="Submit" type="submit" class="Estilo1" value="Insertar"/>
    <input type="hidden" name="action" value="add" />
    </td>
  </tr>
</table>

<br>
</form>

<?php
error_reporting(0);
$state = false;
if ($_POST["action"] == "add") { 
    include ("conexion.php");
    
    $que = "INSERT INTO `pelicula` (idPelicula, Pelicula, Duracion, Nacionalidad, Fechaestreno, dniDistribuidor, idEstudio, idFormato, idGenero, Sinopsis, Nespectadores, Precio, Numcintas, dniDirector) ";
    $que.= "VALUES ('".$_POST['idPelicula']."', '".$_POST['Pelicula']."', '".$_POST['Duracion']."','".$_POST['Nacionalidad']."','".$_POST['Fechaestreno']."','".$_POST['dniDistribuidor']."','".$_POST['idEstudio']."','".$_POST['idFormato']."','".$_POST['idGenero']."','".$_POST['Sinopsis']."','".$_POST['Nespectadores']."','".$_POST['Precio']."','".$_POST['Numcintas']."','".$_POST['dniDirector']."') ";
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