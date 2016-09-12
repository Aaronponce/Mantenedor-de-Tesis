<?php
include('../modelo/validador.php');

/*
funcion que se encarga de validar los datos del formularios a traves de las reglas 
establecidas en ../modelos/validador.php
*/


function validar($fecha,$nombre,$carrera,$men_principal,$titulo,$prf_guia,$prf_cor1,$prf_cor2,$resumen,$FILE_NAME){
	
	$vfecha=1;
	$vnombre=1;
	$vcarrera=1;
	$vmen_principal=1;
	$vtitulo=1;
	$vprfguia=1;
	$vprfcore1=1;
	$vprfcore2=1;
	$vresumen=1;
	$varchivo=1;

	if (!validarfecha($fecha)) {
		$vfecha=0;
		echo "error fecha";
	}
	if (!validarnombre($nombre)){
		$vnombre=0;
		echo "error nombre";
	}
	if (!validarcarreramencion($carrera)) {
		 $vcarrera=0;
		  echo "error carrera";
	}
	if (!validarcarreramencion($men_principal)) {
		$vmen_principal=0;
		echo "error mencion";
	}
	if (!validartitulo($titulo)) {
		$vtitulo=0;
		echo "error titulo";
	}
	if (!validarprf($prf_guia)) {
		$vprfguia=0;
		echo "error prf guia";
	}
	if (!validarprf($prf_cor1)) {
		$vprfcore1=0; 
		echo "error core1";
	}
	if (!validarprf($prf_cor2)) {
		$vprfcore2=0;
		echo "error core2";
	}
	if (!validarresumen($resumen)) {
		$vresumen=0;
		echo "error resumen";
	}
	if (!validararchivo($FILE_NAME)) {
		$varchivo=0;
	}
	if(($vfecha!==0 )&& ($vnombre!==0) && ($vcarrera!==0) && ($vmen_principal!==0) && ($vtitulo!==0) && ($vprfguia!==0) && ($vprfcor1!==0) && ($vprfcor2!==0) && ($vresumen!==0) && ($varchivo!==0)){
		$validar =true;
	}else{
		$validar =false;
	}
return $validar;
}





function validareditar($nombre,$titulo){
	if (!validarnombre($nombre)){
		$vnombre=0;
		echo "error nombre";
	}
	if (!validartitulo($titulo)) {
		$vtitulo=0;
		echo "error titulo";
	}
	if (($vnombre!==0) && ($titulo!==0)) {
		$validar=true;
	}else{
		$validar=false;
	}
	return $validar;
}

?>