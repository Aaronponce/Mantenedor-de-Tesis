<?php
/*
Reglas de validacion de datos

*/
function validarfecha($fecha){
	if(!strnatcasecmp($fecha, "")){
		return false;
	}else{
		return true;
	}
}
function validarnombre($nombre){
	if (strlen($nombre)<3) {
		return false;
	}elseif (!preg_match("/^[a-zA-Z[:space:]\p{L}]+$/", $nombre)) {
		return false;
	}else{
		return true;
	}
}
function validaremail($email){
	if (!strnatcasecmp($email, "")) {
		return false;
	}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		return false;
	}else{
		return true;
	}
}
function validarcarreramencion($carrera){
	if (!preg_match("/^[a-zA-Z[:space:]\p{L}]+$/", $carrera)) {
		return false;
	}elseif (!strnatcasecmp($carrera, "")) {
		return false;
	}else{
		return true;
	}
}
function validartitulo($titulo){
	if (!strnatcasecmp($titulo, "")){
		return false;
	}else{
		return true;
	}
}
function validarprf($prf_guia){
	if (!preg_match("/^[a-zA-z[:space:]\p{L}]+$/", $prf_guia)) {
		return false;
	}elseif(!strnatcasecmp($prf_guia, "")){
		return false;
	}else{
		return true;
	}
}
function validarresumen($resumen){
	if (!strnatcasecmp($resumen, "")) {
		return false;
	}else{
		return true;
	}
}
function validararchivo($FILE_NAME){
	if(!strnatcasecmp($FILE_NAME, "")){
		return false;
	}else{
		return true;
	}
}

?>