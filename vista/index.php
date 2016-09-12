<?php
session_start();
?>
<html>
	<head>
		<style type="text/css">
		h2 {
    text-align: center;
}



</style>
		<title>P&aacute;gina de Inicio</title>
		<?php header('Content-Type: text/html; charset=Windows-1252'); ?>
		<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
	</head>
	<body>
	<?php include "./navbar.php"; ?>
	<div class="container">
	<div class="row">
	<div class="col-md-12">
			<h2>Bienvenido</h2>
			<p class="lead">Esta es la pagina de inicio</p>
			<p>Las funciones permitidas por el momento son:</p>
			<ol>
				<li>Buscar por nombre y email</li>
				<li>Ver la tabla de los titulados por cada 10 registros</li>
				<li>Agregar titulados desde el boton "Agregar".</li>
				<li>Seleccionar el boton "Editar" para modificar los datos del titulado seleccionado.</li>
				<li>Seleccionar el boton "Detalles" para ver en datalle los datos del titulado seleccionado.</li>
				<li>Ver los alumnos que cada profesor tiene asignado.</li>
			</ol>
			<br>
			<p>Detalles de mantencion:</p>
			<ol>
				<li></li>
			</ol>
			

	</div>
	</div>
	</div>
	</body>
</html>