<?php
session_start();
if (!isset($_SESSION["id_usuario"])) {
    header('Location: ../../page.php');
    
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
    <form action="POST">
        <div class="popup-overlay" id="popupOverlay"></div>
        <div class="popup" id="popup">
            <div class="content">
                <div id="header">
                    <div class="header-content">
                        <h1>teste</h1>
                    </div>
                    <div id="exit-btn" onclick="fecharPopup()">
                        <img id="exit" src="../../image/exit.svg" alt="" height="32px">
                    </div>
                </div>
                    <p>Este é um popup personalizado!</p> 
                <img class="popupimage" src="../../image/Quadra background.jpg">
                <button class="popup-btn" onclick="fecharPopup()">Fechar</button>
            </div>
        </div>
    </form>
</body>
</html>


<style>
 *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.image img{
    width: 28rem;
    height: 40%;
}
.popupimage{
    width: 200px;
    height: 100px;
}
.popup {
    display: none;
        position: fixed;
        width: 25rem;
        height: 25rem;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        padding: 20px;
        background-color: white;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        z-index: 1000;
    }
.content{
    display: flex;
    align-items: center;
    flex-direction: column;
    gap: 20px;
}
#header{
    display: flex;
    align-items: center;
    justify-content: center;
}
#exit-btn{
    width: 32px;
    height: 32px;
    margin-left: 2rem;
    cursor: pointer;
}
.popup-btn{
    width: 100%;
    height: 50px;
}

    .popup-overlay {
        display: flex;
        display: none;
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 999;
    }
    </style>
    
<script>
function mostrarPopup() {
    document.getElementById('popup').style.display = 'block';
    document.getElementById('popupOverlay').style.display = 'block';
}

    function fecharPopup() {
        document.getElementById('popup').style.display = 'none';
        document.getElementById('popupOverlay').style.display = 'none';
}

</script>

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

    