<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$islogin = !empty($_SESSION['login']) && $_SESSION['login'] === true;
?>
<nav>
    <div class="navbar-logo" ><a href="index.php">EXO village<img src="assets\img\public\logo.png"></a></div>
    <ul class="navbar-menu">
        <?php if ($islogin): ?>
            <li><a href="index.php?page=dashboard">Admin ▼</a></li>
        <?php endif; ?>
        <li><a href="index.php?page=orders">Panier ▼</a></li>
        <?php if ($islogin): ?>
            <li><a href="index.php?page=disconnect">Déconnexion ▼</a></li>
        <?php endif; ?>
        <?php if (!$islogin): ?>
            <li><a href="index.php?page=login">Connexion ▼</a></li>
        <?php endif; ?>
    </ul>
</nav>