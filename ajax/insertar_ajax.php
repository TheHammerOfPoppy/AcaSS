<?php

    /* $PDFPresentacion = $FILES["arch"];
    $PDFSeguro = $FILES["arch1"];
    $PDFIdentificacion = $FILES["arch2"];

    $nom_encriptado = md5_file($PDFPresentacion["tmp_name"]);
    $ruta="./documentos/".$nom_encriptado.".pdf";
    move_uploaded_file($PDFPresentacion["tmp_name"],$ruta);

    $nom_encriptado1 = md5_file($PDFSeguro["tmp_name"]);
    $ruta1="./documentos/".$nom_encriptado1.".pdf";
    move_uploaded_file($PDFSeguro["tmp_name"],$ruta1);

    $nom_encriptado2 = md5_file($PDFIdentificacion["tmp_name"]);
    $ruta2="./documentos/".$nom_encriptado2.".pdf";
    move_uploaded_file($PDFIdentificacion["tmp_name"],$ruta2);

 */


    $foto = $_FILES["file"];

    if($foto["type"] == "image/jpg" or $foto["type"] == "image/jpeg"){

        $nom_encriptado = md5_file($PDFPresentacion["tmp_name"]);
        $ruta="img/".$nom_encriptado.".jpg";
        move_uploaded_file($PDFPresentacion["tmp_name"],$ruta);

    }
?>