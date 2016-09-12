<?php 
// conexión a la base de datos.
include 'conexion.php';

 
//$registros  entrega la cantidad de registros a mostrar.
$registros = 10;
 

$contador = 1;
 $pagina = $_GET['pagina'];
/**
 * Se inicia la paginación, si el valor de $pagina es 0 le asigna el valor 1 e $inicio entra con valor 0.
 * si no es la pagina 1 entonces $inicio sera igual al numero de pagina menos 1 multiplicado por la cantidad de registro
 */
if (!$pagina) { 
    $inicio = 0; 
    $pagina = 1; 
} else { 
    $inicio = ($pagina - 1) * $registros; 
} 

?>
	<!-- Se crea la tabla que mostrara los datos tabulados -->
	<table class="table table-bordered table-hover table-condensed table-responsive " >
<thead>
	<th>Publicada</th>
	<th>Fecha de Titulaci&oacute;n</th>
	<th>Nombre / Email  </th>
	
	<th>Carrera</th>
	<th>T&iacute;tulo</th>
	<th></th>
</thead>		
		<tbody> 
			<?php
			$resultados = mysqli_query($con,"SELECT * FROM trab_tit");
 
			//Guardamos la cantidad total de registros dentro de la tabla de la BD
			$total_registros = mysqli_num_rows($resultados); 
 
			//Generamos otra consulta con los limites a mostar en la tabla en la vista
			$resultados = mysqli_query($con,"SELECT * FROM trab_tit ORDER BY FECHA DESC LIMIT $inicio, $registros");	
 
			//Con ceil redondearemos el resultado total de las paginas 4.53213 = 5
			$total_paginas = ceil($total_registros / $registros); 		  			
 
			// Si la variable $total_registro tiene datos, los juntamos en un arreglo para mostrar los datos.
		if ($total_registros) {
			while ($r = mysqli_fetch_array($resultados, MYSQLI_ASSOC)) {
			?>		
					
	<tr scope="row">
		<td width="0%"><?php echo $r["PUBLICADA"]; ?></td>
		<td width="10%"><?php $f=$r["FECHA"]; $f2=date("d/m/Y", strtotime($f)); echo $f2; ?></td>
		<td width="15%"><?php echo $r["NOMBRE"]; echo"\n"; echo $r["EMAIL"]; ?></td>
		
		<td width="10%"><?php include "lista_carrera2.php"; ?></td>
		<td width="45%"><?php echo $r["TITULO"]; ?></td>
		<td width="23%">
			<a href="./editar.php?id=<?php echo $r["ID"];?>&pagina=<?php echo $pagina; ?>" class="btn btn-sm btn-primary">Editar</a>
			<!--<a href="./detalle.php?id=<?php echo $r["ID"];?>" class="btn btn-sm btn-info">Detalles</a>-->
			<a href="./detalle.php?id=<?php echo $r["ID"];?>" onclick="javascript:void window.open('./detalle.php?id=<?php echo $r["ID"];?>','1473719437846','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;" class="btn btn-info">Detalle</a>
		 	<!-- <a href="#" id="del-<?php echo $r["ID"];?>" class="btn btn-sm btn-danger">Eliminar</a>
			<script>
				$("#del-"+<?php echo $r["ID"];?>).click(function(e){
				e.preventDefault();
				p = confirm("Estas seguro?");
				if(p){
					window.location="./php/eliminar.php?id="+<?php echo $r["ID"];?>;

				}

			});
			</script> -->
		</td>

	</tr>	
 
					<?php			
					
			 	   $contador++;
			    }		
			 } else {
			  echo "<font color='darkgray'>(sin resultados)</font>";
			}
 
			mysqli_free_result($resultados);	
			?>
		</tbody>
	</table>
 
	<div class="centered" align="center">	
		<?php
		if ($total_registros) {
			/**
			 * Acá activamos o desactivamos la opción "< Anterior", si estamos en la pagina 1 nos dará como resultado 0 por ende NO
			 * activaremos el primer if y pasaremos al else en donde se desactiva la opción anterior. Pero si el resultado es mayor
			 * a 0 se activara el href del link para poder retroceder.
			 */
			if (($pagina - 1) > 0) {
				echo "<a  href='ver.php?pagina= " . ($pagina-1) . " 'class='btn btn-sm btn-primary' >< Anterior </a>";
			} else {
				echo "<a href='#' class='btn btn-sm btn-primary'>< Anterior</a>";
			}
 
			// Generamos el ciclo para mostrar la cantidad de paginas que tenemos.
			for ($i = 1; $i <= $total_paginas; $i++) {
				if ($pagina == $i) {
					echo "<a href='#' class='btn btn-sm btn-default'>". $pagina ."</a>"; 
					$pag_actual = $i;
				} else {
					echo "<a href='ver.php?pagina=$i' class='btn btn-sm btn-primary'>$i</a> "; 
				}	
			}
 
	  		/**
	  		 * Igual que la opción primera de "< Anterior", pero acá para la opción "Siguiente >", si estamos en la ultima pagina no podremos
	  		 * utilizar esta opción.
	  		 */
			if (($pagina + 1)<=$total_paginas) {
				echo "<a href='ver.php?pagina=" . ($pagina+1) . "' class='btn btn-sm btn-primary'>Siguiente ></a>";
			} else {
				echo "<a href='#' class='btn btn-sm btn-primary'>Siguiente ></a>";
			}	
			return $pag_actual;	 
		}
		?>	
	</div> 
 
	