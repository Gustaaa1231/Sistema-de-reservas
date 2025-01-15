<?php

require_once __DIR__ . "/../controller/userController.php";
$userController = new UserController();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    switch ($_GET["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $senha = $_POST["senha"];

            if(!(empty($nome) || empty($senha))){
                $resposta = $userController->CreateUser($nome,$senha);
                if($resposta){
                    header("Location: ../../pages/home/index.php");
                }
            }
            break;

        case "update":
            $nome = $_POST["nome"];
            $senha = $_POST["senha"];
            if(!(empty($nome) || empty($senha))){
                $resposta = $userController->UpdateUser($_POST["idUsuario"],$nome,$senha);
                if($resposta){
                    header("Location: ../../pages/home/index.php");
                }
            }
            break;

        case "deletar":
            $resultado = $userController->DeleteUser($_POST["idUsuario"]);
            if($resultado){
                header("Location: ../../pages/home/index.php");
            }
        
        default:
            echo "nao achei nenhuma das opções";
            break;
    }

}

