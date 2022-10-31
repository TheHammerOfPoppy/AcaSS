<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>REGISTRO DE USUARIO</title>
  </head>

  <body style = "background-image: url('../img/fondoClaro.jpg'); background-size: cover;">
    
      <div class="container">
        
      <img src="../img/logo.png" height="100px" >

  <body style = "background-image: url('../img/fondoPlaya.jpg'); background-size: cover;">
    
      <div class="container">
        <img src="../img/logo.png" height="200px" >
        <h2>Registro de Estudiantes</h2>
        
      </div>
      <form class="contact__form container" method="post" action="mail.php">
         
      <!--Starting of successful form message -->
          <div class="row">
              <div class="col-12">
                  <div class="alert alert-success contact__msg" style="display: none" role="alert">
                      Tu informacion se mando con exito.
                  </div>
              </div>
          </div>
          <!--Ending of successful form message -->

          <!-- Formulario registro-->
          <div class="card text-bg-light mb-3"">
            <div class="card-header"><h2 class=" text-center">Registro de Estudiantes</h2></div>
            <div class="card-body">
            <div class="row">
          <div class="row">

              <div class="col-md-6 form-group">
                  <input name="nombre" type="text" class="form-control" placeholder="Nombre Completo" required>
              </div>
              <div class="col-md-6 form-group">
                  <select name="actividad" type="text" class="form-control" required>
                  <option selected>Actividad a Realizar</option>
                  <option value="1">Residencias</option>
                  <option value="2">Servicio Social</option>
                  <option value="3">Estadias Profesionales</option>

                  </select>
              </div>
              <div class="col-md-6 form-group">
                <input name="correo" type="email" class="form-control" placeholder="Correo Electrónico" required>
              </div>
              <div class="col-md-6 form-group">
                  <input name="phone" type="text" class="form-control" placeholder="Telefono celular" required>
              </div>
              <div class="col-md-6 form-group">
                  <input name="subject" type="password" class="form-control" placeholder="Contraseña" required>
              </div>
              <div class="col-12 form-group">
                  <textarea name="message" class="form-control" rows="3" placeholder="Explica cual sera tu actividad que desempeñaras" required></textarea>
              </div>
              <div class="col-12">
                  <input name="submit" type="submit" class="btn btn-dark" value="Registrarse">
                  <a href="<?php echo base_url('/inicioSesion')?>" class="btn btn-link">¿Ya estas registrado? Inicia sesion!</button>
              </div>
          </div>
          </div>
                  <input name="phone" type="text" class="form-control" placeholder="Phone" required>
              </div>
              <div class="col-md-6 form-group">
                  <input name="subject" type="text" class="form-control" placeholder="Subject" required>
              </div>
              <div class="col-12 form-group">
                  <textarea name="message" class="form-control" rows="3" placeholder="Message" required></textarea>
              </div>
              <div class="col-12">
                  <input name="submit" type="submit" class="btn btn-success" value="Send Message">
              </div>
          </div>
      </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>