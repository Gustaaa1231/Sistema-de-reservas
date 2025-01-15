<?php
session_start();
if (!isset($_SESSION["id_usuario"])) {
    header('Location: ../../index.php');
    exit();
}

require_once __DIR__ . '/../../backend/controller/userController.php';
$userController = new UserController();

$usuario = [
    'id' => '',
    'nome' => '',
    'senha' => ''
];
$acao = "cadastrar";
$buttonTitle = "Cadastrar";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $buttonTitle = "Atualizar";
    $acao = "update";
    $usuario = $userController->getUserById($id);
    if (!$usuario) {
        echo "Usuário não encontrado.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($_GET['id']) ? 'Editar Usuário' : 'Cadastrar Usuário'; ?></title>
    <link rel="stylesheet" href="./cadastrar.css">
</head>

<body>
    <div class="container">
        <h2><?php echo isset($_GET['id']) ? 'Editar Usuário' : 'Cadastrar Usuário'; ?></h2>

        <?php if (isset($error_message)) { ?>
            <div class="error-message"><?php echo $error_message; ?></div>
        <?php } ?>

        <form action="<?php echo "../../backend/router/userRouter.php?acao=$acao" ?>" method="POST">
            <input type="hidden" name="idUsuario" value="<?php echo $usuario["id"]; ?>">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?php echo $usuario['nome']; ?>" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" value="<?php echo $usuario['senha']; ?>" required>

            <button type="submit"><?php echo $buttonTitle; ?></button>
        </form>
    </div>
</body>

</html>