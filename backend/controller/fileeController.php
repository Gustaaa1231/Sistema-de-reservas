<?php
include_once __DIR__ . "/../db/database.php";

class FileeController
{
    private $conn;

    public function __construct()
    {
        $objDb = new Database();
        $this->conn = $objDb->connect();
    }

    public function SalvarImagem($nomeImagem)
    try {
        $sql = "INSERT INTO imagens(nome) VALUES (:imagemNome)";
        $db = $this->conn->prepare($sql);
        $db->bindParam(":imagemNome", $nomeImagem);
        if($db->execute()){
            return true;
        }else{
            return false;
        }
    }catch

}
