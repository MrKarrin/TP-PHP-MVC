<?php

class Router
{

    public static function redirect()
    {
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';
        $id = isset($_GET['id']) ? (int)$_GET['id'] : null;

        switch ($page) {

            case 'home':
                //$postController = new PostController;
                //$postController->index();
                break;
                
            default:
                echo 'Page not found';
                break;
        }
    }
}
