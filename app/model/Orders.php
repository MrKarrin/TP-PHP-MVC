<?php
require_once('./core/database.php');

class Order {
public function __construct() {}

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function getAllOrders()
    {
        $pdo = Database::connect();
        $sql = 'SELECT * FROM orders';
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $allorders = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $allorders;
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function getOrder($id)
    {
        $pdo = Database::connect();
        $sql = "SELECT * FROM orders WHERE id_order=:id_order";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id_order' => $id]);
        $id_order = $stmt->fetch(PDO::FETCH_ASSOC);
        return $id_order;
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function creatOrder($quantity_product)
    {
        $pdo = Database::connect();
        $sql = "SELECT * FROM product   
        JOIN order_list ON order_list.product_id = product.id_product
        JOIN orders ON orders.id_order = order_list.id_order
        WHERE orders.id_order = :id_order";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':id_order' => 1
        ]);
        
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function deleteOrderById($id)
    {
        $pdo = Database::connect();
        $sql = "DELETE FROM orders WHERE id_order = :id_order";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'id_order' => $id
    ]);
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function updateOrder($quantity_product)
    {
        $pdo = Database::connect();
        $sql = "UPDATE orders  SET quantity_product=:quantity_product WHERE id_order=:id_order";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'quantity_product' => $quantity_product
        ]);
    }

}