<?php

function selected($arreglo,$select,$nom_slc){ 
	include("../Config/config.php");
	$formcontrol="form-control";
	$requerido="required";
	echo "<select class=".$formcontrol." name=".$select." ".$requerido.">";
	echo "<option selected disabled>"; echo $nom_slc; echo "</option>";
	foreach ($arreglo as $key => $arreglo) {

			echo "<option>"; echo $arreglo ."";;echo "</option>";
	}
	echo "</select>";
}

?>