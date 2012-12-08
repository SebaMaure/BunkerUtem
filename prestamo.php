<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 3.0 License

Name       : Big Business 2.0
Description: A two-column, fixed-width design with a bright color scheme.
Version    : 1.0
Released   : 20120624
-->
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
		<ul>
			<li class="first">
				<span class="opener">Gestion<b></b></span>
				<ul>
					<li><a href="prestamo.php">Préstamo</a></li>
					<li><a href="devolucion.php">Devolucion</a></li>					
					<li>
						<span>Usuario<b></b></span>
						<ul>
							<li><a href="agrega_usuario.php">Agregar</a></li>
							<li><a href="elimina_usuario.php">Eliminar</a></li>						</ul>
					</li>
                    <li>
						<span>Artículo<b></b></span>
						<ul>
							<li><a href="agrega_articulo.php">Agregar</a></li>
							<li><a href="elimina_articulo.php">Eliminar</a></li>						</ul>
					</li>						
				</ul>
			</li>
			<li><span class="opener">Listar<b></b></span>
            <ul>
           	<li><a href="lista_prestamo.php">Préstamos</a></li>
			<li><a href="lista_devolucion.php">Devoluciones</a></li>
			<li><a href="lista_usuario.php">Usuarios</a></li>
            <li><a href="lista_articulo.php">Artículos</a></li>
			</ul>
            </li>
			<li><span class="opener">Buscar<b></b></span>
            <ul>
           	<li><a href="busca_prestamo.php">Préstamo</a></li>
			<li><a href="busca_devolucion.php">Devolucion</a></li>
			<li><a href="busca_usuario.php">Usuario</a></li>
            <li><a href="busca_articulo.php">Artículo</a></li>
			</ul>
            </li>
			<li>
				<span class="opener">4.<b></b></span>
				<ul>
					<li><a href="#">4.1.</a></li>
					<li><a href="#">4.2.</a></li>
					<li><a href="#">4.3.</a></li>
					<li>
						<span>4.4.<b></b></span>
						<ul>
							<li><a href="#">4.4.1.</a></li>
							<li><a href="#">4.4.2.</a></li>
							<li><a href="#">4.4.3.</a></li>
							<li><a href="#">4.4.4.</a></li>
							<li><a href="#">4.4.5.</a></li>
							<li><a href="#">4.4.6.</a></li>
						</ul>
					</li>
					<li><a href="#">4.5.</a></li>
					<li><a href="#">4.6.</a></li>
				</ul>
			</li>
			<li><a href="#">5.</a></li>
			<li class="last"><a href="#">6.</a></li>
		</ul>
		<br class="clearfix" />
	</div>
	<div id="page">
		<div id="content">
			<div class="box">
				<h2>Préstamo </h2>
			</div>
			<!--<form id="form1" method="post" action="">
			  <table width="350" border="1">
			    <tr>
			      <td width="110">Solicitante</td>
			      <td width="140"><label for="sol2"></label>
		          <input type="text" name="sol" id="sol2" /></td>
		        </tr>
			    <tr>
			      <td>Artículo</td>
			      <td><label for="art"></label>
		          <input type="text" name="art" id="art" /></td>
		        </tr>
			    <tr>
			      <td>Encargado</td>
			      <td><label for="encar"></label>
			        <select name="encar" id="encar">
                      <option></option>
			          <option>Andrés Collinao</option>
			          <option>Felipe</option>
                  </select></td>
		        </tr>
			    <tr>
			      <td>Fecha Préstamo</td>
			      <td><label for="fpres"></label>
		          <input type="text" name="fpres" id="fpres" /></td>
		        </tr>
			    <tr>
			      <td>Hora Préstamo</td>
			      <td><label for="hpres"></label>
		          <input type="text" name="hpres" id="hpres" /></td>
		        </tr>
			    <tr>
			      <td>Estado</td>
			      <td><label for="estado"></label>
		          <input name="estado" type="text" disabled="disabled" id="estado" value="Prestado" /></td>
		        </tr>
		      </table>
		      </form>-->
		      
		      
		      <fieldset id="registrousuario">
				<form>
					<legend>Registro de Nuevo Usuario</legend>
					<label for="user">Solicitante:</label>
					<input class="texto" name="sol" id="sol" type="text" size="20" />
					<label for="pass">Articulo</label>
					<input class="texto" name="art" id="art" type="text" size="20" />
					<label for="pass">Encargado</label>
					<select class="texto" name="encar" id="encar">
                      <option></option>
			          <option>Andrés Collinao</option>
			          <option>Felipe</option>
                    </select>
					<label for="pass">Fecha Prestamo:</label>
					<input class="texto" name="fpres" id="fpres" type="text" size="20" />
					<label for="pass">Hora Prestamo:</label>
					<input class="texto" name="hpres" id="hpres" type="text" size="20" />
					<label for="pass">Estado:</label>
					<input class="texto" name="estado" type="text" size="20" disabled="disabled" id="estado" value="Prestado" />
					<label for="pass">Descripción:</label> 
					<textarea class="areadetexto" name="address" cols="26" rows="3">
					</textarea> 
					<br /> 
					<input class="botonenviar" name="insert" type="submit" value="Enviar" class="enviar"/> 
				 </form>
			   </fieldset>
		      
		      
			  <div id="boton1"></div>
			  <p>&nbsp;</p>
		  
			<br class="clearfix" />
		</div>
		<div id="sidebar">
			<div class="box">
				<h3>Titulo</h3>
				<ul class="list">
					<li class="first"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li class="last"><a href="#">5</a></li>
				</ul>
			</div>
			<div class="box">
				<h3>Entradas</h3>
				<div class="date-list">
					<ul class="list date-list">
						<li class="first"><span class="date">2/08</span> <a href="#">1.fecha</a></li>
						<li><span class="date">2/05</span> <a href="#">2.fecha</a></li>
						<li><span class="date">2/05</span> <a href="#">3.fecha</a></li>
						<li><span class="date">2/01</span> <a href="#">4.fecha</a></li>
						<li class="last"><span class="date">1/31</span> <a href="#">5.fecha</a></li>
					</ul>
				</div>
			</div>
		</div>
		<br class="clearfix" />
	</div>
	<div id="page-bottom">
		<div id="page-bottom-content">
			<h3>Bottom</h3>
			<p>
				descripciones
            </p>
		</div>
		<div id="page-bottom-sidebar">
			<h3>Menu</h3>
			<ul class="list">
				<li class="first"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li class="last"><a href="#">3</a></li>
			</ul>
		</div>
		<br class="clearfix" />
	</div>
</div>
<div id="footer">
	Copyright (c) 2012 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org">FCT</a>. Photos by <a href="http://fotogrph.com/">Fotogrph</a>.
</div>
</body>
</html>