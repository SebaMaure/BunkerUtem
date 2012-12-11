<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
session_start();
if(!isset($_SESSION['user'])){
header("location:login.php");
}
include("funciones.php");

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Big Business 2.0 by FCT</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="jquery.dropotron-1.0.js"></script>
<script type="text/javascript" src="jquery.slidertron-1.1.js"></script>
<script type="text/javascript">
	$(function() {
		$('#menu > ul').dropotron({
			mode: 'fade',
			globalOffsetY: 11,
			offsetY: -15
		});
	});
</script>

<style type="text/css">

#apDiv1 {
	position: absolute;
	left: 387px;
	top: 3442px;
	width: 58px;
	height: 24px;
	z-index: 1;
}
#apDiv2 {
	position: absolute;
	left: 383px;
	top: 482px;
	width: 66px;
	height: 25px;
	z-index: 2;
}
</style>

</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="#">Laboratorio Informatica</a></h1>
		</div>
		<div id="slogan">
			<h2></h2>
		</div>
	</div>
	<div id="menu">
		<?php menu_horizontal(); ?>
		<br class="clearfix" />
	</div>
	<div id="page">
		<div id="content">
			<div class="box">
				<h2>Agregar Usuario </h2>
			</div>			    		      
		      <fieldset id="form">
				<form>
				  <legend>Agregar Usuario</legend>
					<label for="user">Nombre:</label>
					<input class="texto" name="idart" id="idart" type="text" size="20" />
					<label for="pass">Cargo</label>
					<input class="texto" name="tipo" id="tipo" type="text" size="20" />
					<label for="pass">Contraseña:</label>
					<input class="texto" name="marca" id="marca" type="text" size="20" />
				
					<img src="images/img_agregarusuario.png"/>
					<input type="submit" style="background: transparent url(images/btn_agregar.png); width:139px; height:38px;" name="Submit" value="" />
					<input type="hidden" name="action" value="add" />
			
				</form>
			    <?php
error_reporting(0);
$state = false;
if ($_POST["action"] == "add") { 
    include ("conexion.php");
    
    $que = "INSERT INTO `Articulo`(idArticulo, Tipo, Marca, Descripcion)";
    $que.= "VALUES ('".$_POST['idart']."', '".$_POST['tipo']."', '".$_POST['marca']."','".$_POST['desc']."','".$_POST['estado']."','".$_POST['encar']."') ";
    $res = mysql_query($que, $conexion) or die(mysql_error());
    $state= true;
include ("cerrar_conexion.php");

}
 ?>
		      </fieldset>
		      <div id="boton1">
			    <p>&nbsp;		        </p>
			    <p>&nbsp;</p>
			  </div>
			  <p>&nbsp;</p>
		  
			<br class="clearfix" />
		</div>
		
		<br class="clearfix" />
	</div>
	<div id="page-bottom">
	<br class="clearfix" />
	</div>
</div>
<div id="footer">
	Copyright (c) 2012 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org">FCT</a>. Photos by <a href="http://fotogrph.com/">Fotogrph</a>.
</div>
</body>
</html>