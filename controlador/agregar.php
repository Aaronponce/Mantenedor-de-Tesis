<?php

if(!empty($_POST)){
	if(isset($_POST["nombre"]) ){
		if($_POST["nombre"]!=""&& $_POST["password"]!=""){
			include "../modelo/conexion.php";
			
			$sql = "INSERT INTO login(RUT,Nombre,Password,Email) value (\"$_POST[RUT]\",\"$_POST[nombre]\",\"$_POST[password]\",\"$_POST[email]\")";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Agregado exitosamente.\");window.location='../vista/index.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar.\");window.location='../vista/login.php';</script>";

			}
		}
	}
}



?>

<!-- &&isset($_POST["EMAIL"]) &&isset($_POST["CARRERA"]) &&isset($_POST["FECHA"]) &&isset($_POST["TITULO"]) -->