<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <form method="POST" action="./backend/router/loginRouter.php?acao=validarLogin">
        <div>
            <input type="text" name="nome" placeholder="Nome">
            <input type="text" name="senha" placeholder="senha">
            <button type="submit">Logar</button>
        </div>
    </form>
</body>

</html>