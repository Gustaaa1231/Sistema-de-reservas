<?php
// Inclui o arquivo de conexão com o banco de dados
include_once __DIR__ . "/../db/database.php";

// Define a classe ReservaController responsável pela gestão de reservas
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

    // Método responsável por cadastrar o cliente
    public function Cadastro_user($nome, $email, $telefone){
        try {
            $sql = "INSERT INTO clientes (nome, telefone, email) VALUES(:nome, :telefone, :email)";
            $db = $this->conn->prepare($sql);
            $db->bindParam(":nome", $nome);
            $db->bindParam(":email", $email);
            $db->bindParam(":telefone", $telefone);
            $db->execute();
        } catch (\Exception $th) {
            return $th->getMessage();
        }
    }

    // Método responsável por inserir uma reserva
    public function InserirReserva($idCliente, $dataReserva){
        try {
            $sql = "INSERT INTO reservas (id_cliente, data_reserva) VALUES(:id_cliente, :data_reserva)";
            $db = $this->conn->prepare($sql);
            $db->bindParam(":id_cliente", $idCliente);
            $db->bindParam(":data_reserva", $dataReserva);
            $db->execute();
        } catch (\Exception $th) {
            return $th->getMessage();
        }
    }

    // Método responsável por verificar se um cliente já tem uma reserva
    public function VerificarReserva($idCliente){
        try {
            $sql = "SELECT * FROM reservas WHERE id_cliente = :id_cliente";
            $db = $this->conn->prepare($sql);
            $db->bindParam(":id_cliente", $idCliente);
            $db->execute();
            return $db->fetch(PDO::FETCH_ASSOC);
        } catch (\Exception $th) {
            return false;
        }
    }

    // Método responsável por atualizar uma reserva existente
    public function AtualizarReserva($idCliente, $dataReserva){
        try {
            $sql = "UPDATE reservas SET data_reserva = :data_reserva WHERE id_cliente = :id_cliente";
            $db = $this->conn->prepare($sql);
            $db->bindParam(":id_cliente", $idCliente);
            $db->bindParam(":data_reserva", $dataReserva);
            $db->execute();
        } catch (\Exception $th) {
            return $th->getMessage();
        }
    }

    // Método responsável por obter a reserva de um cliente específico
    public function ObterReserva($idCliente){
        try {
            $sql = "SELECT * FROM reservas WHERE id_cliente = :id_cliente";
            $db = $this->conn->prepare($sql);
            $db->bindParam(":id_cliente", $idCliente);
            $db->execute();
            return $db->fetch(PDO::FETCH_ASSOC);
        } catch (\Exception $th) {
            return false;
        }
    }
    public function getReservas($mes, $ano) {
        try {
            $sql = "SELECT data_reserva FROM reservas WHERE MONTH(data_reserva) = :mes AND YEAR(data_reserva) = :ano";
            $db = $this->conn->prepare($sql);
            $db->bindParam(":mes", $mes);
            $db->bindParam(":ano", $ano);
            $db->execute();
            return $db->fetchAll(PDO::FETCH_COLUMN);
        } catch (\Exception $th) {
            return [];
        }
    }
}