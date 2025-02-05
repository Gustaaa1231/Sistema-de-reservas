<?php

require_once __DIR__ . "/../controller/fileeController.php";
$fileController = new FileeController();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    switch ($_GET["acao"]) {
        case 'salvarImagem':
            $uploadDir = "../../public/uploads/";
            $tipoPermitidos = ["image/png", "image/jpeg"];
            if(!is_dir($uploadDir)){
                mkdir($uploadDir, 0777, true);
            }
            if(isset($_FILES['image']) && in_array($_FILES['image']['type'],$tipoPermitidos))
             $fileTemp = $_FILES["image"]["tmp_name"];
             $fileNome = $_FILES["image"]["tmp_name"];
             $fileExtensao = pathinfo($fileNome, PATHINFO_EXTENSION);
             $NovoNome = uniqid("img_") . "." . $fileExtensao;
            $destino = $uploadDir . $NovoNome;
            
            if(move_uploaded_file($fileTemp, $destino){
                $resultado->$fileController->SalvarImagem($NovoNome)
            }
            
            break;
        
        default:
            echo "nao achei nenhuma das opções";
            break;
    }

}

