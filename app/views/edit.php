<div class="edit">

    <form action="index.php?page=edit&id=<?= $product['id_product']; ?>" method="POST" class="edit_product">
        <label>Nom de produit : <?= htmlspecialchars($product['name']) ?></label>
        <input type="text" placeholder="Nouveaux Nom" name="name">
        <label>Prix : <?= htmlspecialchars($product['price']) ?> €</label>
        <input type="text" placeholder="Nouveaux Prix" name="price">
        <label>Categorie : <?= htmlspecialchars($product['category']) ?></label>
        <input type="text" placeholder="Nouvelle Categorie" name="category'">
        <label>Description : <?= htmlspecialchars($product['content']) ?></label>
        <input type="text" placeholder="Nouvelle Description" name="content">
        <button type="submit">Envoyer</button>

    </form>
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


</div>