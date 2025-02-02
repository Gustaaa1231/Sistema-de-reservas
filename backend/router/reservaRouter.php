<?php
require_once __DIR__ . "/../controller/ReservaController.php";
$ReservaController = new ReservaController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    switch ($_GET["acao"]) {
        case 'client_register':
            $nome = $_POST["name_cliente"];
            $email = $_POST["email_cliente"];
            $telefone = $_POST["number"];

            $resposta = $ReservaController->Cadastro_user($nome, $email, $telefone);

            if ($resposta !== "Cliente cadastrado com sucesso!") {
                echo "Erro: " . $resposta;
                exit;
            }

            header("Location: ../../pages/home/index.php");
            break;


        case 'reservar':
            $idCliente = $_POST["id_cliente"];
            $dataReserva = $_POST["calendar"];
            $idLocal = $_POST["local"];

            // Verifica se o cliente já tem uma reserva
            $reservaExistente = $ReservaController->VerificarReserva($idCliente);

            if ($reservaExistente) {
                // Atualiza a reserva existente
                $resposta = $ReservaController->AtualizarReserva($idCliente, $dataReserva);
            } else {
                // Insere uma nova reserva
                $resposta = $ReservaController->InserirReserva($idCliente, $dataReserva);
            }

            header("Location: ../../pages/Reserva/index.php");
            break;
        case 'deletar':
            $idCliente = $_POST["id_cliente"];
            $resposta = $ReservaController->DeletarReserva($idCliente);

            header("Location: ../../pages/Reserva/index.php");
            break;

        default:
            echo "Ação não especificada";
            break;
    }
}