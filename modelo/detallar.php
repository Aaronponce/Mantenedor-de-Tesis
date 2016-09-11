<?php
include "conexion.php";

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
  include "config.php";
  include "../vista/config2.php";
?>

<?php if($person!=null):?>


	 <div class="form-group">
<a href="../vista/index.php" class="btn btn btn-primary">Inicio</a>
	 	  <a href="javascript:window.history.back();" class="btn btn btn-primary">Tabla</a>
<table class="table table-bordered table-hover table-condensed  " >

	<tr>
	<th>Publicada</th>
	<td> <?php echo $person->PUBLICADA; ?></td></tr>
	<tr>
	<th>Fecha de Titulaci&oacute;n</th>
	<td> <?php $f=$person->FECHA; $f2=date("d/m/Y", strtotime($f)); echo $f2; ?></td></tr>
	<tr>
	<th>Nombre </th> <td><?php echo $person->NOMBRE; ?></td></tr>
	<tr>
	<th> Email</th><td><?php echo $person->EMAIL; ?></td></tr>
	<tr>
	<th>Carrera </th><td><?php  echo $car1; ?></td></tr>
	<tr>
	<th>Mencion Principal</th><td><?php echo $men; ?></td></tr>
	<tr>
	<th>Profesor Gu&iacute;a</th>
		<td><?php echo $prf; ?></td>
	</tr>
	<tr>
		<th>Profesor Correferente 1</th>
		<td><?php echo $prfc1; ?></td>
	</tr>
	<tr>
		<th>Profesor Correferente 2</th>
		<td><?php echo $prfc2; ?></td>
	</tr>

	<tr>
	<th>T&iacute;tulo</th><td><?php echo $person->TITULO; ?></tr>
	<tr>
	<th>Resumen</th><td><?php if($person->RESUMEN!="") echo $person->RESUMEN; else echo "Sin Info" ?></tr>
	
	

	 	  
	 	 <!-- <button type="submit" class="btn btn btn-primary">Tabla</button> -->
	 	  
</div>

<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>