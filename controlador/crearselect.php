<?php

function selected($arreglo,$select){ 
	include("../Config/config.php");
	$formcontrol="form-control";
	$requerido="required";
	echo "<select class=".$formcontrol." name=".$select." ".$requerido.">";
	foreach ($arreglo as $key => $arreglo) {
			echo "<option>"; echo $arreglo ."";;echo "</option>";
	}
	echo "</select>";
}

?>