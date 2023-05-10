<?php
    class Conexion{
        private $con;
        public function __construct(){

            $this->con = new mysqli('localhost','root','','db_name');
        }
        public function getPersona(){
            $query = $this->con->query("SELECT p.id_persona, p.nombre_persona as persona, p.edad_persona, c.nombre_ciudad FROM tbl_personas as p INNER JOIN tbl_ciudades as c ON p.fk_id_ciudad = c.id_ciudad");
            
            $retorno = [];
            
            $i = 0;
            while($fila = $query->fetch_assoc()){
                $retorno[$i] = $fila;
                $i++;
            }
            return $retorno;
        }

        public function getCiudades(){
            $query = $this->con->query("SELECT * FROM tbl_ciudades");
            
            $retorno = [];
            
            $i = 0;
            while($fila = $query->fetch_assoc()){
                $retorno[$i] = $fila;
                $i++;
            }
            return $retorno;
        }

        public function setPersonas($doc, $nombre, $edad, $ciudad){
            $this->con->query("INSERT INTO tbl_personas(`id_persona`,`nombre_persona`,`edad_persona`,`fk_id_ciudad`) VALUES('$doc','$nombre','$edad','$ciudad')");
        }


    }
?>