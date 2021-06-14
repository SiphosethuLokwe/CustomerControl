
<?php
// Inistialise Session
Session_Start();

if(!isset($_SESSION['user'])){
    header('Location: Login.php');
}
?>
<?php
include ('../../Controller/CustomerController.php');
include ('../../Model/Db/Connection.php');
include ('../../Model/Db/Command.php');
include ('../../Model/customers.php');


if($_POST['addcustomer'])
{
    $msg = '';
    $loginurl = 'Location: newpost.html';

    $validate = new Validate();
    if($validate->UsernameMissing()){
        $msg = $msg.'em=Username is required';
    }
    if($validate->PasswordMissing()){
        $msg = ($msg != '') ? $msg.'&&ps=Password is required' 
        : $msg.'ps=Password is required';
    }
    if($validate->NameMissing()){
        $msg = ($msg != '') ? $msg.'&&ps=Name is required' 
        : $msg.'ps=Name is required';
    }
    if($validate->AddressMissing()){
        $msg = ($msg != '') ? $msg.'&&ps=Address is required' 
        : $msg.'ps=Address is required';
    }
    if($validate->BalanceMissing()){
        $msg = ($msg != '') ? $msg.'&&ps=Balanace is required' 
        : $msg.'ps=Balanace is required';
    }

    $Conn = new Connection();
    $Comm = new Command();
    $customer_controller = new CustomerController();
    $homepage = '../Operator/home.html"';
    $name = $_POST['name'];
    $date = date("Y-m-d H:i:s");
    $address = $_POST['address'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $balance = $_POST['balance'];

    
    $customer = new Customers($name,$date,$address,$username,$password,$balance);
    echo $customer->name;
   // if(isset($customer) ){
         $result = $customer_controller->SaveCustomerDetails2($name,$address,$username,$password,$date,$balance,$Conn,$Comm);
        //$result = $customer_controller->SaveCustomerDetails($customer,$Con,$Comm);
        if($result > 0)
        {
            header($homepage);
        }

    
   // }
    //else{

   // }
    

    


}





?>

<?php
class Validate{
    
    public function __construct(){

    }
    public function GetUsername(){
        return filter_var($_POST["username"], FILTER_SANITIZE_EMAIL);
    }
    public function GetPassword(){
        return filter_var($_POST["password"], FILTER_SANITIZE_STRING);
    }
    public function GetName(){
        return filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    }
    public function GetAddress(){
        return filter_var($_POST["address"], FILTER_SANITIZE_STRING);
    }
    public function GetBalnce(){
        return filter_var($_POST["balance"],FILTER_SANITIZE_NUMBER_FLOAT);
    }
    
    public function UsernameMissing(){
        try{
            $em = filter_var($_POST["username"], FILTER_SANITIZE_EMAIL);
            if($em == '' || $em == null){
                return true;
            }
            return false;
        }catch(PDOException $e){
            return true;
        }
    }
    public function PasswordMissing(){
        try{
            $pass = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
            if($pass == '' || $pass == null){
                return true;
            }
            return false;
        }catch(PDOException $e){
            return true;
        }
    }
    public function NameMissing(){
        try{
            $pass = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
            if($pass == '' || $pass == null){
                return true;
            }
            return false;
        }catch(PDOException $e){
            return true;
        }
    }
    public function AddressMissing(){
        try{
            $pass = filter_var($_POST["address"], FILTER_SANITIZE_STRING);
            if($pass == '' || $pass == null){
                return true;
            }
            return false;
        }catch(PDOException $e){
            return true;
        }
    }
    public function BalanceMissing(){
        try{
            $pass = filter_var($_POST["balance"], FILTER_SANITIZE_NUMBER_FLOAT);
            if($pass == '' || $pass == null){
                return true;
            }
            return false;
        }catch(PDOException $e){
            return true;
        }
    }
}
?>


