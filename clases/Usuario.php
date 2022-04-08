<?php
    class Usuario{
        public function agregarDatos($datos){
            $con = new Conexion ();
            $conexion = $con->Conectar();
            $sql = "INSERT INTO t_usuarios (nombre, paterno, materno, usuario, password) VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]')";
            $respuesta = mysqli_query($conexion, $sql);
            return $respuesta;
        }
        public function logear($usuario, $password){
            try {
                $con = new Conexion ();
                $conexion = $con->Conectar();
                $sql = "SELECT * FROM t_usuarios
                        WHERE usuario = '$usuario'
                        AND password = '$password'";
                $respuesta = mysqli_query($conexion, $sql);

                // debemos preguntar cuantos usuarios existen
                $existe = mysqli_num_rows($respuesta);
                if($existe > 0){
                    $_SESSION ['usuario'] = $usuario;
                    return true;
                }else{
                    return false;
                    
                }
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
        public function agregarActivo($monto_agregado, $categoria){
            try {
                $con = new Conexion ();
                $conexion = $con->Conectar();
                $sql = "INSERT INTO t_ganancias (monto_agregado, categoria) VALUES ('$monto_agregado', '$categoria')";
                $respuesta = mysqli_query($conexion, $sql);

                if($respuesta){
                    return true;
                }else{
                    return false;
                    
                }
            } catch (\Throwable $th) {
                return $th->getMessage();
            } 
        }
        public function agregarPasivo($monto_gastado, $categoria){
            try {
                $con = new Conexion ();
                $conexion = $con->Conectar();
                $sql = "INSERT INTO t_gastos (monto_gastado, categoria) VALUES ('$monto_gastado', '$categoria')";
                 return mysqli_query($conexion, $sql);

            } catch (\Throwable $th) {
                return $th->getMessage();
            } 
        }
        public function mostrarInformacion($sql) {
            $con = new Conexion ();
            $conexion = $con->Conectar();
            $result = mysqli_query($conexion, $sql);
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
        public function mostrar_saldo_total(){
            $con = new Conexion ();
            $conexion = $con->Conectar();

            $sql="SELECT sum(monto_agregado) - monto_gastado as total FROM t_ganancias INNER JOIN t_gastos";
            $result=mysqli_query($conexion,$sql);
            $ver=mysqli_fetch_all($result,MYSQLI_ASSOC);
            return $ver;
        }
    }
?>