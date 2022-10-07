<?php   

    class Conectar {
       
        public static function conexion(){
            $conexion = new mysqli("localhost","root","","mvc");  #local,admin ,contraseña,nom.DB
            return $conexion;
            echo ("Conexión exitosa");
        }

    }

    