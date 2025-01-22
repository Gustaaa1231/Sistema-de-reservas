<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste PopUp</title>
</head>
<body>
    <button onclick="mostrarPopup()">
    Mostrar Popup
    </button>
    <form action="POST">

        <div class="popup-overlay" id="popupOverlay"></div>
        <div class="popup" id="popup">
            <div class="content">
                <div id="header"></div>

                <p>Este é um popup personalizado!</p> <img src="../../components/exit.svg" alt="" height="10px">
                <img src="../../image/Quadra background.jpg" width="200px">
                <button onclick="fecharPopup()">Fechar</button>
            </div>
        </div>
    </form>
</body>
</html>
<style>
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
        gap: 2rem;
    }
    .content button{
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