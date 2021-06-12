<?php
class Customers{

var $Id;
var $name;
var $address;
var $dateCreated;
var $username;
var $password;
var $balance;


public function _construct($Id,$name,$address,$dateCreated,$username,$password,$balance)
{
        $this->Id=$Id;
        $this->name=$name;
        $this->address=$address;
        $this->dateCreate=$dateCreated;
        $this->username=$username;
        $this->password=$password;
        $this->balance=$balance;
    
}

//--Get and Set ID ----//
public function getId()
{
  return $this->Id;
}

public function setId($param)
{
  $this->Id = $param;
}
//--Get and Set ID ----//

//--Get and Set name---//
public function getName()
{
  return $this->name;
}

public function setNam($param)
{
  $this->name=$param;
}
//--Get and Set name---//


//--Get and Set username---//
public function getUsername()
{
  return $this->username;
}

public function setUsername($param)
{
 $this->username = $param;
}
//--Get and Set username---//

//--Get and Set password---//
public function getPassword()
{
 return $this->password;
}

public function setPassword($param)
{
  $this->password=$param;
}
//--Get and Set password---//

//--Get and Set dateCreated---//
public function getDateCreated()
{
    return $this->dateCreated;
}

public function setDateCeated($param)
{
    $this->dateCreated=$parama;
}
//--Get and Set dateCreated---//

//--Get and Set Balance---//

public function getBalance()
{
    return $this->balance;
}

public function setBalance($param)
{
    $this->dateCreated=$param;
}
//--Get and Set Balance---//


}




?>