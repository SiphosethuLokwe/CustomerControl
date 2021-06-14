
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
include ('../../Model/customer.php');

$Con = new Connection();
$Comm = new Command();
$msg = '';
 $loginurl = 'Location: newpost.html';
$customer_controller = new CustomerController();

 $customer = new customer()




?>


