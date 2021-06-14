<?php
include ('../../Model/Db/errorlogger.php');
class CustomerController{

    public function _construct(){}

    public function SaveCustomerDetails2($name,$address,$username,$password,$datecreated,$balance,$Conn,$Comm){
        try{
            $stmt = $Conn->Connect()->prepare($Comm->SqlInsertCustomer);
            $stmt->execute(['name' => $name
                , 'address' => $address
                , 'username' => $username
                , 'password' => $password
                ,'datecreated'=>$datecreated
                ,'balance'=>$balance]);
                $id = $Conn->lastInsertId();
                return $id;
        }catch(PDOException $e){
            $Error = new errorlogger();
            echo $e->getMessage();
            $Error->GetErrorInfo($e->getMessage());
            return 0;
        }
    }

    public function SaveCustomerDetails($customer,$Conn,$Comm){
        try{
            $stmt = $Conn->Connect()->prepare($Comm->SqlInsertCustomer);
            $stmt->execute(['name' => $customer->name
                , 'address' => $customer->address
                , 'username' => $customer->username
                , 'password' => $customer->password
                ,'datecreated'=>$customer->dateCreated
                ,'balance'=>$customer->balance]);
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
             $stmt = $Conn->Connect()->prepare($Comm->CheckIfCustAccExists);
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
            $stmt = $Conn->Connect()->prepare($Comm->CheckIfCustPassMatch);
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