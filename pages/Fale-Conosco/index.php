<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suporte</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #2c3e50;
        }

        .header {
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.1);
        }

        .logo-container {
            display: inline-block;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            border: 3px solid #2779B8;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .logo-container:hover {
            transform: scale(1.1);
        }

        .logo {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .fale-conosco {
            text-align: center;
            padding: 40px 20px;
            background: linear-gradient(135deg, #2779B8, #1e5b8a);
            margin: 20px auto;
            border-radius: 10px;
            max-width: 800px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .fale-conosco h1 {
            color: white;
            font-size: 2.5em;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .contatos {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 8px;
            margin: 20px auto;
            max-width: 600px;
        }

        .contatos h2 {
            color:rgb(255, 255, 255);
            margin-bottom: 15px;
            font-size: 1.8em;
        }

        .contatos p {
            color: white;
            margin: 10px 0;
        }

        .nossa-equipe {
            background-color: white;
            padding: 40px 20px;
            border-radius: 10px;
            margin: 20px auto;
            max-width: 1200px;
        }

        .nossa-equipe h2 {
            color: #2779B8;
            text-align: center;
            margin-bottom: 30px;
            font-size: 2em;
        }

        .equipe-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            padding: 20px;
        }

        .membro-equipe {
            background-color: #f5f5f5;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
        }

        .membro-equipe img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 20%;
            margin-bottom: 10px;
        }

        .linkedin-link {
            color: #2779B8;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .linkedin-link:hover {
            color: #1e5b8a;
        }
        img{
            border-radius: 2rem;
            width: 150px;
        }
    </style>
</head>
<body>
    <?php
    // Função para o link da home
    function homeLink($content) {
        echo '<a href="..\home\index.php" class="logo-container">' . $content . '</a>';
    }
    ?>

    <header class="header">
        <?php
        // Usando a função para criar o link da logo
        homeLink('<img src="..\..\image\logo.png" alt="Logo da Empresa" class="logo">');
        ?>
    </header>

    <section class="fale-conosco">
        <h1>FALE CONOSCO</h1>
        
        <div class="contatos">
            <h2>Contatos</h2>
            <p>Email: empresaseria@service.com</p>
            <p>Horário de Atendimento: Seg-Dom, 7h às 22h</p>
        </div>
    </section>

    <section class="nossa-equipe">
        <h2>Nossa Equipe</h2>
        <div class="equipe-grid">
            <div class="membro-equipe">
                <img src="../../image/IMG_20241215_162142_608.webp" alt="">
                <h3>Luan</h3>
                <p>Gestor de Projetos</p>
                <a href="#" class="linkedin-link">LinkedIn</a>
            </div>
            <div class="membro-equipe">
                <img src="../../image/FotoGusta.jpg" alt="none" >
                <h3>Gustavo</h3>
                <p>Gestor de Projetos</p>
                <a href="#" class="linkedin-link">LinkedIn</a>
            </div>
            <div class="membro-equipe">
                <img src="../../image/IMG_3844.jpeg" alt="">
                <h3>Henrique</h3>
                <p>Gestor de Projetos</p>
                <a href="#" class="linkedin-link">LinkedIn</a>
            </div>
            <div class="membro-equipe">
                <img src="../../image/bruninha.jpg" alt="">
                <h3>Bruna</h3>
                <p>Gestor de Projetos</p>
                <a href="#" class="linkedin-link">LinkedIn</a>
            </div>
        </div>
    </section>
</body>
</html>