<?php
    require_once("Conexion.php");
    class mdlusuarios{
        static public function mdlmostrarusuarios(){
            $stmt= Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt ->execute();
            return $stmt->fetchAll();
            $stmt->close();
            $stmt =null;
        }
    }
?>