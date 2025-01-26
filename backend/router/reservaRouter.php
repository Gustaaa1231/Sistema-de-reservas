<?php include"../../pages/home/index.php";
require_once __DIR__ . "/../controller/ReservaController.php";
$ReservaController = new ReservaController();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    switch ($_GET["acao"]) {
        case 'reservar':
            $nome = $_POST["name_cliente"];
            $email = $_POST["email_cliente"];
            $telefone = $_POST["number"];
            $datas = $_POST["calendar"];


            if(!(empty($nome) || empty($email) || empty($telefone) || empty($datas))) {
        $resposta = $ReservaController->Reservar($nome,$email, $telefone, $datas);
            if($resposta){
                header("Location: ../../pages/home/index.php");
                }
            }
            break;
        default:
            echo "Não especificado";
            break;
            

};
}
?>