<!---?php
    $nombre_temporal = $_FILES['arch']['tmp_name'];
    $nombre = $_FILES['arch']['name'];
    move_uploaded_file($nombre_temporal, 'documentos/'.$nombre);
?--->
<?php
$conteo = count($_FILES["archivos"]["name"]);
for ($i = 0; $i < $conteo; $i++) {
    $ubicacionTemporal = $_FILES["archivos"]["tmp_name"][$i];
    $nombreArchivo = $_FILES["archivos"]["name"][$i];
    $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
    // Renombrar archivo
    $nuevoNombre = sprintf("%s_%d.%s", uniqid(), $i, $extension);
    // Mover del temporal al directorio actual
    move_uploaded_file($ubicacionTemporal, $nuevoNombre);
}
// Responder al cliente
echo json_encode(true);