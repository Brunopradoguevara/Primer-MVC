<?php

require_once "config/database.php";
require_once "controllers/vehiculos.php";

$control = new Vehiculos_controller();
$control->index();
