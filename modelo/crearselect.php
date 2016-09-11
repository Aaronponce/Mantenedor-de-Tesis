<?php

function selected($arreglo,$select,$nom_slc){ 
	$formcontrol="form-control";
	$requerido="required";
	echo "<select class=".$formcontrol." name=".$select." ".$requerido.">";
	echo "<option selected disabled>"; echo $nom_slc; echo "</option>";
	$letra="ñ";
			foreach ($arreglo as $key => $profesor){
				if(stripos($profesor,$letra)==true){
					/*largos de los cadenas*/
					$maximo=strlen($profesor);
					$total=stripos($profesor,$letra);
					$total2=stripos($profesor,$maximo-$total);
		
					/*cadenas por largo */

					$cadena1=substr($profesor, 0, $total);
					$candeinter="&ntilde";
					$total=$total+2;
					$cadena2=substr($profesor, $total, $maximo);
					$profesor=$cadena1.$candeinter.$cadena2;
				}
				echo "<option>"; echo $profesor ."";;echo "</option>";
			}
	echo "</select>";
}

function inversor($palabra){
	$letra="&ntilde";
	if(stripos($palabra,$letra)==true){
		/*largos de los cadenas*/
		$maximo=strlen($palabra);
		$total=stripos($palabra,$letra);
		$total2=stripos($palabra,$maximo-$total);
		
		/*cadenas por largo */

		$cadena1=substr($palabra, 0, $total);
		$candeinter="ñ";
		$total=$total+2;
		$cadena2=substr($palabra, $total, $maximo);
		$arreglo=$cadena1.$candeinter.$cadena2;
	}
	return $palabra;
}

?>