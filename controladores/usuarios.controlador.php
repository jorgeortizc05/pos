<?php

class ControladorUsuarios
{

    /*=================================================
    LOGIN DE USUARIOS
    =================================================*/
    static public function ctrIngresoUsuario()
    {
        //si hago un post con el form y este post tiene un name="ingUsuario", entra
        if (isset($_POST["ingUsuario"])) { //si existe ese campo
            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])) {

                $tabla = "usuarios";
                $item = "usuario";
                $valor = $_POST["ingUsuario"];

                $respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);
                //var_dump($respuesta);//muestra informacion de manera estructurada
                if ($respuesta["usuario"] == $_POST["ingUsuario"] && $respuesta["password"] == $_POST["ingPassword"]) {
                    echo '<br><div class="alert alert-success">Bienvenido al sistema</div>';
                    $_SESSION["iniciarSesion"] = "ok";
                    echo '<script>
                        window.location = "inicio";
                    </script>';
                } else {
                    echo '<br><div class="alert alert-danger">Error al ingresar, vuelve a intentar</div>';
                }
            }
        }
    }

    /*=================================================
    NUEVO REGISTRO
    =================================================*/
    static public function ctrCrearUsuario()
    {
        //si hago un post con el modal usuario y del form y este post tiene un name="nuevoUsuario", entra

        if (isset($_POST["nuevoUsuario"])) {
//            echo $_POST["nuevoUsuario"] . $_POST["nuevoUsuario"] . $_POST["nuevoPassword"];
            if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ]+$/', $_POST["nuevoNombre"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoUsuario"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoPassword"])) {

                $tabla = "usuarios";
                $datos = array("nombre" => $_POST["nuevoNombre"],
                    "usuario" => $_POST["nuevoUsuario"],
                    "password" => $_POST["nuevoPassword"],
                    "perfil" => $_POST["nuevoPerfil"]);

                $respuesta = ModeloUsuarios::mdlIngresarUsuario($tabla, $datos);
                if($respuesta == "ok"){
                    echo "<script>
                    $(function (){
                        Swal.fire({
                            type:'success',
                            title: 'El usuario ha sido guardado correctamente',
                            showConfirmButton: true,
                            confirmButtonText: 'Cerrar',
                            closeOnConfirm: false,
                        }).then((result) =>{
                            if(result.value){
                                window.location = 'usuarios';
                            }
                        });
                    })
                </script>";
                }
            } else {
                echo "<script>
                    $(function (){
                        Swal.fire({
                            type:'error',
                            title: 'El usuario no puede ir vacio o llevar caracteres especiales',
                            showConfirmButton: true,
                            confirmButtonText: 'Cerrar',
                            closeOnConfirm: false,
                        }).then((result) =>{
                            if(result.value){
                                window.location = 'usuarios';
                            }
                        });
                    })
                </script>";
                /*echo '<script>
                $(function (){
                  Swal.fire(
                      "Good job!",
                      "You clicked the button!",
                      "success"
                    )
                });
                </script>';*/
            }
        }
    }


}