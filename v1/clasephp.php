<?php
    include 'conexion.php';
    class clasephp
    {
        public $mysqli;
        public $resultado;
        function __construct()
        {
            $this->mysqli = new mysqli(servidor, usuario, password, basedatos);
        }

        function realizarConsultas($sql)
        {
            $this->resultado = $this->mysqli->query($sql);
        }

        function comprobarSelect()
        {
            return $this->resultado->num_rows;
        }
        function comprobar(){
            return $this->mysqli->affected_rows;
        }
        function extraerFilas(){
            return $this->resultado->fetch_array();
        }
    }
?>
