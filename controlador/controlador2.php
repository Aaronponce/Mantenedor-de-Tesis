<?php

include('../modelo/clsPersona.php');
//include('../modelos/validador.php');
include '../modelo/conexion.php'; 
include('control-validar.php');
include ('../Config/config.php');
include('../modelo/crearselect.php');
function comparar($post1,$post2){
	
	if ($post1==null) {
		$real=$post2;
	}else{
		$real=$post1;
	}
	return $real;
}


$Max_ID=0;
$id = 0;
mysql_select_db('test');
$rs= mysql_query("SELECT MAX(ID) AS ID FROM trab_tit");
	if(!$rs){ 
		die('No se pudo consultar: ' . mysql_error());
	}
	$row=mysql_fetch_row($rs);
	$id1= $row[0];
	$Max_ID=(int)$id1+1;
	mysql_close($con);
		

$id=$Max_ID;
$publicada=$_POST['publicada'];
$fecha = $_POST['fecha'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$titulo=$_POST['titulo'];
$resumen=$_POST['resumen'];

/*Conversion a claves desde la configuracion*/
//echo $palabra=$_POST['prf_guia'];
//echo $palabraeditada;
$carrera = array_search($_POST['carrera'], $carreras);
$men_principal=array_search($_POST['men_principal'], $menciones);
$prf_guia=array_search($palabra, $profesores);
echo $prf_guia;
echo $prf_cor1=array_search($_POST['prf_cor1'], $profesores);
echo $prf_cor2=array_search($_POST['prf_cor2'], $profesores);

/*Datos del Archivo*/

$archivo=$_FILES['archivo']['tmp_name'];
$FILE_NAME=$_FILES["archivo"]["name"];
$tipo_archivo=$_FILES['archivo']['type'];
$FILE_TYPE=$_FILES['archivo']['size'];

$file=fopen($archivo, "rb");
$FILE_DATA=fread($file, filesize($archivo));
$FILE_DATA=addslashes($FILE_DATA);
fclose($file);

/*Validacion y Creacion de Persona*/

//if(validar($fecha,$nombre,$carrera,$men_principal,$titulo,$prf_guia,$prf_cor1,$prf_cor2,$resumen,$FILE_NAME)){
	$ObjPersona=new clsPersona ($id,$publicada,$fecha, $nombre, $email, $carrera, $men_principal, $prf_guia, $prf_cor1, $prf_cor2, $titulo, $resumen, $FILE_NAME, $FILE_DATA, $FILE_TYPE);
	 $id=$ObjPersona->get_id();	
	 $publicada=$ObjPersona->get_publicada();			  
	 $ingreso=$ObjPersona->get_fecha();
	 $nombre=$ObjPersona->get_nombre();
	 $email=$ObjPersona->get_email();
	 $carrera=$ObjPersona->get_carrera();
	 $men_principal=$ObjPersona->get_men_principal();
	 $titulo=$ObjPersona->get_titulo();
	 $prf_guia=$ObjPersona->get_prf_guia();
	 $prf_cor1=$ObjPersona->get_prf_cor1();
	 $prf_cor2=$ObjPersona->get_prf_cor2();
	 $resumen=$ObjPersona->get_resumen();

	$FILE_NAME=$ObjPersona->get_FILE_NAME();
	$FILE_DATA=$ObjPersona->get_File_DATA();
	$FILE_TYPE=$ObjPersona->get_FILE_TYPE();
	
	if ($ObjPersona->buscar()==true) {
		//echo  "<script>alert(\"El Registro ya existe.\");window.location='../vista/ver.php?pagina=1';</script>";
	}else{
		$ObjPersona->incluir();
		echo"<script>alert('El Registro ha sido registrado con exito')</script>";
		//echo  "<script>alert(\"Actualizado exitosamente.\");window.location='../vista/ver.php?pagina=1';</script>";
		}

//}

?>