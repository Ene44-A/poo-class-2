<?php
    require("../model/Conexion.php");


    if(isset($_POST['submit'])){
        var_dump($_POST);
        $doc = $_POST['documento'];
        $nombre = $_POST['nombre'];
        $edad= intval($_POST['edad']);
        $ciudad = intval($_POST['ciudad']);
        
        $db = new Conexion();
        $db->setPersonas($doc,$nombre,$edad,$ciudad);
    }


?>