<?php

class Vehiculos_model{
    private $db;
    private $vehiculos;

    public function __construct(){
       $this->db = Conectar::conexion();
       $this-> vehiculos = [];

    }

    public function get_vehiculos(){
        $sql = "SELECT * FROM Vehiculos";
        $resultado = $this->db->query($sql);
        while($row = $resultado->fetch_assoc()){
            $this->vehiculos[] = $row;
            
        }
        return $this->vehiculos;
    }
}