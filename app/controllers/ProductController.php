<?php
require_once "./app/model/Product.php";

class ProductController
{

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function selectAllProduct()
    {
        $allproductmodel = new Product();
        $allproduct=$allproductmodel->getAllProduct();
        require "./app/views/home.php";
    }
        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        public function selectProduct($id)
        {
            $productmodel = new Product();
            $productmodel->getProduct($id);
            require "./app/views/product.php";
        }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function createProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = trim($_POST['name']);
            $price = trim($_POST['price']);
            $category = trim($_POST['category']);
            $content = trim($_POST['content']);

            $images = null;
            if (isset($_FILES['images']) && $_FILES['images']['error'] === UPLOAD_ERR_OK) {
                if ($category == 'Fruits') {
                    $uploadir = './assets/img/fruits/';
                }
                if ($category == 'Légumes') {
                    $uploadir = './assets/img/vegetables';
                }

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
            if (isset($name) && (isset($price)) && (isset($category)) && (isset($images))&& (isset($content))) {
                $addproductmodel = new Product();
                $addproduct=$addproductmodel->createProduct($name, $price, $category, $images, $content);
            }
        }
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function DeleteProduct($id)
    {
        $delete_productModel = new Product();
        $delete_product=$delete_productModel->deleteProductById($id);
        require "./app/views/home.php";
    }
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


































    private $id_product;
    private $name;
    private $price;
    private $category;

    public function __construct() {}


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
}
