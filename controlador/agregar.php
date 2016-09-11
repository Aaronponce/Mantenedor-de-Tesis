<?php

if(!empty($_POST)){
	if(isset($_POST["NOMBRE"]) ){
		if($_POST["NOMBRE"]!=""&& $_POST["EMAIL"]!=""&&$_POST["CARRERA"]!=""&&$_POST["MEN_PRINCIPAL"]!=""&&$_POST["TITULO"]!=""&&$_POST["PRF_GUIA"]!=""){
			include "../modelo/conexion.php";
			
			$sql = "INSERT INTO trab_tit(PUBLICADA,NOMBRE,CARRERA,MEN_PRINCIPAL,EMAIL,TITULO,PRF_GUIA) value (\"$_POST[PUBLICADA]\",\"$_POST[NOMBRE]\",\"$_POST[CARRERA]\",\"$_POST[MEN_PRINCIPAL]\",\"$_POST[EMAIL]\",\"$_POST[TITULO]\",\"$_POST[PRF_GUIA]\")";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Agregado exitosamente.\");window.location='../vista/ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar.\");window.location='../vista/ver.php';</script>";

			}
		}
	}
}



?>

<!-- &&isset($_POST["EMAIL"]) &&isset($_POST["CARRERA"]) &&isset($_POST["FECHA"]) &&isset($_POST["TITULO"]) -->