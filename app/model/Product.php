<?php
require_once('./core/database.php');
class Product
{
    public function __construct() {}

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function getAllProduct()
    {
        $pdo = Database::connect();
        $sql = 'SELECT * FROM product';
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $allproduct = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $allproduct;
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function getProduct($id)
    {
        $pdo = Database::connect();
        $sql = "SELECT * FROM product WHERE id_product=:id_product";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id_product' => $id]);
        $product_id = $stmt->fetch(PDO::FETCH_ASSOC);
        return $product_id;
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function createProduct($name, $price, $category, $images, $content)
    {
        $pdo = Database::connect();
        $sql = "INSERT INTO product (name,	price, category, img, content) VALUE :name,	:price, :category, :images , :content";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'name' => $name,
            'price' => $price,
            'category' => $category,
            'img' => $images,
            'content' => $content
        ]);
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function deleteProductById($id)
    {
        $pdo = Database::connect();
        $sql = "DELETE FROM product WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function updateProduct($name, $price, $category, $images, $id)
    {
        $pdo = Database::connect();
        $sql = "UPDATE product  SET name=:name, price=:price, category=:category ,images=:imagese WHERE id=:id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'name' => $name,
            'price' => $price,
            'category' => $category,
            'img' => $images,
            'id' => $id
        ]);
    }
}
