<?php
 ?>
<div class="login-container">
    <form method="post" class="login-form">
        <h2>Connexion</h2>
        <label for="email">Email :</label>
        <input type="email" id="email" placeholder="Votre email" required name="email">
        
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" placeholder="Votre mot de passe" required name="password">
        <a href="index.php?page=register">Pas encore inscrit ?</a>
        <button type="submit">Se connecter</button>
        <p><?= $message ?></p>
    </form>
</div>