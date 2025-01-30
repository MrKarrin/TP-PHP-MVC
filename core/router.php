<?php
require_once("./app/controllers/OrdersController.php");
require_once("./app/controllers/ProductController.php");
require_once("./app/controllers/UserController.php");
class Router
{

    public static function redirect()
    {
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';
        $id = isset($_GET['id']) ? (int)$_GET['id'] : null;

        switch ($page) {

            case 'home':
                $selectallproduct = new ProductController();
                $selectallproduct->selectAllProduct();
                break;
            case 'product':
                $selectaproduct = new ProductController();
                $selectaproduct->selectProduct($id);
                break;
            case 'dashboard':
                $selectallproduct = new ProductController();
                $selectallproduct->selectAllDashboard();
                break;
            case 'edit':
                $editproduct = new ProductController();
                $editproduct->editProduct($id);
                break;
            case 'login':
                $userlogin = new UserController();
                $userlogin->UserLogin();
                break;
            case 'register':
                require_once("./app/views/register.php");
                break;
            case 'orders':
                require_once("./app/views/profile.php");
                break;



            default:
                echo 'Page not found';
                break;
        }
    }
}
