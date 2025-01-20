<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@0;1&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Varela+Round&display=swap" rel="stylesheet">
</head>
<body>
    
</body>
</html>

<style>
    .button {
        background-color: #2779B8; /* Azul escuro */
        color: #ffffff;
        border: none;
        border-radius: 4px;
        padding: 10px 20px;
        font-size: 16px;
        font-family: "ABeeZee", serif;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .button:hover {
        background-color: #0056b3; /* Azul ainda mais escuro */
    }
    .button:active {
        background-color: #004494; /* Azul ainda mais escuro quando clicado */
    }
</style>
<?php function ButtonComponent($type){

    echo"<button style='margin-top: 3px;' class='button' type='$type'>Entrar</button>";
}
?>