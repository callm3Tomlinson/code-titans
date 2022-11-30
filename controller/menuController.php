<?php
    
    require_once 'model/menuModel.php';

    class menuController{
        
        private $model;
        private $resp;
        private $msg;

        public function __construct(){
            $this->model = new Menu();
        }

        
        public function ConsultarMenus(){
            $listaMenus = new Menu();
            $listaMenus = $this->model->ConsultarMenus();
            return $listaMenus;

        }

        public function Guardar(){
        }
    
    }

?>