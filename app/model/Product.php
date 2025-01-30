<?php
require_once('./core/database.php');
class Product
{
    public function __construct() {}
    public function getAllProduct()
    {
        $pdo = Database::connect();
        $sql = 'SELECT * FROM product';
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $allproduct = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $allproduct;
    }
    public function createProduct($name, $price, $category, $images)
    {
        $pdo = Database::connect();
        $sql = "INSERT INTO product (name,	price, category, img) VALUE :name,	:price, :category, :images";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'name' => $name,
            'price' => $price,
            'category' => $category,
            'img' => $images
        ]);
    }
}
