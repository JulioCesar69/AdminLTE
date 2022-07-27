<?php
    class usuarios{
        static public function mostrarusuarios(){
            $tabla="usuarios";
            $respuesta=mdlusuarios::mdlmostrarusuarios($tabla);
            return $respuesta;
        }
    }
?>