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
    <title>Home</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@0;1&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Varela+Round&display=swap" rel="stylesheet">
    
</head>
<body style="font-family: ABeeZee, serif;">
    <?php include '../../components/sidebar.php';?>
    
    
    






</body>
</html>

<!-- <div class="container">
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
    </div> -->

<style>
 *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.all{
    display: flex;
    width: 100%;
    height: 100%;
    justify-content: space-evenly;
    align-items: center;
    background-image: url("../../image/Quadra\ background.jpg");
    background-repeat: no-repeat;

}
.left-side{
    border: 1px solid black;
    height: 100vh;
    width: 35%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.left-side h1{
    text-align: center;
    margin-top: 2rem;
}
.mid{
    border:1px solid black ;
    height: 100vh;
    width: 25%;
}
.image img{
    width: 28rem;
    height: 40%;
}
.right-side{
    border: 1px solid black;
    background-color: aqua;
    height: 100vh;
    width: 35%;


}
    /* 
body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    color: #000;
    display: flex;
    justify-content: center;
    padding: 20px;
}

.container {
    width: 100%;
    max-width: 800px;
    background: #fff;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    font-size: 24px;
}

.button {
    display: inline-block;
    padding: 10px 15px;
    font-size: 14px;
    text-decoration: none;
    color: #fff;
    background-color: #000;
    border-radius: 4px;
    transition: background-color 0.3s;
}

.button:hover {
    background-color: #333;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ccc;
}

th {
    background-color: #000;
    color: #fff;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

.action-buttons {
    display: flex;
    gap: 10px;
}

.action-buttons .button {
    padding: 5px 10px;
    font-size: 12px;
}

.deletar-button {
    background-color: #ff4d4d;
}

.deletar-button:hover {
    background-color: #cc0000;
}

form {
    display: inline-block;
} */
</style>