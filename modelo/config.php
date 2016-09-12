<?php

//este archivo se encarga de hacer la conversion de valores solamente para la consulta de la dB

//lista de carreras **
$car=$person->CARRERA;
	$car1="";
	if($car=="civinf")
		$car1= "Ingenieria civil Inform&aacute;tica\n";
	else if($car=="inf")
		$car1= "Ingenieria en Inform&aacute;tica\n";
	elseif ($car=="ejeinf") {
		$car1= "Ingenieria en Ejecuci&oacute;n en Inform&aacute;tica\n";
	}
//**	

	//lista de menciones **
$men="";
	if($person->MEN_PRINCIPAL=="sw")
	$men="Gesti&oacute;n de Proyectos de Software";
if($person->MEN_PRINCIPAL=="gestion")
	$men="Gesti&oacute;n y Dise&ntilde;o de Bases de Datos";
if($person->MEN_PRINCIPAL=="redes")
	$men="Redes y Telecomunicaciones";
if($person->MEN_PRINCIPAL=="sinmenc")
	$men="Sin Menci&oacute;n";

//**

//lista profes guias **
$prf="";
if($person->PRF_GUIA!=""){
if($person->PRF_GUIA=="mav")
	$prf="Marcos Aravena Vivar";else
if($person->PRF_GUIA=="gam")
	$prf="Gabriel Astudillo Mu&ntilde;oz";else
if($person->PRF_GUIA=="mbm")
	$prf="Marta Barria Martinez";else
if($person->PRF_GUIA=="ccv")
	$prf="Cristian Carrion Valencia";else
if($person->PRF_GUIA=="rms")
	$prf="Roberto Mu&ntilde;oz Soto";else
if($person->PRF_GUIA=="rnl")
	$prf="Rene Noel Lopez";else
if($person->PRF_GUIA=="cbc")
	$prf="Carlos Becerra Castro";else
if($person->PRF_GUIA=="roo")
	$prf="Rodrigo Olivares Ordenes";else
if($person->PRF_GUIA=="epg")
	$prf="Eliana Providel Godoy";else
if($person->PRF_GUIA=="ctt")
	$prf="Carla Taramasco Toro";
}else
	$prf=$person->PRF_GUIA;
//**

//lista profes corref 1
$prfc1=""; 
if($person->PRF_COR1!=""){
if($person->PRF_COR1=="mav")
	$prfc1= "Marcos Aravena Vivar";else
if($person->PRF_COR1=="gam")
	$prfc1= "Gabriel Astudillo Vivar";else
if($person->PRF_COR1=="mbm")
	$prfc1= "Marta Barria Martinez";else
if($person->PRF_COR1=="ccv")
	$prfc1= "Cristian Carrion Valencia";else
if($person->PRF_COR1=="rms")
	$prfc1= "Roberto Mu&ntilde;oz Soto";else
if($person->PRF_COR1=="rnl")
	$prfc1= "Rene Noel Lopez";else
if($person->PRF_COR1=="cbc")
	$prfc1= "Carlos Becerra Castro";else
if($person->PRF_COR1=="roo")
	$prfc1= "Rodrigo Olivares Ordenes";else
if($person->PRF_COR1=="epg")
	$prfc1= "Eliana Providel Godoy";else
if($person->PRF_COR1=="ctt")
	$prfc1= "Carla Taramasco Toro";else
if($person->PRF_COR1=="Gonzalo Valdés Ulloa")
	$prfc1= "Gonzalo Valdés Ulloa";else
if($person->PRF_COR1=="Marcelo Mendoza Rocha")
	$prfc1= "Marcelo Mendoza Rocha";
else
	$prfc1=$person->PRF_COR1;
}
//*

//lista profes corref 2
	$prfc2="";
	if($person->PRF_COR2!="")
	
if($person->PRF_COR2=="mav"){
	$prfc2= "Marcos Aravena Vivar";
	return $prfc2;}else
if($person->PRF_COR2=="gam")
	$prfc2= "Gabriel Astudillo Vivar";else
if($person->PRF_COR2=="mbm")
	$prfc2= "Marta Barria Martinez";else
if($person->PRF_COR2=="ccv")
	$prfc2= "Cristian Carrion Valencia";else
if($person->PRF_COR2=="rms")
	$prfc2= "Roberto Mu&ntilde;oz Soto";else
if($person->PRF_COR2=="rnl")
	$prfc2= "Rene Noel Lopez";else
if($person->PRF_COR2=="cbc")
	$prfc2= "Carlos Becerra Castro";else
if($person->PRF_COR2=="roo")
	$prfc2= "Rodrigo Olivares Ordenes";else
if($person->PRF_COR2=="epg")
	$prfc2= "Eliana Providel Godoy";else
if($person->PRF_COR2=="ctt")
	$prfc2= "Carla Taramasco Toro";else
if($person->PRF_COR2=="Gonzalo Valdés Ulloa")
	$prfc2= "Gonzalo Valdés Ulloa";else
if($person->PRF_COR2=="Marcelo Mendoza Rocha")
	$prfc2= "Marcelo Mendoza Rocha";else
if($person->PRF_COR2=="Andrés Ramos Magna")
	$prfc2= "Andrés Ramos Magna";else
if($person->PRF_COR2=="Ismael Figueroa Palet")
	$prfc2= "Ismael Figueroa Palet";else
if($person->PRF_COR2=="Gino Astorga Solari")
	$prfc2= "Gino Astorga Solari";
else
	$prfc2= $person->PRF_COR2;



?>