<?php 
    require_once 'db.php';

    class Usuario{

        public $id;
        public $tipo;
        public $nombre;
        public $apellido;
        public $correo;
        public $pass;
        public $foto;

        private $pdo;
        private $msg;

        public function __construct(){
            try{
                $conn = new Db();
                $this->pdo = $conn->conectar();  
            }
            catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function RegistrarUsuario(usuario $data){

            try{
                $sql ="INSERT INTO usuario (id,id_tipo,nombre, apellido, correo, pass, foto)
                VALUES(null,?,?,?,?,?,?)";
                $this->pdo->prepare($sql)
                    ->execute(
                        array(
                            $data->tipo,
                            $data->nombre,
                            $data->apellido,
                            $data->correo,
                            $data->pass,
                            $data->foto
                        )
                    );               
                $this->msg="1";
            
            }
            catch(Exception $e)
            {
                if ($e->errorInfo[1] == 1062) { // error 1062 es de duplicación de datos 
                    $this->msg="Correo electrónico ya está registrado en el sistema";
                 } else {
                    $this->msg="-1";
                 }                 
            }
            return $this->msg;
        }

        public function ConsultarTodosLosUsuarios(){

            try{
                $stm = $this->pdo->prepare("SELECT id,nombre,apellido,correo,id_tipo,foto FROM usuario");
                $stm->execute();           
                $usuarios = $stm->fetchAll();
                return $usuarios;
        }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function Consultar(usuario $data){
            try{
                $stm = $this->pdo->prepare("SELECT * FROM usuario WHERE correo = ? AND pass=?");
                $stm->execute(array($data->correo, $data->pass));
                return $stm->fetch(PDO::FETCH_OBJ);
            }catch (Exception $e){
                die($e->getMessage());
            }
	    }

        public function ConsultarDatosUsuario($id){
            try{
                $stm = $this->pdo->prepare("SELECT * FROM usuario WHERE id = ?");
                $stm->execute(array($id));
                return $stm->fetch(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function Actualizar(usuario $data){
            
            try{
            
                $sql="UPDATE usuario SET id_tipo=?,nombre=?, apellido=?,correo=?,foto=?
                WHERE id = ?";

                $this->pdo->prepare($sql)
                     ->execute(
                        array(
                            $data->tipo,
                            $data->nombre,
                            $data->apellido,
                            $data->correo,
                            $data->foto,
                            $data->id
                        )
                    );
                $this->msg="1";
            }catch(Exception $e){
                $this->msg="-1";
            }
            return $this->msg;
        }

        public function Eliminar(usuario $data){
            
            try{
                
                $stm = $this->pdo->prepare("DELETE FROM usuario WHERE id = ?");                
                $stm->execute(array($data->id));
                $this->msg="1";
                
                 

            }catch(Exception $e){
                $this->msg = "-1";
            }
            return $this->msg;            
        }
    }
?>