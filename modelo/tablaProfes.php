<?php

include "conexion.php";

//$user_id=null;
@$selecOP=$_POST["PRF_GUIA"];
if($selecOP=="") echo "\t no se selecciono ning&uacute;n profesor";
$sql1= "SELECT * from trab_tit";
$query =$con->query($sql1);


?>


<?php if($query->num_rows>0):?>
	<h4><?php include "lista_profes.php"; ?></h4>
<table class="table table-bordered table-hover table-condensed  " >
<thead>
	
	
	<th>Nombre del Alumno </th>
	<th> Email Alumno</th>
	<th>Carrera Alumno</th>
	<th>T&iacute;tulo</th>
	<th></th>
</thead>

<?php while ($r=$query->fetch_array()):?>
	<?php if ($r["PRF_GUIA"]==$selecOP): ?>
<tr scope="row">
	
	
	
	<td width="10%"><?php echo $r["NOMBRE"]; ?></td>
	<td width="0%"><?php echo $r["EMAIL"]; ?></td>
	<td width="0%"><?php include "lista_carrera2.php"; ?></td>
	<td width="60%"><?php echo $r["TITULO"]; ?></td>
	<td width="25%">
		<a href="../modelo/mostrarA.php?id=<?php echo $r["ID"];?>" target="_blank" class="btn btn-sm btn-primary">Ver Documento</a>
		<a href="./detalle.php?id=<?php echo $r["ID"];?>" class="btn btn-sm btn-info">Detalles</a>

		
	
	</td>
</tr>

<?php endif ?>

<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
