<?php
session_start();// Comienzo de la sesión

require_once 'model/usuarioModel.php';


class Controller
{
    private $model;
    private $model2;
    private $model3;
    private $model4;
    private $resp;
    
    public function __CONSTRUCT(){
        $this->model = new Usuario();
        $this->model4 = new Usuario();
    }

    public function Login(){

        //Le paso los datos a la vista
        require("view/login.php");

    }

    public function Logout(){
        require("view/logout.php");
    }

    public function Menu($id){
        
        if($id == 1){

        }
    }

    public function Ingresar(){
        $ingresarUsuario = new Usuario();
        
        $ingresarUsuario->correo = $_REQUEST['correo'];  
        $ingresarUsuario->pass = md5($_REQUEST['pass']);        
        $resultado= $this->model->consultar($ingresarUsuario);
        
        
        if($resultado){

            if($ingresarUsuario->pass == $resultado->pass ){
                $_SESSION["acceso"] = true;
                $_SESSION["user"] = $resultado->nombre." ".$resultado->apellido;
                $_SESSION['id'] = $resultado->id;
                $_SESSION['foto'] = $resultado->foto;
                $_SESSION['id_tipo'] = $resultado->id_tipo;

                if($_SESSION['id_tipo'] == 1 || $_SESSION['id_tipo']==4){
                    header('Location: ?op=panel-admin');
                }
                elseif($_SESSION['id_tipo'] == 2){
                    header('Location: ?op=panel-ventas');
                }
                
            }else{
                header('Location: ?&msg=Su contraseña o/y usuario está incorrecto');
            }                
        }else{
            header('Location: ?&msg=Su contraseña o/y usuario está incorrecto');
        }           
            

        //Verificamos si existe en la base de datos
        /*if ($resultado= $this->model->Consultar($ingresarUsuario))
        {
            $_SESSION["acceso"] = true;
            $_SESSION["foto"] = $resultado->foto;
            $_SESSION["id"] = $resultado->id;
            $_SESSION["user"] = $resultado->nombre." ".$resultado->apellido;
            header('Location: ?op=permitido');

        }
        else
        {
            header('Location: ?&msg=Su contraseña o usuario está incorrecto');
        }*/
    }

    public function IngresarPanelAdmin(){

        require("view/panel-admin.php");
    }

    public function IngresarPanelVentas(){

        require("view/panel-ventas.php");
    }  

    public function CrearUsuario(){
        require("view/crearUsuario.php");
    }

    public function VerMenus(){
        require("view/menus.php");
    }
    
    public function RegistrarVenta(){
        require("view/ventas.php");
    }

    public function VerReportes(){
        require("view/reportes.php");
    }  
    
}
