<?php
require_once('./core/database.php');

class Order {
public function __construct() {}

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function getAllorders()
    {
        $pdo = Database::connect();
        $sql = 'SELECT * FROM orders';
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $allorders = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $allorders;
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function getorder($id)
    {
        $pdo = Database::connect();
        $sql = "SELECT * FROM orders WHERE id_order=:id_order";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id_order' => $id]);
        $id_order = $stmt->fetch(PDO::FETCH_ASSOC);
        return $id_order;
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function creatorder($quantity_product)
    {
        $pdo = Database::connect();
        $sql = "INSERT INTO orders (quantity_product) VALUE :quantity_product";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'quantity_product' => $quantity_product
        ]);
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function deleteorderById($id)
    {
        $pdo = Database::connect();
        $sql = "DELETE FROM orders WHERE id_order = :id_order";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'id_order' => $id
    ]);
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function updateorder($quantity_product)
    {
        $pdo = Database::connect();
        $sql = "UPDATE orders  SET quantity_product=:quantity_product WHERE id_order=:id_order";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'quantity_product' => $quantity_product
        ]);
    }

}