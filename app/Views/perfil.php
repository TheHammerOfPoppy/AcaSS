<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>PERFIL DE USUARIO</title>
  </head>
  <body style = "background-image: url('../img/fondoClaro.jpg'); background-size: cover;">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><?php echo session('usuario');?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#" align = 'right'>Asistencia <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Opciones
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url('/perfil') ?>">Perfil</a>
          <a class="dropdown-item" href="<?php echo base_url('/archivos') ?>">Archivos</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo base_url('/salir') ?>">Cerrar sesion</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<br>
	<br>
    <div class="border d-flex justify-content-center">
    <div class="card text-bg-primary mb-3 d-flex " style="max-width: 850px;" >
        <div class="card-header text-center"><h1>PERFIL:<h1 class="navbar-brand" href="#"><?php echo session('usuario');?></h1></h1></div>
        <div class="card-body">
        <div class="container">
      <div class="row d-flex justify-content-center">
      <form method="post" id="perfil">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 toppad" >
   
   
          <div class="panel panel-success">
            <div class="panel-body">
              <div class="row">
			  
                <div class="col-md-3 col-lg-3 " align="center"> 
				<div id="load_img">
        <img id="img" alt="Logo" width="150" height="500">
					
				</div>
				<br>				
					<div class="row">
  						<div class="col-md-12">
							<div class="form-group">
                <input type="file" id="file" accept="image/*" onchange="mostrar()"/>
                <br>
                
							</div>
						</div>
						
					</div>
				</div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-condensed">
                    <tbody>
                      <tr>
                        <td class='col-md-3'>Nombres y Apellidos:</td>
                        <td><input type="text" class="form-control input-sm" name="nombre_apellido" value='<?php echo session('nomApe');?>'></td>
                      </tr>
                      <tr>
                        <td>Ocupación:</td>
                        <td><input type="text" class="form-control input-sm" name="ocupacion"  value='<?php echo session('ocupacion');?>'></td>
                      </tr>
                      <tr>
                        <td>Correo electrónico:</td>
                        <td><input type="email" class="form-control input-sm" name="correo" value='<?php echo session('email');?>'></td>
                      </tr>
					  <tr>
                        <td>Telefono:</td>
                        <td><input type="text" class="form-control input-sm" required name="telefono" value='<?php echo session('tel');?>'></td>
                      </tr>

                      <tr>
                        <td>Asesor:</td>
                        <td><input type="text" class="form-control input-sm" required name="asesor" value='<?php echo session('asesor');?>'></td>
                      </tr>

					  <tr>
                        <td>Departamento:</td>
                        <td><input type="text" class="form-control input-sm" name="departamento" value='<?php echo session('depart');?>'></td>
                      </tr>
					  <tr>
                        <td>Ciudad:</td>
                        <td><input type="text" class="form-control input-sm" name="ciudad" value='<?php echo session('ciudad');?>'></td>
                      </tr>
					  <tr>
                        <td>Codigo Postal:</td>
                        <td><input type="text" class="form-control input-sm" name="codigo_postal" value='<?php echo session('codPos');?>'></td>
                      </tr>
					  <tr>
                        <td>Institucion donde estudia</td>
                        <td><input type="text" class="form-control input-sm" name="institucion" value='<?php echo session('instEst');?>'></td>
                      </tr>
                   
                        
                     
                    </tbody>
                  </table>
                  
                  
                </div>
				<div class='col-md-12' id="resultados_ajax"></div><!-- Carga los datos ajax -->
              </div>
            </div>
                 <div class="panel-footer text-center">
                    
                     
                <button type="submit" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-refresh"></i> Actualizar datos</button>

                       
                       
                    </div>
            
          </div>
        </div>
		</form>
      </div>
        </div>
    </div>
    </div>
    
	

	
	<?php
	//include("footer.php");
	?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

<script>
function mostrar(){
  var archivo = document.getElementById("file").files[0];
  var reader = new FileReader();
  if (file) {
    reader.readAsDataURL(archivo );
    reader.onloadend = function () {
      document.getElementById("img").src = reader.result;
    }
  }
}
</script>