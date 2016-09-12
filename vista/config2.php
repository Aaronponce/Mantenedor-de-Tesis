<?php
		// este archivo se encarga de la conversion de valores y creacion de las opciones de los selectores del formulario
	function carrera(){
		include "../modelo/conexion.php";

//$user_id=null;
$sql1= "SELECT CARRERA FROM trab_tit where id = ".$_GET["id"];
$query = $con->query($sql1);
$person = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $person=$r;
  break;
}

  }
			if($person->CARRERA=="civinf"){
				echo "<option value='civinf' selected>";
				echo "Ingenieria Civil en Inform&aacute;tica"; 
				echo"</option>";
				echo "<option value='inf'>";
				echo "Ingenieria en Inform&aacute;tica"; 
				echo "</option>";
				echo "<option value='ejeinf'>";
				echo "Ingenieria en Ejecucion en Inform&aacute;tica"; 
				echo"</option>";
			}elseif ($person->CARRERA=="inf") {
				echo "<option value='civinf' >";
				echo "Ingenieria Civil en Inform&aacute;tica";
				echo"</option>";
				echo "<option value='inf' selected>";
				echo "Ingenieria en Inform&aacute;tica"; 
				echo "</option>";
				echo "<option value='ejeinf'>";
				echo "Ingenieria en Ejecucion en Inform&aacute;tica"; 
				echo"</option>";
			}elseif ($person->CARRERA=="ejeinf") {
				echo "<option value='civinf' >";
				echo "Ingenieria Civil en Inform&aacute;tica"; 
				echo"</option>";
				echo "<option value='inf' >";
				echo "Ingenieria en Inform&aacute;tica"; 
				echo "</option>";
				echo "<option value='ejeinf' selected>";
				echo "Ingenieria en Ejecuci&oacute;n en Inform&aacute;tica"; 
				echo"</option>";			
			}else{
                echo "<option value='civinf' >";
                echo "Ingenieria Civil en Inform&aacute;tica"; 
                echo"</option>";
                echo "<option value='inf' >";
                echo "Ingenieria en Inform&aacute;tica"; 
                echo "</option>";
                echo "<option value='ejeinf' >";
                echo "Ingenieria en Ejecuci&oacute;n en Inform&aacute;tica"; 
                echo"</option>";
                echo "<option value='ejeinf' selected>";
                echo $person->CARRERA; 
                echo"</option>";
            }
}


function mencion(){
		include "../modelo/conexion.php";

//$user_id=null;
$sql1= "SELECT MEN_PRINCIPAL FROM trab_tit where id = ".$_GET["id"];
$query = $con->query($sql1);
$person = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $person=$r;
  break;
}

  }
			if($person->MEN_PRINCIPAL=="sw"){
				echo"<option value='sw' selected>"; echo "Gesti&oacute;n de Proyectos de Software"; echo "</option>";
    			echo"<option value='gestion'>";echo"Gesti&oacute;n y Dise&ntilde;o de Bases de Dato";echo"</option>";
    			echo"<option value='redes'>";echo"Redes y Telecomunicaciones";echo"</option>";
    			echo"<option value='sinmenc'>";echo"Sin MENCI&Oacute;N";echo"</option>";
			}elseif ($person->MEN_PRINCIPAL=="gestion"){
				echo"<option value='sw'>"; echo "Gesti&oacute;n de Proyectos de Software"; echo "</option>";
    			echo"<option value='gestion' selected>";echo"Gesti&oacute;n y Dise&ntilde;o de Bases de Dato";echo"</option>";
    			echo"<option value='redes'>";echo"Redes y Telecomunicaciones";echo"</option>";
    			echo"<option value='sinmenc'>";echo"Sin MENCI&Oacute;N";echo"</option>";
    		}elseif ($person->MEN_PRINCIPAL=="redes"){
				echo"<option value='sw'>"; echo "Gesti&oacute;n de Proyectos de Software"; echo "</option>";
    			echo"<option value='gestion'>";echo"Gesti&oacute;n y Dise&ntilde;o de Bases de Dato";echo"</option>";
    			echo"<option value='redes' selected>";echo"Redes y Telecomunicaciones";echo"</option>";
    			echo"<option value='sinmenc'>";echo"Sin MENCI&Oacute;N";echo"</option>";
    		}elseif ($person->MEN_PRINCIPAL=="sinmenc"){
				echo"<option value='sw'>"; echo "Gesti&oacute;n de Proyectos de Software"; echo "</option>";
    			echo"<option value='gestion'>";echo"Gesti&oacute;n y Dise&ntilde;o de Bases de Dato";echo"</option>";
    			echo"<option value='redes'>";echo"Redes y Telecomunicaciones";echo"</option>";
    			echo"<option value='sinmenc' selected>";echo"Sin MENCI&Oacute;N";echo"</option>";
    		}else{
    			echo"<option value='sw'>"; echo "Gesti&oacute;n de Proyectos de Software"; echo "</option>";
    			echo"<option value='gestion'>";echo"Gesti&oacute;n y Dise&ntilde;o de Bases de Dato";echo"</option>";
    			echo"<option value='redes'>";echo"Redes y Telecomunicaciones";echo"</option>";
    			echo"<option value='sinmenc'>";echo"Sin MENCI&Oacute;N";echo"</option>";
    			echo"<option value='<?php echo $person->MEN_PRINCIPAL;?>'>";echo $person->MEN_PRINCIPAL; echo"</option>";
    		}
}

