/* document.addEventListener("DOMContentLoaded", ()=> {
    let form2 = document.getElementById('form_subir');

    form2.addEventListener("submit", function(event){
        event.preventDeafult();
        subir_archivos(this);
    });
});

function subir_archivos(form) {
        let peticion = new XMLHttpRequest();
        peticion.open('post', 'subir.php');
        peticion.send(new FormData(form));
    } */

    const $arch = document.querySelector("#inputArchivos"),
    $btnEnviar = document.querySelector("#btnEnviar"),
    $estado = document.querySelector("#estado");
$btnEnviar.addEventListener("click", async () => {
    const archivosParaSubir = $arch.files;
    if (archivosParaSubir.length <= 0) {
        // Si no hay archivos, no continuamos
        return;
    }
    // Preparamos el formdata
    const formData = new FormData();
    // Agregamos cada archivo a "archivos[]". Los corchetes son importantes
    for (const archivo of archivosParaSubir) {
        formData.append("archivos[]", archivo);
    }
    // Los enviamos
    $estado.textContent = "Enviando archivos...";
    const respuestaRaw = await fetch("./subir.php", {
        method: "POST",
        body: formData,
    });
    const respuesta = await respuestaRaw.json();
    // Puedes manejar la respuesta como tú quieras
    console.log({ respuesta });
    // Finalmente limpiamos el campo
    $arch.value = null;
    $estado.textContent = "Archivos enviados";
});