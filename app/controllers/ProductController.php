<?php
require_once "./app/model/Product.php";

class ProductController
{

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function selectAllProduct()
    {
        $allproductmodel = new Product();
        $allproduct = $allproductmodel->getAllProduct();
        require "./app/views/home.php";
    }
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function selectProduct($id)
    {
        $productmodel = new Product();
        $product = $productmodel->getProduct($id);
        require "./app/views/product.php";
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function editProduct($id)
    {
        $productmodel = new Product();
        $product = $productmodel->getProduct($id);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // var_dump($product);
            // var_dump($_POST);
            // exit;
            $name = trim($_POST['name'] != '' ? $_POST['name'] : $product['name']);
            $price = trim($_POST['price'] != '' ? $_POST['price'] : $product['price']);
            $category = trim($_POST['category'] != '' ? $_POST['category'] : $product['category']);
            $content = trim($_POST['content']  != '' ? $_POST['content'] : $product['content']);
         
            $images = null;
            if (isset($_FILES['images']) && $_FILES['images']['error'] === UPLOAD_ERR_OK) {
                $uploadir = match ($category) {
                    'Fruits' => './assets/img/fruits/',
                    'Légumes' => './assets/img/vegetables/',
                    default => './assets/img/public/',
                };

                if (!is_dir($uploadir)) {
                    mkdir($uploadir, 0777, true);
                }
                $images = uniqid() . '-' . basename($_FILES['images']['name']);
                $imagePath = $uploadir . $images;
                if (!move_uploaded_file($_FILES['images']['tmp_name'], $imagePath)) {
                    echo "error";
                    $imagePath = null;
                }
            }
            $imageToUpdate = $images ?: $product['images'];
            if (isset($name) && isset($price) && isset($category) && isset($content)) {
                $updateProductModel = new Product();
                $updateProductModel->updateProduct(
                    $name,
                    $price,
                    $category,
                    $imageToUpdate,
                    $content,
                    $id
                );
            }
            header('location: ./index.php');
            exit;
        }
        require "./app/views/edit.php";
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function createProduct($name, $price, $category, $images, $content)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = trim($_POST['name']);
            $price = trim($_POST['price']);
            $category = trim($_POST['category']);
            $content = trim($_POST['content']);

            $images = null;
            if (isset($_FILES['images']) && $_FILES['images']['error'] === UPLOAD_ERR_OK) {
                $uploadir = match ($category) {
                    'Fruits' => './assets/img/fruits/',
                    'Légumes' => './assets/img/vegetables/',
                    default => './assets/img/public/',
                };

                if (!is_dir($uploadir)) {
                    mkdir($uploadir, 0777, true);
                }
                $images = uniqid() . '-' . basename($_FILES['images']['name']);
                $imagePath = $uploadir . $images;
                if (!move_uploaded_file($_FILES['images']['tmp_name'], $imagePath)) {
                    echo "error images post controle add ";
                    $imagePath = null;
                }
            }
            if (isset($name) && (isset($price)) && (isset($category)) && (isset($images)) && (isset($content))) {
                $addproductmodel = new Product();
                $addproduct = $addproductmodel->createProduct($name, $price, $category, $images, $content);
            }
        }
        //require "./app/views/edit.php";
    }


    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function DeleteProduct($id)
    {
        $delete_productModel = new Product();
        $delete_product = $delete_productModel->deleteProductById($id);
        require "./app/views/home.php";
    }
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

}
