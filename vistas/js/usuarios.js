/*=============================================
SUBIENDO LA FOTO DEL USUARIO
=============================================*/

$(".nuevaFoto").change(function () {
    //files de java script, solo funciona en tipo files
    var imagen = this.files[0]; //Files es un vector, en la posicion 0 estan los datos que nos interesa
    //console.log("imagen", imagen);

    if (imagen["type"] != "image/jpeg" && imagen["type"] != "image/png") {
        $(".nuevaFoto").val("");
        Swal.fire({
            icon: 'error',
            title: 'Error al subir la imagen',
            text: 'La imagen debe estar en formato JPG o PNG',
            confirmButtonText: 'Cerrar',
        });
    } else if (imagen["size"] > 2000000) { //Son bytes
        $(".nuevaFoto").val("");
        Swal.fire({
            icon: 'error',
            title: 'Error al subir la imagen',
            text: 'La imagen no debe pesar más de 2MB',
            confirmButtonText: 'Cerrar',
        });
    }else{
        var datosImagen = new FileReader(); //Clase FileReader(): hace lectura del archivo
        datosImagen.readAsDataURL(imagen); //Leer el dato como url
        $(datosImagen).on("load",function (event){
            var rutaImagen = event.target.result;
            $(".previsualizar").attr("src", rutaImagen); //reemplazo el src actual por el src de la ruta imagen
        })
    }
})

