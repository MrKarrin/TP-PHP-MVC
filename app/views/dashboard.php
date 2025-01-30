<div class="dashboard">
    <h2>Produits</h2>
    <button class="add_btn">Ajouter</button>
    <ul>
        <?php foreach ($allproduct as $product): ?>
            <li>
                <?php if ($product['category'] === 'Fruits'): ?>
                    <img src="assets/img/fruits/<?= htmlspecialchars($product['images']) ?>">
                <?php endif; ?>
                <?php if (($product['category']) === 'Légumes'): ?>
                    <img src="assets/img/vegetables/<?= htmlspecialchars($product['images']) ?>">
                <?php endif; ?>
                <p><?= htmlspecialchars($product['name']) ?></p>
                <p><?= htmlspecialchars($product['price']) ?> €</p>
                <p><?= htmlspecialchars($product['category']) ?></p>
                <button class="edit_btn" onclick="window.location.href ='index.php?page=edit&id=<?= htmlspecialchars($product['id_product']) ?>'">edit</button>
                <button class="delete_btn" onclick="window.location.href = 'index.php?page=delete&id=<?= htmlspecialchars($product['id_product']) ?>'">Delete</button>
            </li>
        <?php endforeach; ?>

    </ul>
</div>