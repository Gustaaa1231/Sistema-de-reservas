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
    public function Reservar($nome, $email, $telefone, $datas,$idLocal){
        try {

            $sql = "INSERT INTO clientes (nome,telefone,email) VALUES(:nome,:telefone,:email)";
            $db = $this->conn->prepare($sql);
            $db->bindParam(":nome", $nome);
            $db->bindParam(":email", $email);
            $db->bindParam(":telefone", $telefone);
            
            $db->execute();

            $idCliente = $this->conn->lastInsertId();
 
            $sql = "INSERT INTO reservas (id_cliente, id_local, data_reserva) VALUES(:id_cliente, :id_local, :data_reserva)";
            $db = $this->conn->prepare($sql);
            $db->bindParam(":id_cliente", $idCliente);
            $db->bindParam(":id_local", $idLocal);
            $db->bindParam(":data_reserva", $datas);
            $db->execute();

        } catch (\Exception $th) {
            return $th->getMessage();
        }
    }
}