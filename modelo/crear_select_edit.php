<?php
include ("clsDatos.php");
include ("../Config/config.php");

function crear_select_edit($arreglo, $id, $atributo){
		/* Etiquetas de HTML*/
		$formcontrol="form-control";
		$requerido="required";
		
		/*Comunicacion con la Base de Datos*/
		$ObjDatos = new clsDatos();
		$sql="SELECT $atributo FROM trab_tit WHERE(ID='$id')";
		$consulta=$ObjDatos->filtro($sql);
		$orden=$ObjDatos->proximo($consulta);
		$ObjDatos->cerrarconexion();
		$obtenido =$orden[$atributo];
		
		/*Creacion del elemento Select del Formulario*/
		echo "<select class=".$formcontrol." name=".$atributo." ".$requerido.">";
		if(array_key_exists($obtenido, $arreglo)){
			echo "<option>"; echo $arreglo[$obtenido] ."";;echo "</option>";
			unset($arreglo[$obtenido]);
			foreach ($arreglo as $key => $valor){
				echo "<option>"; echo $valor ."";;echo "</option>";
			}
		}else{
			echo "<option>"; echo $obtenido ."";;echo "</option>";
			foreach ($arreglo as $key => $valor){
				echo "<option>"; echo $valor ."";;echo "</option>";
			}
		}
		echo "</select>";
}

function atributos($id, $atributo){
		$ObjDatos = new clsDatos();
		$sql="SELECT $atributo FROM trab_tit WHERE(ID='$id')";
		$consulta=$ObjDatos->filtro($sql);
		$orden=$ObjDatos->proximo($consulta);
		$ObjDatos->cerrarconexion();
		$obtenido=$orden[$atributo];
		return $obtenido;
}

function documento($id){
	header('Content-type: application/pdf');
		$ObjDatos = new clsDatos();
		$sql="SELECT nombre FROM trab_tit WHERE(ID='$id')";
		$consulta=$ObjDatos->filtro($sql);
		$orden=$ObjDatos->proximo($consulta);
		$obtenido=$orden['nombre'];
		if (strnatcasecmp($obtenido,"")) {
			$sql="SELECT FILE_DATA FROM trab_tit WHERE(ID='$id')";
			$consulta=$ObjDatos->filtro($sql);
			$orden=$ObjDatos->proximo($consulta);
			return $orden['FILE_DATA'];
			//echo $obtenido;
		}else{
			echo "<script>alert('Este registro no contiene documento');</script>";
		}
}
?>	