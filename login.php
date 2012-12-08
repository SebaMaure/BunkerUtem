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
<title>Laboratorio Informática</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="jquery.dropotron-1.0.js"></script>
<script type="text/javascript" src="jquery.slidertron-1.1.js"></script>
<script type="text/javascript">
    $(function () {
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
			<h1><a href="#">Laboratorio Informática</a></h1>
		</div>
		<div id="slogan">
			<h2></h2>
		</div>
	</div>
	<div id="menu">
		<ul>
			<li class="first">
				<span class="opener">1. Gestion<b></b></span>
				<ul>
					<li><a href="#">1.1.</a></li>
					
				</ul>
			</li>
			
		</ul>
		<br class="clearfix" />
	</div>
	<div id="page">
		<div id="content">
			<div class="box">
				<h2>Login Usuario</h2>
				<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
                      <tr>
                      <form name="form1" method="post" action="logincheck.php">
                       <td>
                    <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                           <tr>
                       <!--<td colspan="3"><strong>Member Login </strong></td>-->
                       </tr>
                       <tr>
                       <td width="78">Usuario</td>
                        <td width="6">:</td>
                       <td width="294"><input name="myusername" type="text" id="myusername"></td>
                        </tr>
                        <tr>
                        <td>Contraseña</td>
                        <td>:</td>
                        <td><input name="mypassword" type="text" id="mypassword"></td>
                        </tr>
                        <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="Submit" value="Login"></td>
                        </tr>
                    </table>
                       </td>
                       </form>
                    </tr>
                 </table>
			</div>
			
			
			<br class="clearfix" />
		</div>
		
		<br class="clearfix" />
	</div>
	
</div>
<div id="footer">
	Copyright (c) 2012 Alumnos UTEM Ing. de Software.
</div>
</body>
</html>