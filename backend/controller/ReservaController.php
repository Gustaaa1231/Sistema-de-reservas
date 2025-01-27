<?php
// Inclui o arquivo de conexão com o banco de dados
include_once __DIR__ . "/../db/database.php";

// Define a classe LoginController responsável pela autenticação de usuários
class ReservaController
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
    public function Reservar($nome, $email, $telefone, $datas){
        try {

           
            $sql = "INSERT INTO clientes (nome,email,telefone) VALUES(:nome,:email,:telefone)";
            $db = $this->conn->prepare($sql);
            $db->bindParam(":nome", $nome);
            $db->bindParam(":email", $email);
            $db->bindParam(":telefone", $telefone);
    
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