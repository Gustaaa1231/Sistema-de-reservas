<?php
session_start();
if (!isset($_SESSION["id_usuario"])) {
    header('Location: ../../index.php');
    
}
require_once __DIR__ . '/../../backend/controller/userController.php';

$userController = new UserController();
$usuarios = $userController->GetAllUser();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" href="./home.css">
</head>
<body>
<div class="container">
        <a href="../cadastrar/index.php" class="button">Cadastrar</a>
        <h2>Lista de Usuários</h2>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Senha</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($usuarios as $usuario) {
                ?>
                    <tr>
                        <td><?php echo $usuario['nome']; ?></td>
                        <td><?php echo $usuario['senha']; ?></td>
                        <td class="action-buttons">
                            <a href="../cadastrar/index.php?id=<?php echo $usuario['id_usuario']; ?>" class="button">Editar</a>

                            <form action="../../backend/router/userRouter.php?acao=deletar" method="POST">
                                <input type="hidden" name="idUsuario" value="<?php echo $usuario['id_usuario']; ?>">
                                <button type="submit" name="deletar" class="button deletar-button">Deletar</button>
                            </form>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>