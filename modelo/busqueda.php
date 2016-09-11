<?php

include "conexion.php";

$user_id=null;
$sql1= "SELECT * from trab_tit  where NOMBRE like '%$_GET[s]%' or EMAIL like '%$_GET[s]%' ";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover">
<thead>
	<th>Nombre</th>
	<th>Carrera</th>
	<th>Email</th>
	<th>Fecha</th>
	
	<th></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	
	<td><?php echo $r["NOMBRE"]; ?></td>
	<td><?php include "lista_carrera2.php"; ?></td>
	<td><?php echo $r["EMAIL"]; ?></td>
	<td><?php echo $r["FECHA"]; ?></td>
	<!-- <td><?php // echo $r["phone"]; ?></td> -->
	<td style="width:150px;">
		<a href="./editar.php?id=<?php echo $r["ID"];?>" class="btn btn-sm btn-primary">Editar</a>
		<a href="#" id="del-<?php echo $r["ID"];?>" class="btn btn-sm btn-danger">Eliminar</a>
		<script>
		$("#del-"+<?php echo $r["ID"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="../controlador/eliminar.php?ID="+<?php echo $r["ID"];?>;

			}

		});
		</script>
	</td>
	
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
