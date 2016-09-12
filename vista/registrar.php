
<html lang="en">
<head>
  <meta charset="UTF-8">
     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/latest/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="./bootstrap/js/jquery-ui/jquery-ui.min.css" />
        <script src="http://code.jquery.com/jquery-1.9.0.js"></script>
  <script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
    <script src="./js/jquery.min.js"></script>
 <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" type="text/css" href="../vista/bootstrap/css/bootstrap.min.css">-->
 
</head>
<style type="text/css">
.main{
  background: #f2f2f2;
}
</style>
<body>
  <header>
    <div class="container">
      <h1>Registro</h1>
    </div>
  </header>
  
  <div class="container">
    <section class="main row">
      <div >
    <br>
    <div>
      <h4>Datos</h1> 
    </div>
    <form id="formulario" action="../controlador/agregar.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
  <!--  <fieldset disabled=""> sirve para desabilitar todo-->
  <div  class="form-group">
        
            <label class="col-md-2" for="RUT">RUT</label>  
          
          <div class="col-md-4">
            <input class="form-control" type="text" name="RUT" placeholder="(sin puntos ni digito verificador)" >
          </div>   
      </div>
       
      <div class="form-group">
        <label class="col-md-2" for="nombre">Nombre:</label>
        <div class="col-md-8">
          <input class="form-control" id="nombre" type="text" placeholder="Nombre:" name="nombre" value=""  required></input>   
        </div>
      </div>
      
      <div class="form-group"> 
        <label class="col-md-2" for="pass1">Password:</label>
        <div class="col-md-8">
           
            <input class="form-control" id="password" type="password" placeholder="Password:" name="password" value=""  required>
        </div>
      </div>
        <div class="form-group">
          <label class="col-md-2" for="pass2">Confirm Password:</label>
          <div class="col-md-8">
            
            <input class="form-control" id="password2" type="password" placeholder="Confirm Password:" name="password2" value=""  required onkeyup="checkPass(); return false;">
            <span id="confirmMessage" class="confirmMessage"></span>
            <script type="text/javascript">
            function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('password');
    var pass2 = document.getElementById('password2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
} </script>
        </div>
      </div>


      <div class="form-group">
        <label class=" col-md-2" for="email">Correo:</label>
        <div class="col-md-3">
          <input class="form-control " id="email" type="text" placeholder="email:" name="email"  required></input>
        </div>
      </div>
      
    
        

     
       


        <input class="btn btn-success" id="registrar" type="submit" value="Registrar" > </input>
      </div>
      </div>
    </form> 
  </div>

  
 </body>
</html>
