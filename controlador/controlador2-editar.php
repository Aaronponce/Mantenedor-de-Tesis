<?php

include('../modelo/clsPersona-editar.php');
include('control-validar.php');

function comparar($post1,$post2){
	
	if (strnatcasecmp($post1, "")) {
		$real=$post2;
	}else{
		$real=$post1;
	}
	if ((strnatcasecmp($post1, ""))&&(strnatcasecmp($post2, ""))) {
		$real="";
	}
	return $real;
}
 $id= $_POST['id']; 
 
 
 $publicada=$_POST['publicada'];
 //$fecha=$_POST['fecha'];
 $fecha = date('y-m-d',strtotime($_POST['fecha']));
 $nombre=$_POST['nombre'];
 $email=$_POST['email'];
 $carrera=$_POST['carrera'];
 $men_principal=$_POST['men_principal'];
 $titulo=$_POST['titulo'];
 $prf_guia=$_POST['prf_guia'];

 $prf_cor1=$_POST['prf_cor1'];
 $prf_cor2=$_POST['prf_cor2'];
 
 $resumen=$_POST['resumen'];



$archivo=$_FILES['archivo']['tmp_name'];
$FILE_NAME=$_FILES["archivo"]["name"];
$tipo_archivo=$_FILES['archivo']['type'];
$FILE_TYPE=$_FILES['archivo']['size'];


	$file=fopen($archivo, "rb");
	$FILE_DATA=fread($file, filesize($archivo));
	$FILE_DATA=addslashes($FILE_DATA);
	fclose($file);




if(validareditar($nombre,$titulo)==true){
	$ObjPersona=new clsPersona ($id, $publicada, $fecha, $nombre, $email, $carrera, $men_principal, $prf_guia, $prf_cor1, $prf_cor2, $titulo, $resumen, $FILE_NAME, $FILE_DATA, $FILE_TYPE);
	$id=$ObjPersona->get_id();	
	$publicada=$ObjPersona->get_publicada();
					  
	$fecha=$ObjPersona->get_fecha();
	$nombre=$ObjPersona->get_nombre();
	$email=$ObjPersona->get_email();
	$carrera=$ObjPersona->get_carrera();
	$men_principal=$ObjPersona->get_men_principal();
	$titulo=$ObjPersona->get_titulo();
	$prf_guia=$ObjPersona->get_prf_guia();
	$prf_cor1=$ObjPersona->get_prf_core1();
	$prf_cor2=$ObjPersona->get_prf_core2();
	$resumen=$ObjPersona->get_resumen();
	
	$FILE_NAME=$ObjPersona->get_FILE_NAME();
	$FILE_DATA=$ObjPersona->get_File_DATA();
	$FILE_TYPE=$ObjPersona->get_FILE_TYPE();
	
	
		$ObjPersona->modificar();
		echo  "<script>alert(\"Actualizado exitosamente.\");window.location='../vista/ver.php?pagina=1';</script>";
		
}


?>