<!DOCTYPE html>
<?php include "../Config/config.php"; include "crearselect.php"; ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <!--<link rel="stylesheet" type="text/css" href="../vista/bootstrap/css/bootstrap.min.css">-->
 
</head>
<style type="text/css">
.main{
  background: #f2f2f2;
}
</style>
<body>
  <header>
    <div class="container">
      <h1>Registro de Tesis</h1>
    </div>
  </header>
  
  <div class="container">
    <section class="main row">
      <div >
    <br>
    <div>
      <h4>Datos del Alumno</h1> 
    </div>
    <form id="formulario" action="../controlador/controlador2.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
  <!--  <fieldset disabled=""> sirve para desabilitar todo-->
  <div  class="form-group">
        <div>
          <div class="col-md-2">
            <label for="PUBLICADA">Publicada</label>  
          </div>
          <div class="col-md-2">
            <input type="radio" name="publicada" value='SI' >Si
            <input type="radio" name="publicada" value='NO'>No
          </div>
        </div>  
      </div>
        <div  class="form-group">
        <div>
          <label class="col-md-2" for="FECHA">Fecha de Titulaci&oacute;n:</label>
          <div class="col-md-3" >
              
            <div class="form-control">
              <input  class="datepicker" name="fecha"  value="" data-validation-tipo="requerido" />
   
              <script type="text/javascript">
              $(function(){
              $('.datepicker').datepicker({dateFormat: 'yy-mm-dd'});
              });
            </script> </div>
            </div>
        </div>  
      </div>
      <div class="form-group">
        <label class="col-md-2" for="nombre">Nombre:</label>
        <div class="col-md-8">
          <input class="form-control" id="nombre" type="text" placeholder="Nombre:" name="nombre" value=""  required></input>   
        </div>
      </div>


      <div class="form-group">
        <label class=" col-md-2" for="email">Correo:</label>
        <div class="col-md-3">
          <input class="form-control " id="email" type="text" placeholder="email:" name="email"  required></input>
        </div>
      </div>
      
      <div class="form-group">
          <label class=" col-md-2" for="Carrera">Carrera:</label>   
        <div class="col-md-3">
            <?php selected($carreras, 'carrera', "Carrera"); ?>
           <!-- <select class="form-control" id="sel1" name="carrera"  required>
              <option selected disabled>Carrera</option>
              
              <option value="civinf">Ingenieria Civil en informatica</option>
            <option value="inf">Ingenieria en Informatica</option>
            <option value="ejeinf">Ingenieria en Ejecucion en Informatica</option>
            </selet>-->
        </div>
      </div>
          <div class="form-group">
            <label class=" col-md-2" for="Mencion">Mencion:</label>   
          <div class="col-md-3">
              <?php selected($menciones, 'men_principal', "Mencion "); ?>
             <!-- <select class="form-control" id="sel1" name="men_principal"  required>
              <option selected disabled>Mencion</option>
              
              <option value="sw" >Gestion en Proyectos de Software</option>
              <option value="gestion" >Gestion y Dise&ntilde;ode base de datos</option>
              <option value="redes" >Redes y Telecomunicaciones</option>
              <option value="sinmenc">Sin Mencion</option>
              </select>-->
          </div>
        </div>


      <div>
        <h4>Datos del trabajo</h1>  
      </div>
        <div class="form-group ">
          <label class="col-md-2" for="Titulo">Titulo del Trabajo:</label>
          <div class="col-md-8">
            <input class="form-control" id="titulo" type="text" placeholder="Nombre del Trabajo:" name="titulo"  required></input>  
          </div>
        </div>
      <div class="form-group">
            <label class=" col-md-2" for="Profesor Guia">Profesor Guia:</label>   
          <div class="col-md-2">
              <?php selected($profesores, 'prf_guia', "Profesor Gu&iacute;a"); ?>
             <!-- <select class="form-control" id="sel1" name="prf_guia" ="">
              <option  selected disabled>Profesor Guia</option>
              
              <option value="mav">Marcos Aravena Vivar</option>
              <option value="gam">Gabriel Astudillo Mu&ntilde;oz</option>
              <option value="mbm">Marta Barria Martinez</option>
              <option value="ccv">Cristian Carrion Valencia</option>
              <option value="rms">Roberto Mu&ntilde;oz Soto</option>
              <option value="rnl">Rene Noel Lopez</option>
              <option value="cbc">Carlos Becerra Castro</option>
              <option value="roo">Rodrigo Olivares Ordenes</option>
              <option value="epg">Eliana Providel Godoy</option>
              <option value="ctt">Carla Taramasco Toro</option>
              
              </select>-->
          </div>
          <label class="col-md-1" for="Otro Profesor">Otro Profesor:</label>
        <div class="col-md-5">
          <!--<input class="form-control" id="nombre" type="text" placeholder="Nombre:" name="nombre" value=""></input> -->
          <input class="form-control" type="text" placeholder="Profesor" name="OtroProfesorguia" value=""></input>  
        </div>
      </div>
      <div class="form-group">
            <label class=" col-md-2" for="Profesor Correferente I">Profesor Correferente I:</label>   
          <div class="col-md-2" >
             <?php selected($profesores, 'prf_guia', "Profesor Correferente I"); ?>
              <!--<select class="form-control" id="sel1" name="prf_cor1" ="">
                <option selected disabled>Profesor Correferente I</option>
               <option value="mav">Marcos Aravena Vivar</option>
              <option value="gam">Gabriel Astudillo M</option>
              <option value="mbm">Marta Barria Martinez</option>
              <option value="ccv">Cristian Carrion Valencia</option>
              <option value="rms">Roberto Muñoz Soto</option>
              <option value="rnl">Rene Noel Lopez</option>
              <option value="cbc">Carlos Becerra Castro</option>
              <option value="roo">Rodrigo Olivares Ordenes</option>
              <option value="epg">Eliana Providel Godoy</option>
              <option value="ctt">Carla Taramasco Toro</option>
              </seect>-->
          </div>
          <label class="col-md-1" for="Otro Profesor">Otro Profesor:</label>
        <div class="col-md-5">
          <input class="form-control" id="OtroProfesor" type="text" name="OtroProfesorCor" placeholder="Profesor" value="" ></input>  
        </div>
        </div>
      <div class="form-group">
            <label class=" col-md-2" for="Profesor Correferente II">Profesor Correferente II:</label>   
          <div class="col-md-2">
             <?php selected($profesores, 'prf_guia', "Profesor Correferente II"); ?>
              <!--<select class="form-control" id="sel1" name="prf_cor2" ="">
                <option selected disabled>Profesor Correferente II</option>
                <option value="mav">Marcos Aravena Vivar</option>
              <option value="gam">Gabriel Astudillo M</option>
              <option value="mbm">Marta Barria Martinez</option>
              <option value="ccv">Cristian Carrion Valencia</option>
              <option value="rms">Roberto Muñoz Soto</option>
              <option value="rnl">Rene Noel Lopez</option>
              <option value="cbc">Carlos Becerra Castro</option>
              <option value="roo">Rodrigo Olivares Ordenes</option>
              <option value="epg">Eliana Providel Godoy</option>
              <option value="ctt">Carla Taramasco Toro</option>
              </select>-->
          </div>
          <label class="col-md-1" for="Otro Profesor">Otro Profesor:</label>
        <div class="col-md-5">
          <input class="form-control" id="OtroProfesor" type="text" name="OtroProfesorCorII" placeholder="Profesor" value="" ></input>  
        </div>
        </div>
      <div class="form-group">
          <label class=" col-md-2" for="comment">Resumen:</label>
          <div class="col-md-8">
            <textarea class="form-control" rows="5" id="comment" name="resumen" placeholder="Resumen del Trabajo de Titulo" required ></textarea>
          </div>
      </div>
      <div class="form-group">
        <label class=" col-md-2" for="archivo"> Archivo:</label><small>Maximo 50MB</small>
        <input name="archivo" type="file" required></input>
      </div>
      <div>
        <input class="btn btn-success" id="registrar" type="submit" value="Registrar" > </input>
      </div>
      </div>
    </form> 
  </div>

  
 </body>
</html>
