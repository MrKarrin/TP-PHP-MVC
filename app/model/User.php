<?php
require_once('./core/database.php');
class User
{
    public function __construct() {}

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function GetUSerByEmail($email)
    {
        $pdo = Database::connect();
        $sql = 'SELECT * FROM user WHERE email = :email';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        return $user;
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function getuser($id)
    {
        $pdo = Database::connect();
        $sql = "SELECT * FROM user WHERE id=:id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        $user_id = $stmt->fetch(PDO::FETCH_ASSOC);
        return $user_id;
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function CreateUser($name, $email, $password)
    {
        $pdo = Database::connect();
        $sql = "INSERT INTO user (name,	email, password) VALUE :name, :email, :password";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'name' => $name,
            'email' => $email,
            'password' => $password

        ]);
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function deleteuserById($id)
    {
        $pdo = Database::connect();
        $sql = "DELETE FROM user WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function updateuser($name, $email, $password)
    {
        $pdo = Database::connect();
        $sql = "UPDATE user  SET name=:name, email=:email, password=:password WHERE id=:id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'name' => $name,
            'email' => $email,
            'password' => $password
        ]);
    }
}