function profe_guia(){
		include "../modelo/conexion.php";

//$user_id=null;
$sql1= "SELECT PRF_GUIA FROM trab_tit where id = ".$_GET["id"];
$query = $con->query($sql1);
$person = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $person=$r;
  break;
}

  }

  if($person->PRF_GUIA!="")  	
  	if($person->PRF_GUIA=="mav"){
  		echo"<option value='mav' selected>";echo"Marcos Aravena Vivar";echo"</option>";
    	echo"<option value='gam'>";echo"Gabriel Astudillo M";echo"</option>";
    	echo"<option value='mbm'>";echo"Marta Barria Martinez";echo"</option>";
    	echo"<option value='ccv'>";echo"Cristian Carrion Valencia";echo"</option>";
    	echo"<option value='rms'>";echo"Roberto Mu&ntilde;oz Soto";echo"</option>";
    	echo"<option value='rnl'>";echo"Rene Noel Lopez";echo"</option>";
    	echo"<option value='cbc'>";echo"Carlos Becerra Castro";echo"</option>";
    	echo"<option value='roo'>";echo"Rodrigo Olivares Ordenes";echo"</option>";
    	echo"<option value='epg'>";echo"Eliana Providel Godoy";echo"</option>";
    	echo"<option value='ctt'>";echo"Carla Taramasco Toro";echo"</option>";
    	echo"<option value='Andés Ramos Magna'>";echo"Andr&eacute;s Ramos Magna";echo"</option>";
	}elseif ($person->PRF_GUIA=="gam") {
		echo"<option value='mav' >";echo"Marcos Aravena Vivar";echo"</option>";
    	echo"<option value='gam' selected>";echo"Gabriel Astudillo M";echo"</option>";
    	echo"<option value='mbm'>";echo"Marta Barria Martinez";echo"</option>";
    	echo"<option value='ccv'>";echo"Cristian Carrion Valencia";echo"</option>";
    	echo"<option value='rms'>";echo"Roberto Mu&ntilde;oz Soto";echo"</option>";
    	echo"<option value='rnl'>";echo"Rene Noel Lopez";echo"</option>";
    	echo"<option value='cbc'>";echo"Carlos Becerra Castro";echo"</option>";
    	echo"<option value='roo'>";echo"Rodrigo Olivares Ordenes";echo"</option>";
    	echo"<option value='epg'>";echo"Eliana Providel Godoy";echo"</option>";
    	echo"<option value='ctt'>";echo"Carla Taramasco Toro";echo"</option>";
    	echo"<option value='Andés Ramos Magna'>";echo"Andr&eacute;s Ramos Magna";echo"</option>";
	}elseif ($person->PRF_GUIA=="mbm") {
		echo"<option value='mav' >";echo"Marcos Aravena Vivar";echo"</option>";
    	echo"<option value='gam'>";echo"Gabriel Astudillo M";echo"</option>";
    	echo"<option value='mbm' selected>";echo"Marta Barria Martinez";echo"</option>";
    	echo"<option value='ccv'>";echo"Cristian Carrion Valencia";echo"</option>";
    	echo"<option value='rms'>";echo"Roberto Mu&ntilde;oz Soto";echo"</option>";
    	echo"<option value='rnl'>";echo"Rene Noel Lopez";echo"</option>";
    	echo"<option value='cbc'>";echo"Carlos Becerra Castro";echo"</option>";
    	echo"<option value='roo'>";echo"Rodrigo Olivares Ordenes";echo"</option>";
    	echo"<option value='epg'>";echo"Eliana Providel Godoy";echo"</option>";
    	echo"<option value='ctt'>";echo"Carla Taramasco Toro";echo"</option>";
    	echo"<option value='Andés Ramos Magna'>";echo"Andr&eacute;s Ramos Magna";echo"</option>";
	}elseif ($person->PRF_GUIA=="ccv") {
		echo"<option value='mav' >";echo"Marcos Aravena Vivar";echo"</option>";
    	echo"<option value='gam'>";echo"Gabriel Astudillo M";echo"</option>";
    	echo"<option value='mbm'>";echo"Marta Barria Martinez";echo"</option>";
    	echo"<option value='ccv' selected>";echo"Cristian Carrion Valencia";echo"</option>";
    	echo"<option value='rms'>";echo"Roberto Mu&ntilde;oz Soto";echo"</option>";
    	echo"<option value='rnl'>";echo"Rene Noel Lopez";echo"</option>";
    	echo"<option value='cbc'>";echo"Carlos Becerra Castro";echo"</option>";
    	echo"<option value='roo'>";echo"Rodrigo Olivares Ordenes";echo"</option>";
    	echo"<option value='epg'>";echo"Eliana Providel Godoy";echo"</option>";
    	echo"<option value='ctt'>";echo"Carla Taramasco Toro";echo"</option>";
    	echo"<option value='Andés Ramos Magna'>";echo"Andr&eacute;s Ramos Magna";echo"</option>";
	}elseif ($person->PRF_GUIA=="rms") {
		echo"<option value='mav' >";echo"Marcos Aravena Vivar";echo"</option>";
    	echo"<option value='gam'>";echo"Gabriel Astudillo M";echo"</option>";
    	echo"<option value='mbm'>";echo"Marta Barria Martinez";echo"</option>";
    	echo"<option value='ccv'>";echo"Cristian Carrion Valencia";echo"</option>";
    	echo"<option value='rms' selected>";echo"Roberto Mu&ntilde;oz Soto";echo"</option>";
    	echo"<option value='rnl'>";echo"Rene Noel Lopez";echo"</option>";
    	echo"<option value='cbc'>";echo"Carlos Becerra Castro";echo"</option>";
    	echo"<option value='roo'>";echo"Rodrigo Olivares Ordenes";echo"</option>";
    	echo"<option value='epg'>";echo"Eliana Providel Godoy";echo"</option>";
    	echo"<option value='ctt'>";echo"Carla Taramasco Toro";echo"</option>";
    	echo"<option value='Andés Ramos Magna'>";echo"Andr&eacute;s Ramos Magna";echo"</option>";
	}elseif ($person->PRF_GUIA=="rnl") {
		echo"<option value='mav' >";echo"Marcos Aravena Vivar";echo"</option>";
    	echo"<option value='gam'>";echo"Gabriel Astudillo M";echo"</option>";
    	echo"<option value='mbm'>";echo"Marta Barria Martinez";echo"</option>";
    	echo"<option value='ccv'>";echo"Cristian Carrion Valencia";echo"</option>";
    	echo"<option value='rms'>";echo"Roberto Mu&ntilde;oz Soto";echo"</option>";
    	echo"<option value='rnl' selected>";echo"Rene Noel Lopez";echo"</option>";
    	echo"<option value='cbc'>";echo"Carlos Becerra Castro";echo"</option>";
    	echo"<option value='roo'>";echo"Rodrigo Olivares Ordenes";echo"</option>";
    	echo"<option value='epg'>";echo"Eliana Providel Godoy";echo"</option>";
    	echo"<option value='ctt'>";echo"Carla Taramasco Toro";echo"</option>";
    	echo"<option value='Andés Ramos Magna'>";echo"Andr&eacute;s Ramos Magna";echo"</option>";
	}elseif ($person->PRF_GUIA=="cbc") {
		echo"<option value='mav' >";echo"Marcos Aravena Vivar";echo"</option>";
    	echo"<option value='gam'>";echo"Gabriel Astudillo M";echo"</option>";
    	echo"<option value='mbm'>";echo"Marta Barria Martinez";echo"</option>";
    	echo"<option value='ccv'>";echo"Cristian Carrion Valencia";echo"</option>";
    	echo"<option value='rms'>";echo"Roberto Mu&ntilde;oz Soto";echo"</option>";
    	echo"<option value='rnl'>";echo"Rene Noel Lopez";echo"</option>";
    	echo"<option value='cbc' selected>";echo"Carlos Becerra Castro";echo"</option>";
    	echo"<option value='roo'>";echo"Rodrigo Olivares Ordenes";echo"</option>";
    	echo"<option value='epg'>";echo"Eliana Providel Godoy";echo"</option>";
    	echo"<option value='ctt'>";echo"Carla Taramasco Toro";echo"</option>";
    	echo"<option value='Andés Ramos Magna'>";echo"Andr&eacute;s Ramos Magna";echo"</option>";
	}elseif ($person->PRF_GUIA=="roo") {
		echo"<option value='mav' >";echo"Marcos Aravena Vivar";echo"</option>";
    	echo"<option value='gam'>";echo"Gabriel Astudillo M";echo"</option>";
    	echo"<option value='mbm'>";echo"Marta Barria Martinez";echo"</option>";
    	echo"<option value='ccv'>";echo"Cristian Carrion Valencia";echo"</option>";
    	echo"<option value='rms'>";echo"Roberto Mu&ntilde;oz Soto";echo"</option>";
    	echo"<option value='rnl'>";echo"Rene Noel Lopez";echo"</option>";
    	echo"<option value='cbc'>";echo"Carlos Becerra Castro";echo"</option>";
    	echo"<option value='roo' selected>";echo"Rodrigo Olivares Ordenes";echo"</option>";
    	echo"<option value='epg'>";echo"Eliana Providel Godoy";echo"</option>";
    	echo"<option value='ctt'>";echo"Carla Taramasco Toro";echo"</option>";
    	echo"<option value='Andés Ramos Magna'>";echo"Andr&eacute;s Ramos Magna";echo"</option>";
	}elseif ($person->PRF_GUIA=="epg") {
		echo"<option value='mav' >";echo"Marcos Aravena Vivar";echo"</option>";
    	echo"<option value='gam'>";echo"Gabriel Astudillo M";echo"</option>";
    	echo"<option value='mbm'>";echo"Marta Barria Martinez";echo"</option>";
    	echo"<option value='ccv'>";echo"Cristian Carrion Valencia";echo"</option>";
    	echo"<option value='rms'>";echo"Roberto Mu&ntilde;oz Soto";echo"</option>";
    	echo"<option value='rnl'>";echo"Rene Noel Lopez";echo"</option>";
    	echo"<option value='cbc'>";echo"Carlos Becerra Castro";echo"</option>";
    	echo"<option value='roo'>";echo"Rodrigo Olivares Ordenes";echo"</option>";
    	echo"<option value='epg' selected>";echo"Eliana Providel Godoy";echo"</option>";
    	echo"<option value='ctt'>";echo"Carla Taramasco Toro";echo"</option>";
    	echo"<option value='Andés Ramos Magna'>";echo"Andr&eacute;s Ramos Magna";echo"</option>";
	}elseif ($person->PRF_GUIA=="ctt") {
		echo"<option value='mav' >";echo"Marcos Aravena Vivar";echo"</option>";
    	echo"<option value='gam'>";echo"Gabriel Astudillo M";echo"</option>";
    	echo"<option value='mbm'>";echo"Marta Barria Martinez";echo"</option>";
    	echo"<option value='ccv'>";echo"Cristian Carrion Valencia";echo"</option>";
    	echo"<option value='rms'>";echo"Roberto Mu&ntilde;oz Soto";echo"</option>";
    	echo"<option value='rnl'>";echo"Rene Noel Lopez";echo"</option>";
    	echo"<option value='cbc'>";echo"Carlos Becerra Castro";echo"</option>";
    	echo"<option value='roo'>";echo"Rodrigo Olivares Ordenes";echo"</option>";
    	echo"<option value='epg'>";echo"Eliana Providel Godoy";echo"</option>";
    	echo"<option value='ctt' selected>";echo"Carla Taramasco Toro";echo"</option>";
    	echo"<option value='Andés Ramos Magna'>";echo"Andr&eacute;s Ramos Magna";echo"</option>";
	}elseif ($person->PRF_GUIA=="Andés Ramos Magna") {
		echo"<option value='mav' >";echo"Marcos Aravena Vivar";echo"</option>";
    	echo"<option value='gam'>";echo"Gabriel Astudillo M";echo"</option>";
    	echo"<option value='mbm'>";echo"Marta Barria Martinez";echo"</option>";
    	echo"<option value='ccv'>";echo"Cristian Carrion Valencia";echo"</option>";
    	echo"<option value='rms'>";echo"Roberto Mu&ntilde;oz Soto";echo"</option>";
    	echo"<option value='rnl'>";echo"Rene Noel Lopez";echo"</option>";
    	echo"<option value='cbc'>";echo"Carlos Becerra Castro";echo"</option>";
    	echo"<option value='roo'>";echo"Rodrigo Olivares Ordenes";echo"</option>";
    	echo"<option value='epg'>";echo"Eliana Providel Godoy";echo"</option>";
    	echo"<option value='ctt'>";echo"Carla Taramasco Toro";echo"</option>";
    	echo"<option value='Andés Ramos Magna' selected>";echo"Andr&eacute;s Ramos Magna";echo"</option>";
	}elseif($person->PRF_GUIA==""){
		echo"<option value='mav' >";echo"Marcos Aravena Vivar";echo"</option>";
    	echo"<option value='gam'>";echo"Gabriel Astudillo M";echo"</option>";
    	echo"<option value='mbm'>";echo"Marta Barria Martinez";echo"</option>";
    	echo"<option value='ccv'>";echo"Cristian Carrion Valencia";echo"</option>";
    	echo"<option value='rms'>";echo"Roberto Mu&ntilde;oz Soto";echo"</option>";
    	echo"<option value='rnl'>";echo"Rene Noel Lopez";echo"</option>";
    	echo"<option value='cbc'>";echo"Carlos Becerra Castro";echo"</option>";
    	echo"<option value='roo'>";echo"Rodrigo Olivares Ordenes";echo"</option>";
    	echo"<option value='epg'>";echo"Eliana Providel Godoy";echo"</option>";
    	echo"<option value='ctt'>";echo"Carla Taramasco Toro";echo"</option>";
    	echo"<option value='Andés Ramos Magna'>";echo"Andr&eacute;s Ramos Magna";echo"</option>";
    	echo"<option value='<?php echo $person->PRF_GUIA; ?>' selected>";echo $person->PRF_GUIA; echo"</option>";
	}else{
        echo"<option value='mav' >";echo"Marcos Aravena Vivar";echo"</option>";
        echo"<option value='gam'>";echo"Gabriel Astudillo M";echo"</option>";
        echo"<option value='mbm'>";echo"Marta Barria Martinez";echo"</option>";
        echo"<option value='ccv'>";echo"Cristian Carrion Valencia";echo"</option>";
        echo"<option value='rms'>";echo"Roberto Mu&ntilde;oz Soto";echo"</option>";
        echo"<option value='rnl'>";echo"Rene Noel Lopez";echo"</option>";
        echo"<option value='cbc'>";echo"Carlos Becerra Castro";echo"</option>";
        echo"<option value='roo'>";echo"Rodrigo Olivares Ordenes";echo"</option>";
        echo"<option value='epg'>";echo"Eliana Providel Godoy";echo"</option>";
        echo"<option value='ctt'>";echo"Carla Taramasco Toro";echo"</option>";
        echo"<option value='Andés Ramos Magna'>";echo"Andr&eacute;s Ramos Magna";echo"</option>";
        echo"<option value='<?php echo $person->PRF_GUIA; ?>' selected>";echo $person->PRF_GUIA; echo"</option>";
    }

	


}
function profe_cor1(){
		include "../modelo/conexion.php";

//$user_id=null;
$sql1= "SELECT PRF_COR1 FROM trab_tit where id = ".$_GET["id"];
$query = $con->query($sql1);
$person = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $person=$r;
  break;
}

  }

  if($person->PRF_COR1!="")  	
  	if($person->PRF_COR1=="mav"){
  		echo"<option value='mav' selected>";echo"Marcos Aravena Vivar";echo"</option>";
    	echo"<option value='gam'>";echo"Gabriel Astudillo M";echo"</option>";
    	echo"<option value='mbm'>";echo"Marta Barria Martinez";echo"</option>";
    	echo"<option value='ccv'>";echo"Cristian Carrion Valencia";echo"</option>";
    	echo"<option value='rms'>";echo"Roberto Mu&ntilde;oz Soto";echo"</option>";
    	echo"<option value='rnl'>";echo"Rene Noel Lopez";echo"</option>";
    	echo"<option value='cbc'>";echo"Carlos Becerra Castro";echo"</option>";
    	echo"<option value='roo'>";echo"Rodrigo Olivares Ordenes";echo"</option>";
    	echo"<option value='epg'>";echo"Eliana Providel Godoy";echo"</option>";
    	echo"<option value='ctt'>";echo"Carla Taramasco Toro";echo"</option>";
    	echo"<option value='Andés Ramos Magna'>";echo"Andr&eacute;s Ramos Magna";echo"</option>";
	}elseif ($person->PRF_COR1=="gam") {
		echo"<option value='mav' >";echo"Marcos Aravena Vivar";echo"</option>";
    	echo"<option value='gam' selected>";echo"Gabriel Astudillo M";echo"</option>";
    	echo"<option value='mbm'>";echo"Marta Barria Martinez";echo"</option>";
    	echo"<option value='ccv'>";echo"Cristian Carrion Valencia";echo"</option>";
    	echo"<option value='rms'>";echo"Roberto Mu&ntilde;oz Soto";echo"</option>";
    	echo"<option value='rnl'>";echo"Rene Noel Lopez";echo"</option>";
    	echo"<option value='cbc'>";echo"Carlos Becerra Castro";echo"</option>";
    	echo"<option value='roo'>";echo"Rodrigo Olivares Ordenes";echo"</option>";
    	echo"<option value='epg'>";echo"Eliana Providel Godoy";echo"</option>";
    	echo"<option value='ctt'>";echo"Carla Taramasco Toro";echo"</option>";
    	echo"<option value='Andés Ramos Magna'>";echo"Andr&eacute;s Ramos Magna";echo"</option>";
	}elseif ($person->PRF_COR1=="mbm") {
		echo"<option value='mav' >";echo"Marcos Aravena Vivar";echo"</option>";
    	echo"<option value='gam'>";echo"Gabriel Astudillo M";echo"</option>";
    	echo"<option value='mbm' selected>";echo"Marta Barria Martinez";echo"</option>";
    	echo"<option value='ccv'>";echo"Cristian Carrion Valencia";echo"</option>";
    	echo"<option value='rms'>";echo"Roberto Mu&ntilde;oz Soto";echo"</option>";
    	echo"<option value='rnl'>";echo"Rene Noel Lopez";echo"</option>";
    	echo"<option value='cbc'>";echo"Carlos Becerra Castro";echo"</option>";
    	echo"<option value='roo'>";echo"Rodrigo Olivares Ordenes";echo"</option>";
    	echo"<option value='epg'>";echo"Eliana Providel Godoy";echo"</option>";
    	echo"<option value='ctt'>";echo"Carla Taramasco Toro";echo"</option>";
    	echo"<option value='Andés Ramos Magna'>";echo"Andr&eacute;s Ramos Magna";echo"</option>";
	}elseif ($person->PRF_COR1=="ccv") {
		echo"<option value='mav' >";echo"Marcos Aravena Vivar";echo"</option>";
    	echo"<option value='gam'>";echo"Gabriel Astudillo M";echo"</option>";
    	echo"<option value='mbm'>";echo"Marta Barria Martinez";echo"</option>";
    	echo"<option value='ccv' selected>";echo"Cristian Carrion Valencia";echo"</option>";
    	echo"<option value='rms'>";echo"Roberto Mu&ntilde;oz Soto";echo"</option>";
    	echo"<option value='rnl'>";echo"Rene Noel Lopez";echo"</option>";
    	echo"<option value='cbc'>";echo"Carlos Becerra Castro";echo"</option>";
    	echo"<option value='roo'>";echo"Rodrigo Olivares Ordenes";echo"</option>";
    	echo"<option value='epg'>";echo"Eliana Providel Godoy";echo"</option>";
    	echo"<option value='ctt'>";echo"Carla Taramasco Toro";echo"</option>";
    	echo"<option value='Andés Ramos Magna'>";echo"Andr&eacute;s Ramos Magna";echo"</option>";
	}elseif ($person->PRF_COR1=="rms") {
		echo"<option value='mav' >";echo"Marcos Aravena Vivar";echo"</option>";
    	echo"<option value='gam'>";echo"Gabriel Astudillo M";echo"</option>";
    	echo"<option value='mbm'>";echo"Marta Barria Martinez";echo"</option>";
    	echo"<option value='ccv'>";echo"Cristian Carrion Valencia";echo"</option>";
    	echo"<option value='rms' selected>";echo"Roberto Mu&ntilde;oz Soto";echo"</option>";
    	echo"<option value='rnl'>";echo"Rene Noel Lopez";echo"</option>";
    	echo"<option value='cbc'>";echo"Carlos Becerra Castro";echo"</option>";
    	echo"<option value='roo'>";echo"Rodrigo Olivares Ordenes";echo"</option>";
    	echo"<option value='epg'>";echo"Eliana Providel Godoy";echo"</option>";
    	echo"<option value='ctt'>";echo"Carla Taramasco Toro";echo"</option>";
    	echo"<option value='Andés Ramos Magna'>";echo"Andr&eacute;s Ramos Magna";echo"</option>";
	}elseif ($person->PRF_COR1=="rnl") {
		echo"<option value='mav' >";echo"Marcos Aravena Vivar";echo"</option>";
    	echo"<option value='gam'>";echo"Gabriel Astudillo M";echo"</option>";
    	echo"<option value='mbm'>";echo"Marta Barria Martinez";echo"</option>";
    	echo"<option value='ccv'>";echo"Cristian Carrion Valencia";echo"</option>";
    	echo"<option value='rms'>";echo"Roberto Mu&ntilde;oz Soto";echo"</option>";
    	echo"<option value='rnl' selected>";echo"Rene Noel Lopez";echo"</option>";
    	echo"<option value='cbc'>";echo"Carlos Becerra Castro";echo"</option>";
    	echo"<option value='roo'>";echo"Rodrigo Olivares Ordenes";echo"</option>";
    	echo"<option value='epg'>";echo"Eliana Providel Godoy";echo"</option>";
    	echo"<option value='ctt'>";echo"Carla Taramasco Toro";echo"</option>";
    	echo"<option value='Andés Ramos Magna'>";echo"Andr&eacute;s Ramos Magna";echo"</option>";
	}elseif ($person->PRF_COR1=="cbc") {
		echo"<option value='mav' >";echo"Marcos Aravena Vivar";echo"</option>";
    	echo"<option value='gam'>";echo"Gabriel Astudillo M";echo"</option>";
    	echo"<option value='mbm'>";echo"Marta Barria Martinez";echo"</option>";
    	echo"<option value='ccv'>";echo"Cristian Carrion Valencia";echo"</option>";
    	echo"<option value='rms'>";echo"Roberto Mu&ntilde;oz Soto";echo"</option>";
    	echo"<option value='rnl'>";echo"Rene Noel Lopez";echo"</option>";
    	echo"<option value='cbc' selected>";echo"Carlos Becerra Castro";echo"</option>";
    	echo"<option value='roo'>";echo"Rodrigo Olivares Ordenes";echo"</option>";
    	echo"<option value='epg'>";echo"Eliana Providel Godoy";echo"</option>";
    	echo"<option value='ctt'>";echo"Carla Taramasco Toro";echo"</option>";
    	echo"<option value='Andés Ramos Magna'>";echo"Andr&eacute;s Ramos Magna";echo"</option>";
	}elseif ($person->PRF_COR1=="roo") {
		echo"<option value='mav' >";echo"Marcos Aravena Vivar";echo"</option>";
    	echo"<option value='gam'>";echo"Gabriel Astudillo M";echo"</option>";
    	echo"<option value='mbm'>";echo"Marta Barria Martinez";echo"</option>";
    	echo"<option value='ccv'>";echo"Cristian Carrion Valencia";echo"</option>";
    	echo"<option value='rms'>";echo"Roberto Mu&ntilde;oz Soto";echo"</option>";
    	echo"<option value='rnl'>";echo"Rene Noel Lopez";echo"</option>";
    	echo"<option value='cbc'>";echo"Carlos Becerra Castro";echo"</option>";
    	echo"<option value='roo' selected>";echo"Rodrigo Olivares Ordenes";echo"</option>";
    	echo"<option value='epg'>";echo"Eliana Providel Godoy";echo"</option>";
    	echo"<option value='ctt'>";echo"Carla Taramasco Toro";echo"</option>";
    	echo"<option value='Andés Ramos Magna'>";echo"Andr&eacute;s Ramos Magna";echo"</option>";
	}elseif ($person->PRF_COR1=="epg") {
		echo"<option value='mav' >";echo"Marcos Aravena Vivar";echo"</option>";
    	echo"<option value='gam'>";echo"Gabriel Astudillo M";echo"</option>";
    	echo"<option value='mbm'>";echo"Marta Barria Martinez";echo"</option>";
    	echo"<option value='ccv'>";echo"Cristian Carrion Valencia";echo"</option>";
    	echo"<option value='rms'>";echo"Roberto Mu&ntilde;oz Soto";echo"</option>";
    	echo"<option value='rnl'>";echo"Rene Noel Lopez";echo"</option>";
    	echo"<option value='cbc'>";echo"Carlos Becerra Castro";echo"</option>";
    	echo"<option value='roo'>";echo"Rodrigo Olivares Ordenes";echo"</option>";
    	echo"<option value='epg' selected>";echo"Eliana Providel Godoy";echo"</option>";
    	echo"<option value='ctt'>";echo"Carla Taramasco Toro";echo"</option>";
    	echo"<option value='Andés Ramos Magna'>";echo"Andr&eacute;s Ramos Magna";echo"</option>";
	}elseif ($person->PRF_COR1=="ctt") {
		echo"<option value='mav' >";echo"Marcos Aravena Vivar";echo"</option>";
    	echo"<option value='gam'>";echo"Gabriel Astudillo M";echo"</option>";
    	echo"<option value='mbm'>";echo"Marta Barria Martinez";echo"</option>";
    	echo"<option value='ccv'>";echo"Cristian Carrion Valencia";echo"</option>";
    	echo"<option value='rms'>";echo"Roberto Mu&ntilde;oz Soto";echo"</option>";
    	echo"<option value='rnl'>";echo"Rene Noel Lopez";echo"</option>";
    	echo"<option value='cbc'>";echo"Carlos Becerra Castro";echo"</option>";
    	echo"<option value='roo'>";echo"Rodrigo Olivares Ordenes";echo"</option>";
    	echo"<option value='epg'>";echo"Eliana Providel Godoy";echo"</option>";
    	echo"<option value='ctt' selected>";echo"Carla Taramasco Toro";echo"</option>";
    	echo"<option value='Andés Ramos Magna'>";echo"Andr&eacute;s Ramos Magna";echo"</option>";
	}elseif ($person->PRF_COR1=="Andés Ramos Magna") {
		echo"<option value='mav' >";echo"Marcos Aravena Vivar";echo"</option>";
    	echo"<option value='gam'>";echo"Gabriel Astudillo M";echo"</option>";
    	echo"<option value='mbm'>";echo"Marta Barria Martinez";echo"</option>";
    	echo"<option value='ccv'>";echo"Cristian Carrion Valencia";echo"</option>";
    	echo"<option value='rms'>";echo"Roberto Mu&ntilde;oz Soto";echo"</option>";
    	echo"<option value='rnl'>";echo"Rene Noel Lopez";echo"</option>";
    	echo"<option value='cbc'>";echo"Carlos Becerra Castro";echo"</option>";
    	echo"<option value='roo'>";echo"Rodrigo Olivares Ordenes";echo"</option>";
    	echo"<option value='epg'>";echo"Eliana Providel Godoy";echo"</option>";
    	echo"<option value='ctt'>";echo"Carla Taramasco Toro";echo"</option>";
    	echo"<option value='Andés Ramos Magna' selected>";echo"Andr&eacute;s Ramos Magna";echo"</option>";
	}
    if($person->PRF_COR1==""){
		echo"<option value='mav' >";echo"Marcos Aravena Vivar";echo"</option>";
    	echo"<option value='gam'>";echo"Gabriel Astudillo M";echo"</option>";
    	echo"<option value='mbm'>";echo"Marta Barria Martinez";echo"</option>";
    	echo"<option value='ccv'>";echo"Cristian Carrion Valencia";echo"</option>";
    	echo"<option value='rms'>";echo"Roberto Mu&ntilde;oz Soto";echo"</option>";
    	echo"<option value='rnl'>";echo"Rene Noel Lopez";echo"</option>";
    	echo"<option value='cbc'>";echo"Carlos Becerra Castro";echo"</option>";
    	echo"<option value='roo'>";echo"Rodrigo Olivares Ordenes";echo"</option>";
    	echo"<option value='epg'>";echo"Eliana Providel Godoy";echo"</option>";
    	echo"<option value='ctt'>";echo"Carla Taramasco Toro";echo"</option>";
    	echo"<option value='Andés Ramos Magna'>";echo"Andr&eacute;s Ramos Magna";echo"</option>";
    	echo"<option value='<?php echo $person->PRF_COR2; ?>' selected>";echo $person->PRF_COR1; echo"</option>";
	}

	


}

