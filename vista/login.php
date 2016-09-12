<?php
session_start();


function verificar($nombre,$password,&$result){
	include "../modelo/conexion.php";
	$slq = "SELECT * FROM login ";
	$rec = mysqli_query($con,$slq);
	$count=0;

	while ($r = mysqli_fetch_array($rec, MYSQLI_ASSOC)) {
		$id= $r['ID'];
		$nombre1= $r['Nombre'];
		$password1= $r['Password'];
		break;
	}
	
	if($nombre1==$_POST['nombre'])
		if($password1==$_POST['password'])
		return 1;
	else
		return 0;

}	


if(!isset($_SESSION['RUT'])){
	if(isset($_POST['login'])){
		if(verificar($_POST['nombre'],$_POST['password'],$result)==1){
			$_SESSION['RUT'] = $result['RUT'];

			print "<script>alert(\"Ingreso exitoso.\");window.location='../vista/index.php';</script>";
		}
		else{
			echo '<div class="error">Su usuario es incorrecto. </div>';
		}
	}

?>
<style type="text/css"> 
*{ 
    font-size: 14px; 
} 
body{ 
background:#aaa; 
} 
form.login { 
    background: none repeat scroll 0 0 #F1F1F1; 
    border: 1px solid #DDDDDD; 
    font-family: sans-serif; 
    margin: 0 auto; 
    padding: 20px; 
    width: 278px; 
    box-shadow:0px 0px 20px black; 
    border-radius:10px; 
} 
form.login div { 
    margin-bottom: 15px; 
    overflow: hidden; 
} 
form.login div label { 
    display: block; 
    float: left; 
    line-height: 25px; 
} 
form.login div input[type="text"], form.login div input[type="password"] { 
    border: 1px solid #DCDCDC; 
    float: right; 
    padding: 4px; 
} 
form.login div input[type="submit"] { 
    background: none repeat scroll 0 0 #DEDEDE; 
    border: 1px solid #C6C6C6; 
    float: right; 
    font-weight: bold; 
    padding: 4px 20px; 
} 
.error{ 
    color: red; 
    font-weight: bold; 
    margin: 10px; 
    text-align: center; 
} 
</style> 
  
<form action="" method="post" class="login"> 
    <div><label>Nombre</label><input name="nombre" type="text" required></div> 
    <div><label>Password</label><input name="password" type="password"required></div> 
    <div><input name="login" type="submit" value="login"></div>
    <a href="registrar.php"  class="btn">Registrar</a>
</form>
<?php 
}
else{
	echo 'Su usuario ingreso correctamente';
	echo '<a href="logout.php">Logout</a>';
}
?>