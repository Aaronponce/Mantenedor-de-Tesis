
<html>
	<head>
		<title> Mantendor </title>
    
		<?php header('Content-Type: text/html; charset=Windows-1252'); ?>
		
    	
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/latest/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="./bootstrap/js/jquery-ui/jquery-ui.min.css" />
        <script src="http://code.jquery.com/jquery-1.9.0.js"></script>
	<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
		<script src="./js/jquery.min.js"></script>
		

		
	

	</head>
	<body>

	<?php include "./navbar.php"; ?>
	
<div class="container">
<div class="row">
<div class=" table-responsive">

		<h2>Trabajos de T&iacute;tulo</h2>
<a href="../vista/vistanuevo.php" target="_self" class="btn btn-sm btn-primary">Registrar</a>

<?php include "../modelo/paginar2.php"; ?>
	<?php
		// Cerramos conexión con MySQLi.
		mysqli_close($con);
 	?>
</div>
</div>
</div>

<script src="./bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>