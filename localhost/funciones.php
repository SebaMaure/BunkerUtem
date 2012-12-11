<?php
function menu_horizontal()
{
		echo '
		<div id="Logout"><a href="logout.php">Cerrar Sesion</a></div>
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
		</ul>
		<br class="clearfix" />
		';
}
