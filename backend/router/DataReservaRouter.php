<?php include"../../pages/home/index.php";
require_once __DIR__ . "/../controller/DataReservaController.php";
$DataReservaController = new DataReservaController();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    switch ($_GET["acao"]) {
        case 'reservar':
            $datas = $_POST["calendar"];


            if(!(empty($datas))) {
        $resposta = $DataReservaController->Reservar_data($datas);
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