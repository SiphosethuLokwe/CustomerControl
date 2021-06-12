<?php
class Operators{

    var $Id;
    var $name;
    var $username;
    var $passsword;

public function _construct($Id,$name,$username,$password){

    $this->Id = $Id;
    $this->name = $name;
    $this->username=$username;
    $this->password=$password;
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
//--Get and Set username---//

}


?>