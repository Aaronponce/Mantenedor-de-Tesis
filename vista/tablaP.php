<html>
	<head>
		
		<title>Mantenedor</title>
		<?php header('Content-Type: text/html; charset=Windows-1252'); ?>
		<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
		<script src="./js/jquery.min.js"></script>
	</head>
	<body>
	<?php include "./navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-12">
		<h2>Profesores Gu&iacute;as</h2>
<a href="./index.php" class="btn btn btn-primary">Inicio</a>
<a href="./profes.php" class="btn btn btn-primary">Lista Profesores</a>


<?php include "../modelo/tablaProfes.php";?>




</div>
</div>
</div>

<script src="./bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>