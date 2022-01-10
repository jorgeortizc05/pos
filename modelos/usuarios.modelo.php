<?php

require_once "conexion.php";

class ModeloUsuarios{
    /*=================================================
    MOSTRAR USUARIOS
    =================================================*/

    static public function mdlMostrarUsuarios($tabla, $item, $valor){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item= :$item");
        $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);//PARAM_STR: recibir solo strings
        $stmt->execute();

        return $stmt->fetch(); //fetch: retorna solo un item
    }
}