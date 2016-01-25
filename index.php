<?php include("php/conexion.php");

?>
<!DOCTYPE html>
<html lang="en" ng-app="ajax">
<head>
	<meta charset="UTF-8">
	<title>colegios</title>
	<script src="js/angular.min.js"></script>
	<script src="js/controller.js"></script>
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/palette.css">
</head>
<body class="fondo-light-verde" ng-controller="ajaxController">


	<div class="contenedor ">
		<div class="header">
			<h1>Colegios en red </h1>
			<div class="nav">
				<div class="menu"><ul >
				<li><a href="#" >Inicio</a></li>
				<li><a href="#">Colegios</a></li>
				<li><a href="#">Buscar</a></li>
			</ul></div>
			<div class="fondo fondo-dark-verde"></div>
			
		</div>
		</div>
		
		<div class="cuerpo">
		<a href="" ng-click="prueba()">prueba</a>
			<h3>colegios mas visitados </h3>

			<div ng-repeat="colegio in texto"><div class="logo"><img src={{colegio.logo}}><p>{{"nombre: "+colegio.nombre}}</p><p>{{"Comuna: "+colegio.comuna}}</p></div></div>
			
		</div>
		<div class="footer">
			<h2>Nuestro proyecto</h2>
			<p>Colegios en red es un proyecto de integracion pensado en los colegios</p>
		</div>
	</div>
</body>
</html>