<?php
session_start();
if (!isset($_SESSION["id_usuario"])) {
    header('Location: ../../page.php');
}

require_once __DIR__ . '/../../backend/controller/userController.php';
require_once __DIR__ . '/../../backend/controller/ReservaController.php';
require "../../components/InputComponent.php";
require "../../components/ButtonComponent.php";

$userController = new UserController();
$reservaController = new ReservaController();
$usuarios = $userController->GetAllClientes();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas</title>
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@0;1&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Varela+Round&display=swap" rel="stylesheet">
</head>
<body style="font-family: ABeeZee, serif;">
    <div class="container">
        <h2>Reservas</h2>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Data da Reserva</th>
                    <th>Local</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                <?php
                    $reserva = $reservaController->ObterReserva($usuario['id']);
                    $dataReserva = $reserva ? $reserva['data_reserva'] : '';
                ?>
                <tr>
                    <form action="../../backend/router/reservaRouter.php?acao=reservar" method="POST">
                        <input type="hidden" name="id_cliente" value="<?php echo $usuario['id']; ?>">
                        <td><?php echo $usuario['nome']; ?></td>
                        <td><?php echo $usuario['email']; ?></td>
                        <td><?php echo $usuario['telefone']; ?></td>
                        <td><?php InputComponent("date", "", "calendar", $dataReserva); ?></td>
                        <td><?php include "../../components/select.php" ?></td>
                        <td><?php ButtonComponent("", "submit", "Reservar"); ?></td>
                    </form>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<style>
.container {
    padding: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

@media (max-width: 768px) {
            table, thead, tbody, th, td, tr {
                display: block;
            }

            thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;
            }

            tr {
                border: 1px solid #ccc;
                margin-bottom: 10px;
            }

            td {
                border: none;
                border-bottom: 1px solid #eee;
                position: relative;
                padding-left: 50%;
                text-align: right;
            }

            td:before {
                position: absolute;
                top: 50%;
                left: 10px;
                width: 45%;
                padding-right: 10px;
                white-space: nowrap;
                transform: translateY(-50%);
                text-align: left;
                font-weight: bold;
            }

            td:nth-of-type(1):before { content: "Nome"; }
            td:nth-of-type(2):before { content: "Email"; }
            td:nth-of-type(3):before { content: "Telefone"; }
            td:nth-of-type(4):before { content: "Data da Reserva"; }
            td:nth-of-type(5):before { content: "Local"; }
            td:nth-of-type(6):before { content: "Ação"; }
        }
    </style>
</style>