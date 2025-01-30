<div class="edit">

        <form class="edit_product">
            <label>Nom de produit : <?= htmlspecialchars($product['name']) ?></label>
            <input type="text" placeholder="Nouveaux Nom">
            <label>Prix : <?= htmlspecialchars($product['price']) ?> €</label>
            <input type="text" placeholder="Nouveaux Prix">
            <label>Categorie : <?= htmlspecialchars($product['category']) ?></label>
            <input type="text" placeholder="Nouvelle Categorie">
            <label>Description : <?= htmlspecialchars($product['content']) ?></label>
            <input type="text" placeholder="Nouvelle Description">
            <button type="submit">Envoyer</button>

        </form>
        <?php if ($product['category'] === 'Fruits'): ?>
            <img src="assets/img/fruits/<?= htmlspecialchars($product['images']) ?>">
        <?php endif; ?>
        <?php if (($product['category']) === 'Légumes'): ?>
            <img src="assets/img/vegetables/<?= htmlspecialchars($product['images']) ?>">
        <?php endif; ?>

  
</div>