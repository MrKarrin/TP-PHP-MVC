<?php
class Product
{
    private $name;
    private $price;
    private $category;
    
    public function __construct($name, $price, $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }

    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }


    public function getPrice()
    {
        return $this->price;
    }


    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }


    public function getCategory()
    {
        return $this->category;
    }


    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }
    public function selectProduct() {
        
    }
}
