<?php

class Router{

    public static function redirect()
    {
        $action = isset($_GET['action']) ? $_GET['action'] : 'index';
        $id = isset($_GET['id']) ? (int)$_GET['id'] : null;

        switch($action) {

            case 'index' :
                $postController = new PostController($this->pdo); // On utilise $this->pdo pour accéder à la connexion
                $postController->index();
                break;
                default:
                    echo 'Page not found';
                    break;
            }
        }
    }
}
