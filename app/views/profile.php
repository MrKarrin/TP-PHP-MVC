<?php
$totalprice = 0;
$order_list = [];
?>
<div class="profile">
    <div class="cart">
        <h2>Mon Panier</h2>
        <ul>

            <?php if (!empty($_SESSION['order'])): ?>

                <?php foreach ($_SESSION['order'] as $order): ?>

                    <?php foreach ($product as $products): ?>
                        <?php if ($products['id_product'] == $order['id_product']):
                            $order_list['id'][] = $order['id_product'];
                            $order_list['quantity'][] = $order['quantity-input'];  ?>
                            <li>
                                <?php if ($products['category'] === 'Fruits'): ?>
                                    <?php if (isset($products['images'])): ?>
                                        <img src="assets/img/fruits/<?= htmlspecialchars($products['images']) ?>">
                                    <?php else: ?>
                                        <img src="/assets/img/public/no-image.png" alt="Pas d'image disponible">
                                    <?php endif; ?>
                                <?php endif; ?>
                                <?php if (($products['category']) === 'Légumes'): ?>
                                    <?php if (isset($products['images'])): ?>
                                        <img src="assets/img/vegetables/<?= htmlspecialchars($products['images']) ?>">
                                    <?php else: ?>
                                        <img src="/assets/img/public/no-image.png" alt="Pas d'image disponible">
                                    <?php endif; ?>
                                <?php endif; ?>
                                <p><?= htmlspecialchars($products['name']) ?></p>
                                <p><?= $productPrice = htmlspecialchars($products['price']) * ($order['quantity-input']) ?>€</p>
                                <?php $totalprice += $productPrice ?>
                                <div class="quantity-container">
                                    <input type="button" class="quantity-btn" value="-" onclick="this.nextElementSibling.stepDown()">
                                    <input type="number" class="quantity-input" value="<?= ($order['quantity-input']) ?>" min="1">
                                    <input type="button" class="quantity-btn" value="+" onclick="this.previousElementSibling.stepUp()">
                                </div>

                                <button class="delete_btn">DELETE</button>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            <?php else: ?>
                <li>Vous n'avez pas encore pris de délicieux fruits de EXO village ?</li>
            <?php endif; ?>
        </ul>
        <div class="pay">
            <form method="post">
                <h2><?= $totalprice ?>€</h2>
                
                <!-- <input type="hidden" name="order_list" value="<?php  ?>"> -->
              
                <button type="submit" class="buy">Acheter</button>
            </form>
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
            <li>
                <p>DATE</p>
                <p>PRICE</p>
                <p>ORDER ID</p><button class="delete_btn">DELETE</button>
            </li>
            <li>
                <p>DATE</p>
                <p>PRICE</p>
                <p>ORDER ID</p><button class="delete_btn">DELETE</button>
            </li>
            <li>
                <p>DATE</p>
                <p>PRICE</p>
                <p>ORDER ID</p><button class="delete_btn">DELETE</button>
            </li>
        </ul>
    </div>
</div>