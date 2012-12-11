<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
session_start();
if(!isset($_SESSION['user'])){
header("location:login.php");
}
include("funciones.php");
include("conexion.php");
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
		<?php menu_horizontal(); ?><br class="clearfix" />
	</div>
	<div id="page">
    <div class="box">
				<h2>Devolución </h2>
			</div>			    	
		<div id="content">
		<form action="devolucion.php" method="post">
		  <p>Articulo:
  <input type="text" id="art" name="art" />
		  </p>
		  <p>Recibe:
            <select class="texto" name="recibe" id="recibe">
                      <option></option>
                      <option>Francisco Contreras</option>
                      <option>Sebastian Maureira</option>
			          <option>Gerson Leiva</option>
			          <option>Andres Collinao</option>
			          <option>Jorge Barriga</option>
            </select>
          </p>
          <p>Fecha Recepcion:
            <input type="text" id="fres" name="fres" />
          </p>
          <p>Hora Recepcion:
            <input type="text" id="hres" name="hres" />
          </p>
          <p>Estado:
            <input type="text" id="est" name="est" />
          </p>
          <p>
<input type="submit" name="Submit" value="Enviar" class="botonenviar" />
		  <input type="hidden" name="action" value="add" />          </p>
		</form>
		<?php
		
						error_reporting(0);
						$state = false;
						if ($_POST["action"] == "add"){
  					  		include ("conexion.php");
    						$que = "UPDATE Prestamo SET Usuario_Nombre1 = '$_POST[recibe]', FechaEnt = '$_POST[fres]', HoraEnt = '$_POST[hres]', Estado = '$_POST[est]' WHERE Articulo = '$_POST[art]' AND Estado = 'ocupado' ";
		$res = mysql_query($que, $conexion) or die(mysql_error());
    						$state= true;
							include ("cerrar_conexion.php");
						}
 					?>
		  <div class="box">
				
			</div>
			
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