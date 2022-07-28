<?php
    class controladorUsuarios{
        static public function mostrarusuarios(){
            $tabla="usuarios";
            $respuesta=mdlusuarios::mdlmostrarusuarios($tabla);
            return $respuesta;
        }
    }
?>