<?php
class Invoice
{
    public $Id;
    public $customer_id;
    public $date_created;
    public $amount;

    public function _construct($Id, $customer_id, $date_created, $amount)
    {
        $this->Id = $Id;
        $this->customer_id = $customer_id;
        $this->date_created=$date_created;
        $this->amount=$amount;
    }
    public function getId()
    {
        return $this->Id;
    }

    public function setId($param)
    {
        $this->Id = $param;
    }

    public function getCustomer_id()
    {
        return $this->customer_id;
    }

    public function setCustomer_id($param)
    {
        $this->customer_id=$param;
    }

    public function getDate_Created()
    {
        return $this->date_created;
    }

    public function setDate_Created($param)
    {
        $this->date_created=$param;
    }
  
    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($param)
    {
        $this->amount=$param;
    }
}
?>