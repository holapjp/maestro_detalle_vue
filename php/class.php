<?php 
    class Conexion {

        //Atributos
        public $conexion = null;
        public $datos = array();

        //Métodos
        public function __construct(){
            $this->conexion = new PDO("mysql:host=localhost;dbname=maestro_detalle","root","");
        }

        public function getProductos(){
            $sql = "SELECT id,nombre,precio FROM productos;";
            $stm = $this->conexion->prepare($sql);
            $stm->execute();
            while($datos = $stm->fetch(PDO::FETCH_ASSOC)){
                $this->datos[] = $datos;
            }
            return $this->datos;          
        }

    }
?>