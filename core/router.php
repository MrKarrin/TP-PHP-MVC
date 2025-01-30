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
                require_once("./app/views/home.php");
                break;
            case 'login':
                require_once("./app/views/login.php");
                break;
            case 'register':
                require_once("./app/views/register.php");
                break;


            default:
                echo 'Page not found';
                break;
        }
    }
}
