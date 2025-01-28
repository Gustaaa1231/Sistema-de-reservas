<?php
session_start();
if (!isset($_SESSION["id_usuario"])) {
    header('Location: ../../page.php');
    
}
require_once __DIR__ . '/../../backend/controller/userController.php';
require "../../components/InputComponent.php";

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
    <form action="../../backend/router/reservaRouter.php?acao=reservar" method="POST">
        <div class="popup-overlay" id="popupOverlay"></div>
        <div class="popup" id="popup">
            <div style="width:100%; display:flex; justify-content: flex-end; margin-bottom: 10px;">
                <div id="exit-btn" onclick="fecharPopup()">
                    <img id="exit" src="../../image/exit.svg" alt="Fechar popup svg">
                </div>
            </div>
            <div class="content">
                <div id="header">
                    <div style="padding-top: 10px; padding-bottom: 10px;  border-bottom: 3px solid #2779B8;" class="header-content">
                        <h2 style="font-family: ABeeZee, serif;">Reservar</h2>
                    </div>
                </div>
                <div style="width:100%; gap: 16px; padding: 20px;  display: flex; flex-direction:column; ">
                    <form method="POST">
                        <div style="width:100%; gap:6px; display:flex; flex-direction: column; ">
                            <label for="">Nome</label>
                            <?php InputComponent("text", "Digite nome", "name_cliente") ?>
                        </div>
                        <div style="width:100%; gap:6px; display:flex; flex-direction: column; ">
                            <label for="">Email</label>
                            <?php InputComponent("email", "Digite o email", "email_cliente") ?>
                        </div>
                        <div style="width:100%; gap:6px; display:flex; flex-direction: column; ">
                            <label for="">Telefone</label>
                            <?php InputComponent("number", "Digite o número de telefone (xx) xxxxx-xxxxx", "number") ?>
                        </div>
                        <div style=" gap:6px; justify-content: space-between; align-items:center; display:flex; ">
                            <div style="width:100%; gap:6px; display:flex; flex-direction: column; ">
                                <label for="">Data da Reserva</label>
                                <?php InputComponent("date", "", "calendar") ?>
                            </div>
                            <div style="width:50%; gap:6px;  display:flex; flex-direction: column;" >
                                <label for="">Tipo</label>
                                <?php include '../../components/select.php'?>
                            </div>
                        </div>
                        <div style="width:100%; margin-top:16px;">
                            <?php ButtonComponent("fecharPopup()", "submit", "Confirmar"); ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
<script>
document.getElementById("formReserva").addEventListener("submit", function(event) {
  event.preventDefault(); // Impede o envio tradicional do formulário

  const nome = document.getElementById("nome").value;
  const email = document.getElementById("email").value;
  const telefone = document.getElementById("telefone").value;
  const dataReserva = document.getElementById("dataReserva").value;
  const local = document.getElementById("local").value;

  // Envia os dados da reserva para o backend via POST
  fetch('reservar.php?acao=reservar', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: `name_cliente=${nome}&email_cliente=${email}&number=${telefone}&calendar=${dataReserva}&local=${local}`
  })
  .then(response => response.json())  // Espera pela resposta JSON
  .then(data => {
    if (data.status === "success") {
      alert(data.message); // Exibe a mensagem de sucesso
    } else {
      alert(data.message); // Exibe a mensagem de erro
    }
  })
  .catch(error => {
    alert("Erro ao fazer a reserva!");
    console.error(error);
  });
});

    
</script>


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
    width: 400px;
    height: 200px;
}
.popup {
    display: none;
    position: fixed;
    width: 33rem;
    height: 34rem;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    padding: 14px;
    gap:10px;
    
    background-color: white;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    z-index: 1000;
    border-radius: 1rem;
    }
.content{
    display: flex;
    align-items: center;
    flex-direction: column;
    
}
#header{
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    
}
#exit-btn{
    width: 12px;
    height: 12px;
    
    cursor: pointer;
}
.popup-btn{
    width: 100%;
    height: 50px;
}
.input-field{
    margin-bottom: 0;
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

