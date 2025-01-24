<?php include 'components/InputComponent.php';
    include 'components/ButtonComponent.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@0;1&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Varela+Round&display=swap" rel="stylesheet">
    <title>Entrar</title>
</head>
<body>

    <div style="display: flex; " class="body">
        <div class="image">
            <img src="image/Quadra background.jpg" alt="">
        </div>

        <div style="width: 100vw ; display: flex; flex-direction:column; gap: 50px; align-items: center; justify-content: center;">

            <div style="display: flex; flex-direction: column; gap: 40px;">
                <div style=" border-bottom: 3px solid #2779B8;" class="titulo">
                    <p style="padding-bottom: 5px;  font-size:2vw">Entrar</p>
                </div>
        
                <form method="POST" style="display: flex; flex-direction:column; gap:10px"  action="backend/router/loginRouter.php?acao=validarLogin">
                    <label for="">Usuário</label>
                    <?php InputComponent("text", "Usuário", "nome")?>
                    <label for="">Senha</label>
                    <?php InputComponent("password", "Senha", "senha" );
                    ButtonComponent("","submit", "Entrar");?>

                    
        
                </form>

            </div>
        </div>


    </div>
</body>
</html>

<style>
*{
    margin: 0%;
}

body{
    font-family: "ABeeZee", serif;
}
.input-field{
    width: 21rem;
}

img{
    width: 850px;
    height: 100vh;
}

.image{
    width: 850px;
    height: 100vh;
}

.titulo{
    border: 2px;
    width: 120px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;

}
</style>