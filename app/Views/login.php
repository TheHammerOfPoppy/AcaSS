<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>INICIO DE SESION</title>
  </head>
  <body style = "background-image: url('../img/fondoClaro.jpg'); background-size: cover;">
    <div class = "container">
        <img src="../img/logo.png" height="100px" > 
        <div class="row">
            <div class=" col-xxl-7 col-lg-7 col-md-8 col-sm-12 pt-5 mt-5">
            <div class="card text-bg-danger mb-3">
            <div class="card-header text-center"><H1>SERVICIO SOCIAL DE ACAPULCO</H1></div>
            <div class="card-body">
                <form action="<?php echo base_url('/login') ?>" method="POST">

                  <label for="usuario">Usuario</label>
                  <input type="text" name="usuario" class="form-control" required="">
                  <label for="password">Contraseña</label>
                  <input type="password" name="password" class="form-control" required="">
                  <br>
                  <button class="btn btn-dark">ENTRAR</button>
                  <a href="<?php echo base_url('/registroUsuario')?>" class="btn btn-link">¿No estas registrado? Registrate!</button>

                </form>
            </div>
            </div>
            </div>
            </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>