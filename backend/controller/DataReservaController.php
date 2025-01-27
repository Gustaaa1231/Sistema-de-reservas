<?php
// Inclui o arquivo de conexão com o banco de dados
include_once __DIR__ . "/../db/database.php";

// Define a classe LoginController responsável pela autenticação de usuários
class DataReservaController
{
    private $conn; // Variável para armazenar a conexão com o banco de dados

    // Construtor da classe, inicializa a conexão com o banco de dados
    public function __construct(){
        // Cria uma instância da classe Database para obter a conexão
        $database = new Database();
        // Armazena a conexão na variável $conn
        $this->conn = $database->connect();
    }

    // Método responsável por realizar o login
    public function Reservar_data($datas){
        try {

           
            $sql = "INSERT INTO reservas (data_reserva) VALUES(:datas)";
            $db = $this->conn->prepare($sql);
            
            $db->bindParam(":datas", $datas);
    
            if($db->execute()){
                return true;
            }else{
                return false;
            }
        } catch (\Exception $th) {
            //throw $th; 
        }
    }
}