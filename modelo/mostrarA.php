<?php
include ("../modelo/clsDatos.php");
header('Content-type: application/pdf');
$ObjDatos=new clsDatos();
$sql= "SELECT * FROM trab_tit where id = ".$_GET["id"];
$datos_desordenados=$ObjDatos->filtro($sql);
if($datos=$ObjDatos->proximo($datos_desordenados)){
			if (!strnatcasecmp($datos['FILE_NAME'], "")) {
				echo  "<script>alert(\"NO hay Documento.\");window.location='../vista/ver.php?pagina=1';</script>";
	 }else{
	 	 		echo  $datos['FILE_DATA'];
	 } 
} 

?>
