<?php
    
    require_once 'model/ventasModel.php';

    class ventaController{
        
        private $model;
        private $resp;
        private $msg;

        public function __construct(){
            $this->model = new Venta();
        }

        
        public function ConsultarVentas(){
            $listaVentas = new Venta();
            $listaVentas = $this->model->ConsultarVentas();
            return $listaVentas;
        }

        public function ConsultarVentasDatos(){
            $listaVentas = new Venta();
            $listaVentas = $this->model->ConsultarVentasDatos();
            return $listaVentas;
        }

        public function Guardar(){
        }

        public function Actualizar(){
        }

        public function ActualizarDatos(){}

        public function EliminarUsuario(){
        }
    
    }

?>