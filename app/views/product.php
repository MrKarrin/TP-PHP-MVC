<div class="detail">
    <h1><?= htmlspecialchars($product['name']) ?></h1>
    <section class="pricing">
        <?php if ($product['category'] === 'Fruits'): ?>
            <?php if (isset($product['images'])): ?>
                <img src="assets/img/fruits/<?= htmlspecialchars($product['images']) ?>">
            <?php else: ?>
                <img src="/assets/img/public/no-image.png" alt="Pas d'image disponible">
            <?php endif; ?>
        <?php endif; ?>
        <?php if (($product['category']) === 'Légumes'): ?>
            <?php if (isset($product['images'])): ?>
                <img src="assets/img/vegetables/<?= htmlspecialchars($product['images']) ?>">
            <?php else: ?>
                <img src="/assets/img/public/no-image.png" alt="Pas d'image disponible">
            <?php endif; ?>
        <?php endif; ?>
        <div class="price">
            <h2><?= htmlspecialchars($product['price']) ?>€</h2>
            
            <form action="" method="post">
                <div class="quantity-container">
                    <input type="button" class="quantity-btn" value="-" onclick="this.nextElementSibling.stepDown()">
                    <input name="quantity-input" type="number" class="quantity-input" value="1" min="1">
                    <input type="button" class="quantity-btn" value="+" onclick="this.previousElementSibling.stepUp()">
                    <input name="id_product"type="hidden"value="<?=$product['id_product'] ?>">
                </div>
                <button class="add_cart" type="submit">Ajouter au panier</button>
            </form>

        </div>
    </section>
    <h2>Informations :</h2>
    <p><?= htmlspecialchars($product['content']) ?></p>

</div>
