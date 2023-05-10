<?php 
    require('../model/Conexion.php');

    $db = new Conexion();

    $ciudades = $db->getCiudades();

    require('../view/V_formPersonas.php');


?>