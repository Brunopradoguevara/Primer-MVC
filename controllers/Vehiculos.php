<?php

class Vehiculos_controller{
    public function index(){
        require_once "models/VehiculosModel.php";
        $vehiculos = new Vehiculos_model();
        $data["titulo"] ="Vehiculos";
        $data["vehiculos"] = $vehiculos->get_vehiculos();

        require_once "views/Vehiculos/vehiculos.php";

    }
}