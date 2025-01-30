<?php
class OrdersController
{

    private $id_order;
    private $userid; /* à vérifier si besoin///////////////////////////////// */
    private $createdAt;
    private $quantity_product;

    public function __construct() {}


    public function getId_order()
    {
        return $this->id_order;
    }


    public function getUserid()
    {
        return $this->userid;
    }


    public function getCreatedAt()
    {
        return $this->createdAt;
    }


    public function getQuantity_product()
    {
        return $this->quantity_product;
    }


    public function setQuantity_product($quantity_product)
    {
        $this->quantity_product = $quantity_product;

        return $this;
    }
}
