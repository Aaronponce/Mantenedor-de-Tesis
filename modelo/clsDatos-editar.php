<?php
/**
*atraves de conexion se guarda lo q es la conexion al acceder a la base de datos
-------------------------------------
Al momento de instaciar la clase en otros archivos no es necesario pasar la fucnion conectar , al momento de instaciar el obejto automaticamente establesemos la conexion
*/
ini_set('mysql.connection_timeout', 300);
ini_set('default_socket_timeout', 300);


class clsDatos // crea consulta a la base de datos
{
	private $conexion;


	public function __construct(){ 
		$servidor="localhost";
		$usuario="root";
		$clave="";
		$base="test";

		$this->conexion=mysql_connect($servidor, $usuario, $clave);
		 if ($this->conexion) {
      	mysql_select_db($base,$this->conexion);
      	} else {   
          	mysql_error();}
      } 


	public function _destruct(){

	}

	public function filtro($sql){ // filtra la informacion de la bd
		$result=mysql_query($sql);
		//echo 'result';
		//echo $result; //extrae datos de una consulta , atraves de un parametro que se le envia, la cual es referenciada al a conexion
		return $result; 
	}

	public function cerrarfiltro($datos){ // libera esopacio de memoria del servidor
		mysql_free_result($datos);
	}

	public function proximo($datos){
		$arreglo=mysql_fetch_array($datos); // crea un arreglo de los datos
		return $arreglo;
	}
	 public function ejecutar($sql){ //incluir, modificar, eliminar
	 	mysql_query($sql, $this->conexion);

	 }
	 public function cerrarconexion(){
	 	mysql_close($this->conexion);
	 }
	
}


?>