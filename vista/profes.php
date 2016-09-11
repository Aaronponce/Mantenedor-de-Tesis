
<html>
	<head>
		
		<title> Mantendor </title>
   <?php header('Content-Type: text/html; charset=Windows-1252'); ?>
		<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
  
        <link rel="stylesheet" href="./bootstrap/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" href="./bootstrap/js/jquery-ui/jquery-ui.min.css" />
        <link rel="stylesheet" href="./bootstrap/css/style.css" />
		<script src="./js/jquery.min.js"></script>
	</head>
	<body>
	<?php include "./navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-lg-push-12 table-responsive">
		<h2>Profesores Gu&iacute;as</h2>
<!-- Button trigger modal -->
  

  <div class="col-lg-7">
            <label for="PRF_GUIA">Seleccione un Profesor para ver sus alumnos asociados</label>   
          	<form action="./tablaP.php" method="post">
              <select class="form-control" id="sel1" name="PRF_GUIA" required >
              <option selected disabled></option>
              <option value="mav">Marcos Aravena Vivar</option>
              <option value="gam">Gabriel Astudillo Mu&ntilde;oz</option>
              <option value="mbm">Marta Barria Martinez</option>
              <option value="ccv">Cristian Carrion Valencia</option>
              <option value="rms">Roberto Mu&ntilde;oz Soto</option>
              <option value="rnl">Rene Noel Lopez</option>
              <option value="cbc">Carlos Becerra Castro</option>
              <option value="roo">Rodrigo Olivares Ordenes</option>
              <option value="epg">Eliana Providel Godoy</option>
              <option value="ctt">Carla Taramasco Toro</option>
              <option value="Marcelo Mendoza">Marcelo Mendoza Rocha</option>
              <option value='Andés Ramos Magna'>Andr&eacute;s Ramos Magna</option>

              
              </select>
              <input type="submit" value="Mostrar">
          </form>
          
       
        </div> 
     


<!--<?php // include "php/tabla.php"; ?>-->
</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>