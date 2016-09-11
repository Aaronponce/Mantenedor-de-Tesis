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
<div class="col-md-9">
		<h2>Detalle del individuo</h2>

<?php include "../modelo/detallar.php";?>

</div>
</div>
</div>

<script src="./bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>