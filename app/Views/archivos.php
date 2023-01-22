<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Archivos</title>
  </head>
  <body style = "background-image: url('../img/fondoClaro.jpg'); background-size: cover;">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo base_url('/inicio') ?>"><?php echo session('usuario');?></a>
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
<div class="border d-flex justify-content-center">
    <div class="card text-bg-primary mb-3 d-flex " style="max-width: 850px;" >
        <div class="card-header text-center"><h1 class="navbar-brand" href="#"><?php echo session('usuario');?></h1><h1>ARCHIVOS OBLIGATORIOS</h1></div>
        <div class="card-body">
        <div class="container">
      <div class="row d-flex justify-content-center">
    <form name="form_subir" id="form_subir" enctype="multipart/form-data" method="post">
    <table class="table table-condensed">
                    <tbody>
                      <tr>
                        <td>
                            <div class="form-1-2">
                                <label for="">CARTA DE PRESENTACION: </label>
                                <input type="file" id="arch" onchange="return validarExt()" required>
                                <input type="submit" class="btn btn-sm btn-success" value="Enviar" onclick="enviarPDF();">
                            </div>
                        </td>
                      </tr>
</form>
<form name="form_subir1" id="form_subir1" enctype="multipart/form-data" method="post">
    <table class="table table-condensed">
                    <tbody>
                      <tr>
                      <td>
                            <div class="form-1-2">
                                <label for="">NUMERO DE SEGURO SOCIAL: </label>
                                <input type="file" id="arch1" onchange="return validarExt1()" required>
                                <input type="submit" class="btn btn-sm btn-success" value="Enviar" onclick="enviarPDF();">
                            </div>
                        </td>
                      </tr>
</form>
<form name="form_subir2" id="form_subir2" enctype="multipart/form-data" method="post">
    <table class="table table-condensed">
                    <tbody>
                      <tr>
                      <td>
                            <div class="form-1-2">
                                <label for="">IDENTIFICACION: </label>
                                <input type="file" id="arch2" onchange="return validarExt2()" required>
                                <input type="submit" class="btn btn-sm btn-success" value="Enviar" onclick="enviarPDF();">
                            </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
        <div class="barra">
            <div class="barra_azul" id="barra_estado">
                <span></span>
            </div>
        </div>
    </form>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

<script type="text/javascript">
    function validarExt()
    {
        var arch = document.getElementById('arch');
        var archivoRuta = arch.value;
        var extPermitidas = /(.pdf)$/i;
        if(!extPermitidas.exec(archivoRuta))
        {
            alert('Solo se aceptan archivos PDF');
            arch.value='';
            return false;
        }
    }

    function validarExt1()
    {
        var arch1 = document.getElementById('arch1');
        var archivoRuta1 = arch1.value;
        var extPermitidas1 = /(.pdf)$/i;
        if(!extPermitidas1.exec(archivoRuta1))
        {
            alert('Solo se aceptan archivos PDF');
            arch1.value='';
            return false;
        }
    }

    function validarExt2()
    {
        var arch2 = document.getElementById('arch2');
        var archivoRuta2 = arch2.value;
        var extPermitidas2 = /(.pdf)$/i;
        if(!extPermitidas2.exec(archivoRuta2))
        {
            alert('Solo se aceptan archivos PDF');
            arch2.value='';
            return false;
        }
    }
    
    function enviarPDF() 
    {
    var parametros = new FormData($("#form_subir")[0]);
    $.ajax({
      data: parametros,
      url: "ajax/insertar_ajax.php",
      type: "POST",
      contentType: false,
      processData: false,
      beforsend: function(){

      },
      success: function(response){
          alert(response);
      }
    })

    }
</script>