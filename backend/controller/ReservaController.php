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
            return "Cliente cadastrado com sucesso!";
        } catch (\Exception $th) {
            error_log("Erro ao cadastrar cliente: " . $th->getMessage());
            return $th->getMessage();
        }
    }

    // Método responsável por inserir uma reserva
    public function inserirReserva($clienteId, $dataReserva, $localId) {
        try {
            $query = "INSERT INTO reservas (id_cliente, id_local, data_reserva ) 
                      VALUES (:clienteId, :localId, :dataReserva)";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':clienteId', $clienteId, PDO::PARAM_INT);
            $stmt->bindParam(':localId', $localId, PDO::PARAM_INT);
            $stmt->bindParam(':dataReserva', $dataReserva);
            $stmt->execute();

            return $this->conn->lastInsertId();
        } catch (Exception $e) {
            echo "Erro: " . $e->getMessage();
            return null;
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
            $sql = "UPDATE reservas SET data_reserva = :data_reserva, id_local = :id_local WHERE id_cliente = :id_cliente";
            $db = $this->conn->prepare($sql);
            $db->bindParam(":id_cliente", $idCliente);
            $db->bindParam(":data_reserva", $dataReserva);
            $db->bindParam(":id_local", $idLocal);
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
    //Método para buscar os nomes dos clientes
    public function getClientes() {
        try {
            $sql = "SELECT id, nome FROM clientes";
            $db = $this->conn->prepare($sql);
            $db->execute();
            return $db->fetchAll(PDO::FETCH_ASSOC);
        } catch (\Exception $th) {
            error_log("Erro ao buscar clientes: " . $th->getMessage());
            return [];
        }
    }
    public function DeletarReserva($idCliente){
        try {
            $sql = "DELETE FROM reservas WHERE id_cliente = :id_cliente";
            $db = $this->conn->prepare($sql);
            $db->bindParam(":id_cliente", $idCliente);
            $db->execute();
        } catch (\Exception $th) {
            return $th->getMessage();
        }
    }
}