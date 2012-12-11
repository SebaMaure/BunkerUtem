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
		 $('#slider').slidertron({
			viewerSelector: '.viewer',
			indicatorSelector: '.indicator span',
			reelSelector: '.reel',
			slidesSelector: '.slide',
			speed: 'slow',
			advanceDelay: 4000
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
		<?php menu_horizontal(); ?>
		<br class="clearfix" />
	</div>
	<div id="slider">
		<div class="viewer">
			<div class="reel">
				<div class="slide">
					<img src="images/slide01.jpg" alt="" />
				</div>
				<div class="slide">
					<img src="images/slide02.jpg" alt="" />
				</div>
				<div class="slide">
					<img src="images/slide03.jpg" alt="" />
				</div>
				<div class="slide">
					<img src="images/slide04.jpg" alt="" />
				</div>
				<div class="slide">
					<img src="images/slide05.jpg" alt="" />
				</div>
			</div>
		</div>
		<div class="indicator">
			<span>1</span>
			<span>2</span>
			<span>3</span>
			<span>4</span>
			<span>5</span>
		</div>
	</div>
	<div id="page">
		<div id="content">
			<div class="box">
				<h2>Welcome to Big Business 2.0</h2>
				<p>
					parrafo
                </p>
			</div>
			<div class="box" id="content-box1">
				<h3>Columna 1</h3>
				<ul class="section-list">
					<li class="first">
						<img class="pic alignleft" src="images/pic01.jpg" width="70" height="70" alt="" />
						<span>parrafo de imagen alineada a la izq.</span>
					</li>
					<li>
						<img class="pic alignleft" src="images/pic02.jpg" width="70" height="70" alt="" />
						<span>parrafo de imagen alineada a la izq.</span>
					</li>
					<li class="last">
						<img class="pic alignleft" src="images/pic03.jpg" width="70" height="70" alt="" />
						<span>parrafo de imagen alineada a la izq.</span>
					</li>
				</ul>
			</div>
			<div class="box" id="content-box2">
				<h3>Columna 2</h3>
				<p>
					opciones links.
				</p>
				<ul class="list">
					<li class="first"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li class="last"><a href="#">5</a></li>
				</ul>
			</div>
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