<?php
//require_once "./app/models/User.php";
class UserController
{

    public function UserLogin()
    {
        $message = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (!empty($email) && !empty($password)) {

                $email = trim($_POST['email']);
                $password = trim($_POST['password']);

                $allusermodel = new User();
                $alluser = $allusermodel->getAllUser();

                if ($email === $alluser['email'] && $password === $alluser['passwor']) {
                }
            }
            $message = 'veuillez remplir tous les champs';
        }
        require "./app/views/login.php";
    }
}
