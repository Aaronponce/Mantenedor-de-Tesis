<?php
$sql1= "SELECT * FROM trab_tit where id = ".$_GET["id"];
$query = $con->query($sql1);
$person = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $person=$r;
  break;
}

  }
  
  include "config2.php";
  $pagina = $_GET["pagina"];

  ?>