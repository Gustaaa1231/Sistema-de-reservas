<?php

$titulo = "Quadra de basquete";
$descricao = "quadra legal";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@0;1&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Varela+Round&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    
    <div class="card">
        <img src="../image/Quadra background.jpg" alt="Imagem quadra ">
        <h3><?php echo $titulo; ?></h3>
        <p><?php echo $descricao; ?></p>
        <button>Reserve</button>
    </div>
</body>
</html>

<style>
    body{
        background-color: #f4f4f4;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    .card{
        width: 300px;
        background-color: #fff;
        border-radius: 8px;
        text-align: center;
    }
    .card h2{
        margin: 16px 0;
        color: #333;
    }
    .card img{
        width: 280px;
        height: 180px;
        border-radius: 10px;
        margin-top: 10px;
        
    }
    .card button{
        color: white;
        background-color: #28a745;
        border-radius: 4px;
        width: 180px;
        margin-bottom: 10px;
    }


</style>