<?php

require_once __DIR__ . "/../controller/loginController.php";
$loginController = new LoginController();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    switch ($_GET["acao"]) {
        case 'validarLogin':
            $nome = $_POST["nome"];
            $senha = $_POST["senha"];

            if(!(empty($nome) || empty($senha))){
                $resposta = $loginController->Login($nome,$senha);
                if($resposta){
                    header("Location: ../../pages/home/index.php");
                }
            }
            break;
        
        default:
            echo "nao achei nenhuma das opções";
            break;
    }

}

