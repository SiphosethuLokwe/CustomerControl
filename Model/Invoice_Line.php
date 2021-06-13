<?php
class Invoice_Line
{
    public $Id;
    public $customer_id;
    public $description;
    public $date_created;
    public $amount;

    public function _construct($Id, $invoice_id, $description, $date_created, $amount)
    {
        $this->Id = $Id;
        $this->invoice_id = $invoice_id;
        $this->description=$description;
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

    public function getInvoiceCustomer_id()
    {
        return $this->invoice_id;
    }

    public function setInvoice_id($param)
    {
        $this->invoice_id=$param;
    }
  
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($param)
    {
        $this->description=$param;
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