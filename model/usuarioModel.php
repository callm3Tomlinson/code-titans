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
                $sql ="INSERT INTO usuario (id_tipo,nombre, apellido, correo, pass, foto)
                VALUES(?,?,?,?)";
                $this->pdo->prepare($sql)
                    ->execute(
                        array(
                            $data->id_tipo,
                            $data->nombre,
                            $data->apellido,
                            $data->correo,
                            $data->pass,
                            $data->foto
                        )
                    );               
                $this->msg="Su registro se ha guardado exitosamente...";
            
            }
            catch(Exception $e)
            {
                if ($e->errorInfo[1] == 1062) { // error 1062 es de duplicación de datos 
                    $this->msg="Correo electrónico ya está registrado en el sistema";
                 } else {
                    $this->msg="Error al guardar los datos";
                 }                 
            }
            return $this->msg;
        }

        public function ConsultarTodosLosUsuarios(){

            try{
                $stm = $this->pdo->prepare("SELECT nombre,apellido,correo,id_tipo,foto FROM usuario");
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
    }
?>