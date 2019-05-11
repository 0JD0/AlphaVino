<?php
/*clase para plantillas del dashboard*/
class Dashboard
{

	public static function headerTemplate($title)
	{
		session_start();
		ini_set('date.timezone', 'America/El_Salvador');
		print('
		<!DOCTYPE html>
		<html lang="es">
			<head>
				<meta charset="utf-8">
				<title>Dashboard - '.$title.'</title>
				<link type="image/png" rel="icon" href="../../resources/img/loguito.png" />
				<link type="text/css" rel="stylesheet" href="../../resources/css/materialize.min.css">
				<link type="text/css" rel="stylesheet" href="../../resources/css/icons.css" />
				<link type="text/css" rel="stylesheet" href="../../resources/css/standard.css">
				<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
			</head>
			<body>
		');
		print('
			<header>
			<!--Hacer el nav flexible-->
			<div class="navbar-fixed">
				<nav>
					<div class="nav-wrapper">
						<a href="#!" class="brand-logo center">
							<img src="../../resources/img/logo.png">
						</a>
						<a href="#" data-target="slide-out" class="sidenav-trigger show-on-large">
							<i class="material-icons">menu</i>
						</a>
						<ul class="right hide-on-med-and-down">
							<li>
								<a class="dropdown-trigger" href="index.php" data-target="dropdown1">
									<i class="material-icons tooltiped">exit_to_app</i>
								</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<ul id="slide-out" class="sidenav">
				<li>
					<div class="user-view">
						<div class="background">
							<img class="background" src="../../resources/img/fondo principal.jpg">
						</div>
						<a href="#user">
							<img class="circle" src="../../resources/img/vinos.jpg">
						</a>
						<a href="#name">
							<span class="black-text name">sigamos mejorando</span>
						</a>
					</div>
				</li>
				<li>
					<a href="home.php">
						<i class="material-icons">home</i>Inicio</a>
				</li>
				<li>
					<a href="categorias.php">
						<i class="material-icons">description</i>Categorias
					</a>
				</li>
				<li>
					<a href="productos.php">
						<i class="material-icons">cake</i>Productos
					</a>
				</li>
				<li>
				<li>
					<a href="ventas.php">
						<i class="material-icons">attach_money</i>Ventas
					</a>
				</li>
				<li>
					<a href="inventario.php">
						<i class="material-icons">book</i>Inventario
					</a>
				</li>
				<li>
					<a href="usuarios.php">
						<i class="material-icons">person</i>Usuarios
					</a>
				</li>
				<li>
					<a href="tipo_usuario.php">
						<i class="material-icons">person</i>Tipo de Usuarios
					</a>
				</li>
				<li>
		
					<div class="divider"></div>
				</li>
				<li>
					<a class="waves-effect" href="index.php">
						<i class="material-icons">exit_to_app</i>Cerrar Sesión
					</a>
				</li>
			</ul>
		</header>
		');}
	
	public static function footerTemplate($controller)
	{
		print('
					</main>
					<footer class="page-footer">
						<div class="container">
							<div class="row">
								<div class="col s12 m6 l6">
									<h5 class="white-text">Dashboard</h5>
									<a class="white-text" href="mailto:eusojdivad0@gmail.com"><i class="material-icons left">email</i>Ayuda</a>
								</div>
								<div class="col s12 m6 l6">
									<h5 class="white-text">Enlaces</h5>
									<a class="white-text" href="http://localhost/phpmyadmin/" target="_blank"><i class="material-icons left">cloud</i>phpMyAdmin</a>
								</div>
							</div>
						</div>
						<div class="footer-copyright">
							<div class="container">
								<span>© AlphaVino, todos los derechos reservados.</span></div>
						</div>
					</footer>
					<script type="text/javascript" src="../../libraries/jquery-3.2.1.min.js"></script>
					<script type="text/javascript" src="../../resources/js/materialize.min.js"></script>
					<script type="text/javascript" src="../../resources/js/standard.js"></script>
				</body>
			</html>
		');
	}
}
?>