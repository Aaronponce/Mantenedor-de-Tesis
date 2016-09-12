<?php

include('../modelo/clsPersona.php');
//include('../modelos/validador.php');

include('control-validar.php');
include ('../Config/config.php');
//$ruta="../archivos/";
/*function comparar($post1,$post2){
	
	if ($post1==null) {
		$real=$post2;
	}else{
		$real=$post1;
	}
	return $real;
}*/
include '../modelo/conexion.php';

$Max_ID=0;
$id = 0;


		//echo "problemas2";
		mysql_select_db('test');
		$rs= mysql_query("SELECT MAX(ID) AS ID FROM trab_tit");
		if(!$rs){ die('No se pudo consultar: ' . mysql_error());}
		//$r= mysqli_fetch_array($rs, MYSQLI_ASSOC)
		//$r= mysqli_fetch_row($rs);

		//$id1= mysql_result($rs, 0);
		$row=mysql_fetch_row($rs);
		$id1= $row[0];
		//echo "aqui se queda pegao";
		$Max_ID=(int)$id1+1;
		
		//echo "no sale de aqui";
		mysql_close($con);
		//$id1=  (integer)$r["ID"];
		//$Max_ID=(int)$id1+1;

echo $id=$Max_ID;
//$id=$_POST['id'];
//$ultima_id = mysql_insert_id();
//echo $ultima_id;
//$id = $ultima_id +1 ;

$publicada=$_POST['publicada'];
//$fecha = date('Y/m/d',strtotime($_POST['fecha']));
$fecha = $_POST['fecha'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];
//$carrera=$_POST['carrera'];
//$men_principal=$_POST['men_principal'];

$carrera = $_POST['carrera'];
$men_principal=$_POST['men_principal'];
$prf_guia=$_POST['prf_guia'];
$prf_cor1=$_POST['prf_cor1'];
$prf_cor2=$_POST['prf_cor2'];

$titulo=$_POST['titulo'];
/*$prf_guia=$_POST['prf_guia'];
$prf_cor1=$_POST['prf_cor1'];
$prf_cor2=$_POST['prf_cor2'];*/
$resumen=$_POST['resumen'];



$archivo=$_FILES['archivo']['tmp_name'];
$FILE_NAME=$_FILES["archivo"]["name"];
$tipo_archivo=$_FILES['archivo']['type'];
$FILE_TYPE=$_FILES['archivo']['size'];

$file=fopen($archivo, "rb");
$FILE_DATA=fread($file, filesize($archivo));
$FILE_DATA=addslashes($FILE_DATA);
fclose($file);


if(validar($fecha,$nombre,$carrera,$men_principal,$titulo,$prf_guia,$prf_cor1,$prf_cor2,$resumen,$FILE_NAME)){
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
		//"<script>alert('El Registro ya existe')</script>";
		echo  "<script>alert(\"El Registro ya existe.\");window.location='../vista/ver.php?pagina=1';</script>";
	}else{
		echo $ObjPersona->incluir();

		echo"<script>alert('El Registro ha sido registrado con exito')</script>";
	echo  "<script>alert(\"Actualizado exitosamente.\");window.location='../vista/ver.php?pagina=1';</script>";
		}

}

?>