﻿<?php

class Router{

    public static function redirect()
    {
        if (isset($_GET['page'])) {
            switch ($_GET['page']) {

                case 'login':
                   // $controller = new UserController();
                   // $controller->login();
                    break;
                default:
                    echo 'Page not found';
                    break;
            }
        }
    }
}
