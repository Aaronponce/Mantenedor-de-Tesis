<?php
	require_once("clsDatos.php"); // crea vinculo con la clase clsdatos como los arhivos en la misma carpeta solo se nombra el archivo no la ruta
	error_reporting(0);
	
/**
* 
*/
class  clsPersona
{

	/*
	Datos del alumno
	*/
	private $id;
	private $fecha;
	private $publicada;
	//private $ingreso;
	private $nombre;
	private $email;
	private $carrera;
	private $men_principal;
	private $prf_guia;
	private $prf_cor1;
	private $prf_cor2;
	private $titulo;
	private $resumen;
	
	private $FILE_NAME;
	private $FILE_DATA;
	private $FILE_TYPE;
	

public function __construct($id, $publicada, $fecha, $nombre, $email, $carrera, $men_principal, $prf_guia, $prf_cor1, $prf_cor2, $titulo, $resumen, $FILE_NAME , $FILE_DATA, $FILE_TYPE){ 

		$this->id=$id;
		$this->publicada=$publicada;
		$this->fecha=$fecha;
		//$this->ingreso=$ingreso;
		$this->nombre=$nombre;
		$this->email=$email;
		$this->carrera=$carrera;
		$this->men_principal=$men_principal;
		$this->prf_guia=$prf_guia;
		$this->prf_cor1=$prf_cor1;
		$this->prf_cor2=$prf_cor2;
		$this->titulo=$titulo;
		$this->resumen=$resumen;
		$this->FILE_NAME=$FILE_NAME;
		$this->FILE_DATA=$FILE_DATA;
		$this->FILE_TYPE=$FILE_TYPE;
		
	}

	public function __destruct(){

	}
	
	public function get_id(){
		return $this->id;
	}
	public function get_publicada(){
		return $this->publicada;
	}
	public function get_fecha(){
		return $this->fecha;
	}
	/*public function get_ingreso(){
		return $this->ingreso;
	}*/
	public function get_nombre(){
		return $this->nombre;
	}
	public function get_email(){
		return $this->email;
	}
	public function get_carrera(){
		return $this->carrera;
	}
	public function get_men_principal(){
		return $this->men_principal;
	}
	public function get_prf_guia(){
		return $this->prf_guia;
	}
	public function get_prf_core1(){
		return $this->prf_cor1;
	}
	public function get_prf_core2(){
		return $this->prf_cor2;
	}
	public function get_titulo(){
		return $this->titulo;
	}
	public function get_resumen(){
		return $this->resumen;
	}
	public function get_File_NAME(){
		return $this->FILE_NAME;
	}
	public function get_FILE_DATA(){
		return $this->FILE_DATA;
	}
	public function get_FILE_TYPE(){
		return $this->FILE_TYPE;
	}
	/*
	para saber si un regitro en la base de datos existe , en el caso de ser asi se los asigarlo a laos atributas de las clase para luego ser llamados de los get , con esto sabremos si existe el usuario o no
	*/
	public function buscar(){ 
		$encontro=false;
		$objDatos=new clsDatos();
		$sql="SELECT * FROM trab_tit WHERE(id='$this->id')";
		$datos_desordenados=$objDatos->filtro($sql);
		
		/*if ($datos_desordenados==false) {
			echo "la wea es falsa";
		}else{
			echo "es verdad";
		}*/
			if ($columna=$objDatos->proximo($datos_desordenados)) { //arreglo ordenado a traves de proximo la cual se encuentre clsDatos
				/*
					Se le asigna a cada atributos los datos extraidos de la base de datos
				*/
				$this->id=$columna['id'];
				$this->publicada=$columna['publicada'];
				$this->fecha=$columna['fecha'];
				 $this->nombre=$columna['nombre'];
				//$this->ingreso=$columna['ingreso'];
				$this->email=$columna['email'];
				$this->carrera=$columna['carrera'];
				$this->men_principal=$columna['men_principal'];
				$this->prf_guia=$columna['prf_guia'];
				$this->prf_cor1=$columna['prf_cor1'];
				$this->prf_cor2=$columna['prf_cor2'];
				$this->titulo=$columna['titulo'];
				$this->resumen=$columna['resumen'];
				
				$this->FILE_NAME=$columna['FILE_NAME'];
				 $this->FILE_DATA=$columna['FILE_DATA'];
				$this->FILE_TYPE=$columna['FILE_TYPE'];
				$encontro=true;
			}
		$objDatos->cerrarfiltro($datos_desordenados); //se libera memoria
		$objDatos->cerrarconexion();
		return $encontro;
	}

	public function incluir(){
		$objDatos= new clsDatos();
		/* $sql= "INSERT INTO trab_tit (fecha,nombre,email,carrera,men_principal,prf_guia,prf_cor1,prf_cor2,titulo,resumen,FILE_NAME, FILE_DATA, FILE_TYPE) value ('$this->fecha','$this->nombre','$this->email','$this->carrera','$this->men_principal','$this->prf_guia','$this->prf_cor1','$this->prf_cor2','$this->titulo','$this->resumen','$this->FILE_NAME','$this->FILE_DATA','$this->FILE_TYPE')";*/
	 $sql= "INSERT INTO trab_tit (id,fecha,nombre,email,carrera,men_principal,prf_guia,prf_cor1,prf_cor2,titulo,resumen,FILE_NAME, FILE_DATA, FILE_TYPE) value ('$this->id','$this->fecha','$this->nombre','$this->email','$this->carrera','$this->men_principal','$this->prf_guia','$this->prf_cor1','$this->prf_cor2','$this->titulo','$this->resumen','$this->FILE_NAME','$this->FILE_DATA','$this->FILE_TYPE')";
		$objDatos->ejecutar($sql);
		$objDatos->cerrarconexion();
	}
	public function modificar(){
		$objDatos=new clsDatos();
		$sql="UPDATE trab_tit set id='$this->id', publicada='$this->publicada', fecha='$this->fecha', nombre='$this->nombre',email='$this->email', carrera='$this->carrera', men_principal='$this->men_principal',  prf_guia='$this->prf_guia', prf_cor1='$this->prf_cor1', prf_cor2='$this->prf_cor2', titulo='$this->titulo', resumen='$this->resumen', FILE_NAME='$this->FILE_NAME', FILE_DATA='$this->FILE_DATA', FILE_TYPE='$this->FILE_TYPE' WHERE id='$this->id'";
		$objDatos->ejecutar($sql);
		$objDatos->cerrarconexion();
	}
	public function eliminar(){
		$objDatos= new clsDatos();
		$sql="DELETE FROM trab_tit WHERE(nombre='$this->nombre')";
		$objDatos->ejecutar($sql);
		$objDatos->cerrarconexion();
	}

}

?>