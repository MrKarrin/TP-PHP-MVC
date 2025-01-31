<?php
?>
<div class="profile">
    <div class="cart">
        <h2>Mon Panier</h2>
        <ul>
            <li><img src="https://placehold.co/50x50"><p>PRODUCT NAME</p><p>PRICE</p><div class="quantity-container">
                <input type="button" class="quantity-btn" value="-" onclick="this.nextElementSibling.stepDown()">
                <input type="number" class="quantity-input" value="1" min="1">
                <input type="button" class="quantity-btn" value="+" onclick="this.previousElementSibling.stepUp()">
                </div>
                <button class="delete_btn">DELETE</button>
            </li>
        </ul>
        <div class="pay">
           <h3>PRICE</h3>
           <button class="buy">Acheter</button>
        </div>
        
    </div>
    <div class="acount">
        <h2>Modifier Profil</h2>
        <div class="form-container">
            
            <form>
                <div class="form-group">
                    <label for="name">Nom :</label>
                    <input type="text" id="name" name="name" placeholder="Entrez votre nom" required>
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" placeholder="Entrez votre email" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe :</label>
                    <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe" required>
                </div>
                <button type="submit" class="submit-btn">Enregistrer</button>
            </form>
        </div>
    </div>
    <div class="history">
        <h2>Historique des commandes</h2>
        <ul>
            <li><p>DATE</p><p>PRICE</p><p>ORDER ID</p><button class="delete_btn">DELETE</button></li>
            <li><p>DATE</p><p>PRICE</p><p>ORDER ID</p><button class="delete_btn">DELETE</button></li>
            <li><p>DATE</p><p>PRICE</p><p>ORDER ID</p><button class="delete_btn">DELETE</button></li>
        </ul>
    </div>
</div>