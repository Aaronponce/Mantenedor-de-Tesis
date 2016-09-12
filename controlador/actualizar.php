<?php

if(!empty($_POST)){

	if( isset($_POST["NOMBRE"])){
echo "Actualizando...";
		if($_POST["NOMBRE"]!=""&& $_POST["EMAIL"]!=""&&$_POST["CARRERA"]!=""){

			include "../modelo/conexion.php";
			
			$sql = "UPDATE trab_tit set PUBLICADA=\"$_POST[PUBLICADA]\",NOMBRE=\"$_POST[NOMBRE]\",EMAIL=\"$_POST[EMAIL]\",CARRERA=\"$_POST[CARRERA]\",FECHA=\"$_POST[FECHA]\",TITULO=\"$_POST[TITULO]\" where ID=".$_POST["ID"];

			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../vista/ver.php?pagina=1';</script>";

			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../vista/ver.php';</script>";

			}
		}
	}
}



?>


<!-- && isset($_POST["EMAIL"]) && isset($_POST["CARRERA"]) && isset($_POST["FECHA"]) && isset($_POST["TITULO"]) -->