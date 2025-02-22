﻿<?php
require_once "./app/model/User.php";
class UserController
{

    public function UserLogin()
    {

        $message = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            if (!empty($email) && !empty($password)) {

                $usermodel = new User();
                $user = $usermodel->GetUSerByEmail($email);

                if ($user && $password === $user['password']) {
                    if (session_status() === PHP_SESSION_NONE) {
                        session_start();
                    }
                    $_SESSION['login'] = true;
                    $_SESSION['user_id'] = $user['id'];
                    header('location: ./index.php');
                    exit;
                } else {
                    $message = 'Email ou mot de passe incorrect.';
                }
            } else {
                $message = 'Veuillez remplir tous les champs.';
            }
        }

        require "./app/views/login.php";
    }

    public function UserDisconnect()
    {

        if (!empty($_SESSION['login']) && $_SESSION['login'] === true) {
            session_destroy();
            header('location: ./index.php');
        }
    }
    public function SessionUser()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $allproductmodel = new Product();
        $allproduct = $allproductmodel->getAllProduct();

        session_regenerate_id();
        if ($_SESSION['login'] !== true) {
            header('location: ./index.php');
        }
        if ($_SESSION['login'] === true) {
            session_regenerate_id();
        }
        require "./app/views/dashboard.php";
    }
    public function UserId()
    {

        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        session_regenerate_id();
        if ($_SESSION['login'] !== true) {
            header('location: ./index.php');
        }
        if ($_SESSION['login'] === true) {
            session_regenerate_id();
            $user_id = $_SESSION['user_id'];
            $product = new Product();
            $product = $product->getAllProduct();

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                // $_SESSION['order'];
                // $order= new order();
                // $order= $order->order($_SESSION['user_id'],$_SESSION['order']);
                // inserer ligne table order avec user id session 
                // recup id commander inserer PDO (PDO lastInsertID()) 
                // pour chaque produit session 
                // inser ligne table order list avec id pour id order et id produit sur qui bloucle

            }
        }
        require "./app/views/profile.php";
    }
    public function CreateUser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $name = $_POST['name'];
            $createuser = new User();
            $createuser = $createuser->CreateUser($name, $email, $password);
            header('location: ./login.php');
        }
        require_once("./app/views/register.php");
    }
}
