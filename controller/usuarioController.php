<?php
    require_once 'model/usuarioModel.php';

    class UsuarioController{
        
        private $model;
        private $resp;
        private $msg;

        public function __construct(){
            $this->model = new Usuario();
        }

        public function consultarUsuarios(){
            $listaUsuarios = new Usuario();
            $listaUsuarios = $this->model->consultarTodosLosUsuarios();
            return $listaUsuarios;
        }

        public function CrearUsuario(){

            require("view/crearUsuario.php");
    
        }

        public function Guardar(){
            $usuario = new Usuario();
            
            $usuario->nombre = $_REQUEST['nombre'];
            $usuario->apellido = $_REQUEST['apellido'];
            $usuario->email = $_REQUEST['correo'];  
            $usuario->pass = md5($_REQUEST['password1']);
            $usuario->foto = "user.png";     
          
            $this->resp= $this->model->Registrar($usuario);
    
            header('Location: ?op=crear&msg='.$this->resp);
        }

        public function ActualizarDatos(){
        
            $usuario = new Usuario();
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
    
            header('Location: ?op=perfil&msg='.$this->resp);
        }
    
    }

?>