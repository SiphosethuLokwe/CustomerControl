<?php
include ('../../Model/Db/errorlogger.php');

class OperatorController{

    public function _construct(){}

    public function Save($Account,$Conn,$Comm){
        try{
            $stmt = $Conn->Connect()->prepare($Comm->SqlInsertAccount);
            $stmt->execute(['lastUpdate' => $Account->lastUpdate
                , 'lastUpdate' => $Account->LastUpdate
                , 'username' => $Account->UserName
                , 'password' => $Account->Password]);
                $id = $Conn->lastInsertId();
                return $id;
        }catch(PDOException $e){
            $Error = new errorlogger();
            echo $e->getMessage();
            $Error->GetErrorInfo($e->getMessage());
            return 0;
        }
    }

    public function Exist($username, $Conn, $Comm){
        try{
             $stmt = $Conn->Connect()->prepare($Comm->CheckIfOpAccExists);
             $stmt->bindParam(1, $username, PDO::PARAM_STR);
             $stmt->execute();
             $condition = ($stmt->fetchColumn()) ? true : false;
             return $condition;
         }catch(PDOException $e){
             $Error = new errorlogger();
             echo $e->getMessage();
             $Error->GetErrorInfo($e->getMessage());
             return false;
         }
     }
     
    public function PasswordMatch($username, $password, $Conn, $Comm){
        try{
            $stmt = $Conn->Connect()->prepare($Comm->CheckIfOpPassMatch);
            $stmt->bindParam(1, $username, PDO::PARAM_STR);
            $stmt->bindParam(2, $password, PDO::PARAM_STR);
            $stmt->execute();
            $condition = ($stmt->fetchColumn()) ? true : false;
            return $condition;
        }catch(PDOException $e){
            $Error = new errorlogger();
            echo $e->getMessage();
            $Error->GetErrorInfo($e->getMessage());
            return false;
        }
    }

}

?>