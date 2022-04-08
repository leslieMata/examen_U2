<?php
    class Conexion {
        private $servidor = "localhost";
        private $usuario = "root";
        private $password ="12345";
        private $bd =  "datos";
        private $puerto = "3305";
        public function Conectar(){
            try {
                $conexion = mysqli_connect(
                    $this-> servidor,
                    $this -> usuario,
                    $this-> password,
                    $this -> bd,
                    $this-> puerto
                );
                return $conexion;
            } catch (\Throwable $th) {
                return $th-> getMessage();
            }
        }
    }
?>