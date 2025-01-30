﻿<?php

class Database
{

    private static $instance = null;

    public static function connect()
    {

        if (!self::$instance) {
            self::$instance = new PDO('mysql:host=localhost;dbname=gestion_de_commandes;charset=utf8', 'root', '');
        }
        return self::$instance;
    }
}

?>
