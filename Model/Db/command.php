<?php

class Command{
//operator 
var $CheckIfOpAccExists = "SELECT 1 from operators WHERE username = ? LIMIT 1";
var $CheckIfOpPassMatch = "SELECT 1 from operators WHERE username = ? and password = ? LIMIT 1";
var $SqlUpdateOpPassword = "UPDATE operators SET operators.password = ? WHERE Id = ?";
var $SqlUpdateOpUserName = "UPDATE opeartors SET username = ? WHERE Id = ?";


//customers
var $CheckIfCustAccExists = "SELECT 1 from customers WHERE username = ? LIMIT 1";
var $CheckIfCustPassMatch = "SELECT 1 from customers WHERE username = ? and password = ? LIMIT 1";
var $SqlUpdateCustPassword = "UPDATE customers SET customers.password = ? WHERE Id = ?";
var $SqlUpdateCustUserName = "UPDATE customers SET username = ? WHERE accountId = ?"

}

?>