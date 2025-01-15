<?php
include_once __DIR__ . "/../db/database.php";

class UserController
{
    private $conn;

    public function __construct()
    {
        $objDb = new Database();
        $this->conn = $objDb->connect();
    }

    public function GetAllUser(){
        try {
            $sql = "SELECT * FROM usuario";
            $db = $this->conn->prepare($sql);
            $db->execute();
            $user = $db->fetchAll(PDO::FETCH_ASSOC);
            return $user;
        } catch (\Exception $th) {
            return $th->getMessage();
        }
    }

    public function CreateUser($nome, $senha){
        try {

           
            $sql = "INSERT INTO usuario (nome,senha) VALUES(:nome,:senha)";
            $db = $this->conn->prepare($sql);
            $db->bindParam(":nome", $nome);
            $db->bindParam(":senha", $senha);
            if($db->execute()){
                return true;
            }else{
                return false;
            }
        } catch (\Exception $th) {
            //throw $th;
        }
    }

    public function DeleteUser($id){
        try {
            $sql = "DELETE FROM usuario WHERE id = :id";
            $db = $this->conn->prepare($sql);
            $db->bindParam(":id", $id);
            if($db->execute()){
                return true;
            }else{
                return false;
            }
        } catch (\Exception $th) {
            //throw $th;
        }
    }


    public function UpdateUser($id,$nome, $senha){
        try {
            $sql = "UPDATE usuario SET nome = :nome, senha = :senha WHERE id = :id";
            $db = $this->conn->prepare($sql);
            $db->bindParam(":nome", $nome);
            $db->bindParam(":senha", $senha);
            $db->bindParam(":id", $id);
            if($db->execute()){
                return true;
            }else{
                return false;
            }
        } catch (\Exception $th) {
            //throw $th;
        }
    }

    public function GetUserById($id){
        try {
            $sql = "SELECT * FROM usuario WHERE id = :id";
            $db = $this->conn->prepare($sql);
            $db->bindParam(":id", $id);
            $db->execute();
            $user = $db->fetch(PDO::FETCH_ASSOC);
            return $user;
        } catch (\Exception $th) {
            //throw $th;
        }
    }
}
