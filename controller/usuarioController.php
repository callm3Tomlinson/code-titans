<?php
    require_once '../model/usuarioModel.php';


    class Controller{
        
        private $model;
        private $resp;
        private $msg;

        public function __construct(){
            $this->model = new Usuario();
        }

        public function index(){
            require("../index.php");
        }

        public function consultarUsuarios(){
            $listaUsuarios = new Usuario();
            $listaUsuarios = $this->model->consultarTodosLosUsuarios();
            return $listaUsuarios;
        }
    }

?>