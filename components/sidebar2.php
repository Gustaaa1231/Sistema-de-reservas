<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@0;1&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Varela+Round&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body style="font-family: ABeeZee, serif;">


    <div style="display:flex; flex-direction: column; padding: 22px; width: 445px; height: 100%; background-color:white; border-left: 1px solid #2779B8; ">
        <div style=" display: flex; flex-direction:column; align-items: center; justify-content: center; height: 100%; width: 100%; ">
            
            <div style="display:flex; align-items:center; justify-content:center; width: 160px; height: 160px;">
                <img style="height: 160px; width:160px; border-radius: 50%;" src="../../image/foto-de-perfil.jpg" alt="">
        
            </div>
            <div style="border-bottom: 1px solid #2779B8; width:100%; display:flex; align-items: center; justify-content:center; margin-top: 6px; padding-bottom: 8px;">
                <h3 style="font-family: ABeeZee, serif; margin-top: 12px; margin-bottom: 12px;">Bruna Louveira</h3>
            </div>
            <div style="width:100%; height: 100%; margin-top: 30px;">
                <?php
                include "calendario.php";
                ?>
                <div style="display: flex; flex-direction: column; height: 100%; width: 100%;">
                    <h3 style="font-family: ABeeZee, serif; margin-top: 18px; margin-bottom: 14px; text-align: center;">Esportes</h3>
                    <div style="border-top:  1px solid #2779B8; padding-top: 12px; padding-bottom: 12px; display: flex; gap: 10px;  width: 100%;">
                        <div style="background-color: #4100FF; display: flex; align-items: center; justify-content: center; width: 60px; height: 52px; border-radius: 10px;">
                            <img style="width: 60px; height: 55px;" src="../../image/teniss.png" alt="">
                        </div>
                        <div style="padding-top: 2px; padding-bottom: 2px;">
                            <p style="font-family: ABeeZee, serif; color:black;">Tênis</p>
                            <p style="font-family: ABeeZee, serif; font-size: smaller;">Capacidade: 04 pessoas</p>
                        </div>
                    </div>
                    <div style="border-top:  1px solid #2779B8;  padding-top: 12px; padding-bottom: 12px; display: flex; gap: 10px;  width: 100%;">
                        <div style="background-color: #E0087F; display: flex; align-items: center; justify-content: center; width: 60px; height: 52px; border-radius: 10px;">
                            <img style="width: 30px; height: 30px;" src="../../image/voleii.png" alt="">
                        </div>
                        <div style="padding-top: 2px; padding-bottom: 2px;">
                            <p style="font-family: ABeeZee, serif; color:black;">Vôlei</p>
                            <p style="font-family: ABeeZee, serif; font-size: smaller;">Capacidade: 10 pessoas</p>
                        </div>
                    </div>
                    <div style="border-top:  1px solid #2779B8;  padding-top: 12px; padding-bottom: 12px; display: flex; gap: 10px;  width: 100%;">
                        <div style="background-color: #FFA800;  display: flex; align-items: center; justify-content: center; width: 60px; height: 52px; border-radius: 10px;">
                            <img style="width: 25px; height: 25px;" src="../../image/basquetee2.png" alt="">
                        </div>
                        <div style="padding-top: 2px; padding-bottom: 2px;">
                            <p style="font-family: ABeeZee, serif; color:black;">Basquete</p>
                            <p style="font-family: ABeeZee, serif; font-size: smaller;">Capacidade: 10 pessoas</p>
                        </div>
                    </div>
                    <div style="border-top:  1px solid #2779B8;  padding-top: 12px; padding-bottom: 12px; display: flex; gap: 10px;  width: 100%;">
                        <div style="background-color: #006C10; display: flex; align-items: center; justify-content: center; width: 60px; height: 52px; border-radius: 10px;">
                            <img style="width: 40px; height: 40px;" src="../../image/futsall.png" alt="">
                        </div>
                        <div style="padding-top: 2px; padding-bottom: 2px;">
                            <p style="font-family: ABeeZee, serif; color:black;">Futsal</p>
                            <p style="font-family: ABeeZee, serif; font-size: smaller;">Capacidade: 10 pessoas</p>
                        </div>
                    </div>
                <div class="btn">
                    <?php 
                    ButtonComponent("mostrarPopup()", "button" , "Reservar")
                    ?>
                </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
<style>
.btn{
    width: 100%;    
    margin-top: 1rem;
}

</style>