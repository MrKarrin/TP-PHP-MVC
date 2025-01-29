<?php
class Product
{
    private $id_product;
    private $name;
    private $price;
    private $category;

    public function __construct($id_product, $name, $price, $category)
    {
        $this->id_product = $id_product;
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }

    
    public function getId_product()
    {
        return $this->id_product;
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
    public function selectProduct() {}
}
