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

            header("Location: ../../pages/home/index.php");
            break;

            case 'reservar':
                $idCliente = $_POST["id_cliente"];
                $dataReserva = $_POST["calendar"];
                $idLocal = $_POST["local"];
            
                // Verifica se o cliente já tem uma reserva
                $reservaExistente = $ReservaController->VerificarReserva($idCliente);
                $reservaNaData = $ReservaController->VerificarReservaNaData($idCliente, $dataReserva);
            
                // Verifica se a data da reserva é no mesmo dia de uma reserva existente
                $dataAtual = date('Y-m-d');
                if ($dataReserva == $dataAtual) {
                    header("Location: ../../pages/reserva/index.php?error=mesmo_dia");
                    exit();
                }
            
                if ($reservaExistente) {
                    // Atualiza a reserva existente
                    if ($reservaNaData) {
                        header("Location: ../../pages/reserva/index.php?error=reserva_existente");
                    } else {
                        $resposta = $ReservaController->AtualizarReserva($idCliente, $dataReserva, $idLocal);
                    }
                } else {
                    if ($reservaNaData) {
                        header("Location: ../../pages/reserva/index.php?error=reserva_existente");
                    } else {
                        $resposta = $ReservaController->InserirReserva($idCliente, $dataReserva, $idLocal);
                    }
                }
            
                header("Location: ../../pages/reserva/index.php");
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