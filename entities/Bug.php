<?php

use Doctrine\Common\Collections\ArrayCollection;

class Bug
{
    protected $id;
    protected $description;
    protected $created;
    protected $status;
    protected $engineer;
    protected $reporter;
    protected $products = null;



    public function __construct() 
    {
        $this->products = new ArrayCollection;
    }
    public function setEngineer($engineer)
    {
        $engineer->assignedToBug($this);
        $this->engineer = $engineer;
    }

    public function setReporter($reporter)
    {
        $reporter->addReportedBug($this);
        $this->reporter = $reporter;
    }

    public function getEngineer()
    {
        return $this->engineer;
    }

    public function getReporter()
    {
        return $this->reporter;
    }
    public function assignToProduct ($product)
    {
        $this->products[] = $product;
    }
    public function getProducts()
    {
        return $this->products;
    }
}
