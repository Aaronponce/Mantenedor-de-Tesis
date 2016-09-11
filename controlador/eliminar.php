<?php

if(!empty($_GET)){
			include "../modelo/conexion.php";
			
			$sql = "DELETE FROM trab_tit WHERE ID=0";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Eliminado exitosamente.\");window.location='../vista/ver.php?pagina=1';</script>";
			}else{
				print "<script>alert(\"No se pudo eliminar.\");window.location='../vista/ver.php';</script>";

			}
}

?>