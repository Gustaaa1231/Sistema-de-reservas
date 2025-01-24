<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fale Conosco</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        section {
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .team-photos {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 30px;
        }

        .team-member {
            text-align: center;
        }

        .team-member img {
            width: 200px;  
            height: 200px; 
            object-fit: cover; 
            border-radius: 50%; 
            border: 2px solid black;
            transition: transform 0.3s;
        }


        .team-member img:hover {
            transform: scale(1.1);
        }

        .contact-info, .contact-info2 {
            margin-top: 10px;
        }

        .contact-info a, .contact-info2 a {
            color: #333;
            text-decoration: none;
            font-size: 18px;
            margin: 0 10px;
        }

        .contact-info a:hover, .contact-info2 a:hover {
            color: #007bff;
        }
    </style>
</head>
<body>

<header>
    <h1>Fale Conosco</h1>
</header>

<section>
    <h2>Entre em Contato</h2>
    <p style="text-align: center;">Tem alguma dúvida ou quer conversar conosco? Fique à vontade para nos seguir nas redes sociais ou acessar nosso GitHub!</p>

    <div class="team-photos">
        <div class="team-member">
            <img src="../../image/IMG-20241231-WA0051.jpg" alt="Luan">
            <p>Luan</p>
            <div class="contact-info">
                <a href="https://github.com/seu-github" target="_blank">GitHub</a>
            </div>
            <div class="contact-info2">
                <a href="https://www.instagram.com/seu-instagram" target="_blank">Instagram</a>
            </div>
        </div>
        <div class="team-member">
            <img src="../../image/FotoGusta.jpg" alt="Gustavo">
            <p>Gustavo</p>
            <div class="contact-info">
                <a href="https://github.com/seu-github" target="_blank">GitHub</a>
            </div>
            <div class="contact-info2">
                <a href="https://www.instagram.com/seu-instagram" target="_blank">Instagram</a>
            </div>
        </div>
        <div class="team-member">
            <img src="../../image/IMG_3844.jpeg" alt="Henrique">
            <p>Henrique</p>
            <div class="contact-info">
                <a href="https://github.com/seu-github" target="_blank">GitHub</a>
            </div>
            <div class="contact-info2">
                <a href="https://www.instagram.com/seu-instagram" target="_blank">Instagram</a>
            </div>
        </div>
        <div class="team-member">
            <img src="../../image/foto-de-perfil.jpg" alt="Bruna">
            <p>Bruna</p>
            <div class="contact-info">
                <a href="https://github.com/seu-github" target="_blank">GitHub</a>
            </div>
            <div class="contact-info2">
                <a href="https://www.instagram.com/seu-instagram" target="_blank">Instagram</a>
            </div>
        </div>
    </div>
</section>

</body>
</html>