function profe_cor2(){
		include "../modelo/conexion.php";

//$user_id=null;
$sql1= "SELECT PRF_COR2 FROM trab_tit where id = ".$_GET["id"];
$query = $con->query($sql1);
$person = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $person=$r;
  break;
}

  }

  if($person->PRF_COR2!="")  	
  	if($person->PRF_COR2=="mav"){
  		echo"<option value='mav' selected>";echo"Marcos Aravena Vivar";echo"</option>";
    	echo"<option value='gam'>";echo"Gabriel Astudillo M";echo"</option>";
    	echo"<option value='mbm'>";echo"Marta Barria Martinez";echo"</option>";
    	echo"<option value='ccv'>";echo"Cristian Carrion Valencia";echo"</option>";
    	echo"<option value='rms'>";echo"Roberto Mu&ntilde;oz Soto";echo"</option>";
    	echo"<option value='rnl'>";echo"Rene Noel Lopez";echo"</option>";
    	echo"<option value='cbc'>";echo"Carlos Becerra Castro";echo"</option>";
    	echo"<option value='roo'>";echo"Rodrigo Olivares Ordenes";echo"</option>";
    	echo"<option value='epg'>";echo"Eliana Providel Godoy";echo"</option>";
    	echo"<option value='ctt'>";echo"Carla Taramasco Toro";echo"</option>";
    	echo"<option value='Andés Ramos Magna'>";echo"Andr&eacute;s Ramos Magna";echo"</option>";
	}elseif ($person->PRF_COR2=="gam") {
		echo"<option value='mav' >";echo"Marcos Aravena Vivar";echo"</option>";
    	echo"<option value='gam' selected>";echo"Gabriel Astudillo M";echo"</option>";
    	echo"<option value='mbm'>";echo"Marta Barria Martinez";echo"</option>";
    	echo"<option value='ccv'>";echo"Cristian Carrion Valencia";echo"</option>";
    	echo"<option value='rms'>";echo"Roberto Mu&ntilde;oz Soto";echo"</option>";
    	echo"<option value='rnl'>";echo"Rene Noel Lopez";echo"</option>";
    	echo"<option value='cbc'>";echo"Carlos Becerra Castro";echo"</option>";
    	echo"<option value='roo'>";echo"Rodrigo Olivares Ordenes";echo"</option>";
    	echo"<option value='epg'>";echo"Eliana Providel Godoy";echo"</option>";
    	echo"<option value='ctt'>";echo"Carla Taramasco Toro";echo"</option>";
    	echo"<option value='Andés Ramos Magna'>";echo"Andr&eacute;s Ramos Magna";echo"</option>";
	}elseif ($person->PRF_COR2=="mbm") {
		echo"<option value='mav' >";echo"Marcos Aravena Vivar";echo"</option>";
    	echo"<option value='gam'>";echo"Gabriel Astudillo M";echo"</option>";
    	echo"<option value='mbm' selected>";echo"Marta Barria Martinez";echo"</option>";
    	echo"<option value='ccv'>";echo"Cristian Carrion Valencia";echo"</option>";
    	echo"<option value='rms'>";echo"Roberto Mu&ntilde;oz Soto";echo"</option>";
    	echo"<option value='rnl'>";echo"Rene Noel Lopez";echo"</option>";
    	echo"<option value='cbc'>";echo"Carlos Becerra Castro";echo"</option>";
    	echo"<option value='roo'>";echo"Rodrigo Olivares Ordenes";echo"</option>";
    	echo"<option value='epg'>";echo"Eliana Providel Godoy";echo"</option>";
    	echo"<option value='ctt'>";echo"Carla Taramasco Toro";echo"</option>";
    	echo"<option value='Andés Ramos Magna'>";echo"Andr&eacute;s Ramos Magna";echo"</option>";
	}elseif ($person->PRF_COR2=="ccv") {
		echo"<option value='mav' >";echo"Marcos Aravena Vivar";echo"</option>";
    	echo"<option value='gam'>";echo"Gabriel Astudillo M";echo"</option>";
    	echo"<option value='mbm'>";echo"Marta Barria Martinez";echo"</option>";
    	echo"<option value='ccv' selected>";echo"Cristian Carrion Valencia";echo"</option>";
    	echo"<option value='rms'>";echo"Roberto Mu&ntilde;oz Soto";echo"</option>";
    	echo"<option value='rnl'>";echo"Rene Noel Lopez";echo"</option>";
    	echo"<option value='cbc'>";echo"Carlos Becerra Castro";echo"</option>";
    	echo"<option value='roo'>";echo"Rodrigo Olivares Ordenes";echo"</option>";
    	echo"<option value='epg'>";echo"Eliana Providel Godoy";echo"</option>";
    	echo"<option value='ctt'>";echo"Carla Taramasco Toro";echo"</option>";
    	echo"<option value='Andés Ramos Magna'>";echo"Andr&eacute;s Ramos Magna";echo"</option>";
	}elseif ($person->PRF_COR2=="rms") {
		echo"<option value='mav' >";echo"Marcos Aravena Vivar";echo"</option>";
    	echo"<option value='gam'>";echo"Gabriel Astudillo M";echo"</option>";
    	echo"<option value='mbm'>";echo"Marta Barria Martinez";echo"</option>";
    	echo"<option value='ccv'>";echo"Cristian Carrion Valencia";echo"</option>";
    	echo"<option value='rms' selected>";echo"Roberto Mu&ntilde;oz Soto";echo"</option>";
    	echo"<option value='rnl'>";echo"Rene Noel Lopez";echo"</option>";
    	echo"<option value='cbc'>";echo"Carlos Becerra Castro";echo"</option>";
    	echo"<option value='roo'>";echo"Rodrigo Olivares Ordenes";echo"</option>";
    	echo"<option value='epg'>";echo"Eliana Providel Godoy";echo"</option>";
    	echo"<option value='ctt'>";echo"Carla Taramasco Toro";echo"</option>";
    	echo"<option value='Andés Ramos Magna'>";echo"Andr&eacute;s Ramos Magna";echo"</option>";
	}elseif ($person->PRF_COR2=="rnl") {
		echo"<option value='mav' >";echo"Marcos Aravena Vivar";echo"</option>";
    	echo"<option value='gam'>";echo"Gabriel Astudillo M";echo"</option>";
    	echo"<option value='mbm'>";echo"Marta Barria Martinez";echo"</option>";
    	echo"<option value='ccv'>";echo"Cristian Carrion Valencia";echo"</option>";
    	echo"<option value='rms'>";echo"Roberto Mu&ntilde;oz Soto";echo"</option>";
    	echo"<option value='rnl' selected>";echo"Rene Noel Lopez";echo"</option>";
    	echo"<option value='cbc'>";echo"Carlos Becerra Castro";echo"</option>";
    	echo"<option value='roo'>";echo"Rodrigo Olivares Ordenes";echo"</option>";
    	echo"<option value='epg'>";echo"Eliana Providel Godoy";echo"</option>";
    	echo"<option value='ctt'>";echo"Carla Taramasco Toro";echo"</option>";
    	echo"<option value='Andés Ramos Magna'>";echo"Andr&eacute;s Ramos Magna";echo"</option>";
	}elseif ($person->PRF_COR2=="cbc") {
		echo"<option value='mav' >";echo"Marcos Aravena Vivar";echo"</option>";
    	echo"<option value='gam'>";echo"Gabriel Astudillo M";echo"</option>";
    	echo"<option value='mbm'>";echo"Marta Barria Martinez";echo"</option>";
    	echo"<option value='ccv'>";echo"Cristian Carrion Valencia";echo"</option>";
    	echo"<option value='rms'>";echo"Roberto Mu&ntilde;oz Soto";echo"</option>";
    	echo"<option value='rnl'>";echo"Rene Noel Lopez";echo"</option>";
    	echo"<option value='cbc' selected>";echo"Carlos Becerra Castro";echo"</option>";
    	echo"<option value='roo'>";echo"Rodrigo Olivares Ordenes";echo"</option>";
    	echo"<option value='epg'>";echo"Eliana Providel Godoy";echo"</option>";
    	echo"<option value='ctt'>";echo"Carla Taramasco Toro";echo"</option>";
    	echo"<option value='Andés Ramos Magna'>";echo"Andr&eacute;s Ramos Magna";echo"</option>";
	}elseif ($person->PRF_COR2=="roo") {
		echo"<option value='mav' >";echo"Marcos Aravena Vivar";echo"</option>";
    	echo"<option value='gam'>";echo"Gabriel Astudillo M";echo"</option>";
    	echo"<option value='mbm'>";echo"Marta Barria Martinez";echo"</option>";
    	echo"<option value='ccv'>";echo"Cristian Carrion Valencia";echo"</option>";
    	echo"<option value='rms'>";echo"Roberto Mu&ntilde;oz Soto";echo"</option>";
    	echo"<option value='rnl'>";echo"Rene Noel Lopez";echo"</option>";
    	echo"<option value='cbc'>";echo"Carlos Becerra Castro";echo"</option>";
    	echo"<option value='roo' selected>";echo"Rodrigo Olivares Ordenes";echo"</option>";
    	echo"<option value='epg'>";echo"Eliana Providel Godoy";echo"</option>";
    	echo"<option value='ctt'>";echo"Carla Taramasco Toro";echo"</option>";
    	echo"<option value='Andés Ramos Magna'>";echo"Andr&eacute;s Ramos Magna";echo"</option>";
	}elseif ($person->PRF_COR2=="epg") {
		echo"<option value='mav' >";echo"Marcos Aravena Vivar";echo"</option>";
    	echo"<option value='gam'>";echo"Gabriel Astudillo M";echo"</option>";
    	echo"<option value='mbm'>";echo"Marta Barria Martinez";echo"</option>";
    	echo"<option value='ccv'>";echo"Cristian Carrion Valencia";echo"</option>";
    	echo"<option value='rms'>";echo"Roberto Mu&ntilde;oz Soto";echo"</option>";
    	echo"<option value='rnl'>";echo"Rene Noel Lopez";echo"</option>";
    	echo"<option value='cbc'>";echo"Carlos Becerra Castro";echo"</option>";
    	echo"<option value='roo'>";echo"Rodrigo Olivares Ordenes";echo"</option>";
    	echo"<option value='epg' selected>";echo"Eliana Providel Godoy";echo"</option>";
    	echo"<option value='ctt'>";echo"Carla Taramasco Toro";echo"</option>";
    	echo"<option value='Andés Ramos Magna'>";echo"Andr&eacute;s Ramos Magna";echo"</option>";
	}elseif ($person->PRF_COR2=="ctt") {
		echo"<option value='mav' >";echo"Marcos Aravena Vivar";echo"</option>";
    	echo"<option value='gam'>";echo"Gabriel Astudillo M";echo"</option>";
    	echo"<option value='mbm'>";echo"Marta Barria Martinez";echo"</option>";
    	echo"<option value='ccv'>";echo"Cristian Carrion Valencia";echo"</option>";
    	echo"<option value='rms'>";echo"Roberto Mu&ntilde;oz Soto";echo"</option>";
    	echo"<option value='rnl'>";echo"Rene Noel Lopez";echo"</option>";
    	echo"<option value='cbc'>";echo"Carlos Becerra Castro";echo"</option>";
    	echo"<option value='roo'>";echo"Rodrigo Olivares Ordenes";echo"</option>";
    	echo"<option value='epg'>";echo"Eliana Providel Godoy";echo"</option>";
    	echo"<option value='ctt' selected>";echo"Carla Taramasco Toro";echo"</option>";
    	echo"<option value='Andés Ramos Magna'>";echo"Andr&eacute;s Ramos Magna";echo"</option>";
	}elseif ($person->PRF_COR2=="Andés Ramos Magna") {
		echo"<option value='mav' >";echo"Marcos Aravena Vivar";echo"</option>";
    	echo"<option value='gam'>";echo"Gabriel Astudillo M";echo"</option>";
    	echo"<option value='mbm'>";echo"Marta Barria Martinez";echo"</option>";
    	echo"<option value='ccv'>";echo"Cristian Carrion Valencia";echo"</option>";
    	echo"<option value='rms'>";echo"Roberto Mu&ntilde;oz Soto";echo"</option>";
    	echo"<option value='rnl'>";echo"Rene Noel Lopez";echo"</option>";
    	echo"<option value='cbc'>";echo"Carlos Becerra Castro";echo"</option>";
    	echo"<option value='roo'>";echo"Rodrigo Olivares Ordenes";echo"</option>";
    	echo"<option value='epg'>";echo"Eliana Providel Godoy";echo"</option>";
    	echo"<option value='ctt'>";echo"Carla Taramasco Toro";echo"</option>";
    	echo"<option value='Andés Ramos Magna' selected>";echo"Andr&eacute;s Ramos Magna";echo"</option>";
	}
    else{
        echo"<option value='mav' >";echo"Marcos Aravena Vivar";echo"</option>";
        echo"<option value='gam'>";echo"Gabriel Astudillo M";echo"</option>";
        echo"<option value='mbm'>";echo"Marta Barria Martinez";echo"</option>";
        echo"<option value='ccv'>";echo"Cristian Carrion Valencia";echo"</option>";
        echo"<option value='rms'>";echo"Roberto Mu&ntilde;oz Soto";echo"</option>";
        echo"<option value='rnl'>";echo"Rene Noel Lopez";echo"</option>";
        echo"<option value='cbc'>";echo"Carlos Becerra Castro";echo"</option>";
        echo"<option value='roo'>";echo"Rodrigo Olivares Ordenes";echo"</option>";
        echo"<option value='epg'>";echo"Eliana Providel Godoy";echo"</option>";
        echo"<option value='ctt'>";echo"Carla Taramasco Toro";echo"</option>";
        echo"<option value='Andés Ramos Magna'>";echo"Andr&eacute;s Ramos Magna";echo"</option>";
        echo"<option value='<?php echo $person->PRF_COR2; ?>' selected>";echo $person->PRF_COR2; echo"</option>";

    }

	


}


?>
