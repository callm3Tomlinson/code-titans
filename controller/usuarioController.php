<?php
    
    require_once 'model/usuarioModel.php';

    class UsuarioController{
        
        private $model;
        private $resp;
        private $msg;

        public function __construct(){
            $this->model = new Usuario();
        }

        public function VerUsuarios(){
            
        }

        public function ConsultarUsuarios(){
            $listaUsuarios = new Usuario();
            $listaUsuarios = $this->model->consultarTodosLosUsuarios();
            require("view/usuarios.php");
        }

        public function CrearUsuario(){

            require("view/crearUsuario.php");    
        }

        public function Guardar(){
            $usuario = new Usuario();
            
            $usuario->tipo = $_REQUEST['id_tipo'];
            $usuario->nombre = $_REQUEST['nombre'];
            $usuario->apellido = $_REQUEST['apellido'];
            $usuario->correo = $_REQUEST['correo'];  
            $usuario->pass = md5($_REQUEST['password1']);
            $usuario->foto = "user.png";

            $this->resp= $this->model->RegistrarUsuario($usuario);
            header('Location:./?op=crearUsuario&msg='.$this->resp);
        }

        public function ObtenerDatosUsuario(){
                      
        }

        public function ActualizarUsuario(){

            $usuario = new usuario();
            $usuario = $this->model->ConsultarDatosUsuario($_GET['id']);
        
            /*$usuario = new Usuario();
            $usuario->id_tipo = $_REQUEST('id_tipo');
            $usuario->nombre = $_REQUEST['nombre'];
            $usuario->apellido = $_REQUEST['apellido'];
            $usuario->id_distrito= $_REQUEST['distrito'];
            $usuario->id=$_SESSION["id"];
    
    
            if (isset($_FILES['foto']))
            {
                move_uploaded_file($_FILES['foto']['tmp_name'], "./public/images/users/".$_SESSION["id"].".jpg");
                
                $usuario->foto = $_SESSION["id"].".jpg";
    
                $_SESSION["foto"]=$_SESSION["id"].".jpg";
            }
            else
            {
                $usuario->foto = $_SESSION["foto"];
            }
             
            
            $this->resp= $this->model->Actualizar($usuario);
    
            header('Location: ?op=perfil&msg='.$this->resp);*/

            require('view/actualizarUsuario.php');
        }

        public function ActualizarDatos(){
            $usuario = new Usuario();
            $usuario->tipo = $_REQUEST['tipo'];
            $usuario->nombre = $_REQUEST['nombre'];
            $usuario->apellido = $_REQUEST['apellido'];
            $usuario->correo =$_REQUEST['correo'];

            $usuario->id = $_REQUEST['id'];

            if(isset($_FILES['foto'])){
                move_uploaded_file($_FILES['foto']['tmp_name'],"./images/users/".$_REQUEST['id'].".jpg");
                $usuario->foto = $_REQUEST["id"].".jpg";
            }else{
                $usuario->foto = $_REQUEST['foto'];
            }

            $this->resp=$this->model->Actualizar($usuario);

            header('Location:./?op=actualizarUsuario&id='.$usuario->id.'&msg='.$this->resp);
        }

        public function EliminarUsuario(){           
            $usuario = new Usuario();
            $usuario->id = $_REQUEST['id'];
            $this->resp=$this->model->Eliminar($usuario);
            header('Location: ./?op=usuarios&msg='.$this->resp);
        }
    
    }

?>