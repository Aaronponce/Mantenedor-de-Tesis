
<html>
	<head>
		<meta charset="UTF-8">
		<title>Mantendor</title>
		<?php header('Content-Type: text/html; charset=Windows-1252'); ?>
		<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
		<script src="./js/jquery.min.js"></script>
	</head>
	<body>
	<?php include "./navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-12">
		<h2>BUSCAR</h2>


<?php include "../modelo/busqueda.php"; ?>
</div>
</div>
</div>

<script src="./bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>

