<?php
include "../modelo/conexion.php";

//$user_id=null;
$sql1= "SELECT * FROM trab_tit where id = ".$_GET["id"];
$query = $con->query($sql1);
$person = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $person=$r;
  break;
}

  }
  
  include "config2.php";
  $pagina = $_GET["pagina"];
?>


<?php if($person!=null):?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<?php header('Content-Type: text/html; charset=Windows-1252'); ?>
	
	<link rel="stylesheet"  href="./bootstrap/js/jquery-ui/jquery-ui-1.10.4.custom.min.js">
	<link rel="stylesheet"  href="./bootstrap/js/jquery-ui/jquery-ui-1.10.4.custom.js">
	<link rel="stylesheet"  href="./bootstrap/js/jquery-1.10.2.js">
	<link  href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
	<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
	<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
	
</head>

<style type="text/css">
	.main{
		background: #f2f2f2;
	}
</style>
<body>
	<header>
		<div class="container">
			<h1>Registro de Tesis</h1>
		</div>
	</header>
		<a href="../vista/index.php" class="btn btn btn-primary">Inicio</a>
	 	 <!-- <a href="../vista/ver.php?pagina=1" class="btn btn btn-primary">Tabla</a> -->
	 	  <a href="../vista/ver.php?pagina=<?php echo $pagina;?>" class="btn btn btn-primary">Volver</a>

	<div class="container">
		<section class="main row">
			<div >
		<br>
		<div>
			<h4>Datos del Alumno</h1>	
		</div>
		<form action="../controlador/controlador2-editar.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
	<!--	<fieldset disabled=""> sirve para desabilitar todo-->
			<div  class="form-group">
				<div>
					<div class="col-md-2">
						<label for="PUBLICADA">Publicada</label>	
					</div>
					<div class="col-md-2">
						<input type="radio" name="publicada" value='SI' checked>Si
						<input type="radio" name="publicada" value='NO'>No
					</div>
				</div>	
			</div>
			<div class="form-group">
				<label class="col-md-2" for="ID">ID:</label>
				<div class="col-md-1">
					<input class="form-control" type="text" placeholder="" readonly name="id" value="<?php echo $person->ID; ?>"  required></input>
					<!--<input type="text" class="form-control"  name="nombre" value=""  required> 	-->
				</div>
			</div>
			<div  class="form-group">
				<div>
					<label class="col-md-2" for="FECHA">Fecha de Titulaci&oacute;n:</label>
					<div class="col-md-3" >
    					
						<div class="form-control">
    					<input  class="datepicker" name="fecha"  value="<?php $f=$person->FECHA; $f2=date("Y-m-d", strtotime($f)); echo $f2; ?>" data-validation-tipo="requerido" />
   
   						<script type="text/javascript">
							$(function(){
							$('.datepicker').datepicker({dateFormat: 'yy-mm-dd'});
							});
						</script> </div>
    				</div>
				</div>	
			</div>
			
			<div class="form-group">
				<label class="col-md-2" for="NOMBRE">Nombre:</label>
				<div class="col-md-8">
					<input class="form-control" type="text" placeholder="" name="nombre" value="<?php echo $person->NOMBRE; ?>"  required></input>
					<!--<input type="text" class="form-control"  name="nombre" value=""  required> 	-->
				</div>
			</div>


			<div class="form-group">
				<label class=" col-md-2" for="EMAIL">Correo:</label>
				<div class="col-md-3">
					<input type="email" class="form-control" value="<?php echo $person->EMAIL; ?>" name="email" required>
				</div>
			</div>
			
			<div class="form-group">
					<label class=" col-md-2" for="CARRERA">Carrera:</label>		
				<div class="col-md-3">
  					<select class="form-control" id="sel1" name="carrera" required>
  						<?php  carrera(); ?>

  					</select>
				</div>
			</div>
  				<div class="form-group">
						<label class=" col-md-2" for="MENCION">MENCION:</label>		
					<div class="col-md-3">
  						<select class="form-control" id="sel1" name="men_principal"   required>
  						<?php mencion(); ?>
  						</select>
					</div>
				</div>


			<div>
				<h4>Datos del trabajo</h1>	
			</div>
				<div class="form-group ">
					<label class="col-md-2" for="TITULO">T&iacute;tulo del Trabajo:</label>
					<div class="col-md-8">
						<input class="form-control" id="TITULO" type="text" placeholder="Nombre del Trabajo:" name="titulo" value="<?php echo $person->TITULO; ?>" required></input> 	
					</div>
				</div>
			<div class="form-group">
						<label class=" col-md-2" for="Profesor Guia">Profesor Guia:</label>		
					<div class="col-md-2">
  						<select class="form-control" id="sel1" name="prf_guia" >
  						<?php profe_guia(); ?>
  						</select>
					</div>
					<label class="col-md-1" for="Otro Profesor">Otro Profesor:</label>
				<div class="col-md-5">
					<!--<input class="form-control" id="nombre" type="text" placeholder="Nombre:" name="nombre" value=""></input> -->
					<input class="form-control" type="text" placeholder="Profesor" name="OtroProfesorguia" value=""></input> 	
				</div>
			</div>
			<div class="form-group">
						<label class=" col-md-2" for="PRF_COR1">Profesor Correferente I:</label>		
					<div class="col-md-2" >
  						<select class="form-control" name="prf_cor1" >
    						<?php profe_cor1();?>
  						</select>
					</div>
					<label class="col-md-1" for="Otro Profesor">Otro Profesor:</label>
				<div class="col-md-5">
					<input class="form-control" id="OtroProfesor" type="text" name="OtroProfesorCor" placeholder="Profesor" value="" ></input> 	
				</div>
				</div>
			<div class="form-group">
						<label class=" col-md-2" for="PRF_COR2">Profesor Correferente II:</label>		
					<div class="col-md-2">
  						<select class="form-control" name="prf_cor2" >
  							<?php profe_cor2();?>
  						</select>
					</div>
					<label class="col-md-1" for="Otro Profesor">Otro Profesor:</label>
				<div class="col-md-5">
					<input class="form-control" id="OtroProfesor" type="text" name="OtroProfesorCorII" placeholder="Profesor" value="" ></input> 	
				</div>
				</div>
			<div class="form-group">
  				<label class=" col-md-2" for="RESUMEN">Resumen:</label>
  				<div class="col-md-8">
  					<textarea class="form-control" type="text" rows="5" name="resumen" placeholder="<?php echo $person->RESUMEN; ?>" value="" ></textarea>
  				</div>
			</div>

			<div class="form-group">

				
                    <label class=" col-md-2" for="archivo"> Archivo:</label>
                    <div class="col-md-4">
                        <input name="archivo" type="file"></input>
                    </div>
                    <div class="col-md-3"><a href="../modelo/mostrarA.php?id=<?php echo $person->ID;?>" target="_blank" class="btn">Ver Documento</a></div>

                  
                  
				
			</div>


			<div class="col-md-12">
<input type="hidden" name="ID" value="<?php echo $person->ID; ?>">
  <button type="submit" class="btn btn-primary">Actualizar</button>
  <a href="../vista/ver.php?pagina=<?php echo $pagina;?>" class="btn btn btn-primary">Volver</a>
</div>
			</div>
		</form>	

	</div>
	
 </body>
</html>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>