<style>
    img {
        max-height: 100px;
    }
</style>
<main>

    <article>

        <h2>Fruits</h2>

        <div class="product">
            <?php
            $first_fruits = array_slice($allproduct, 0, 6);
            foreach ($first_fruits as $product): ?>
                <?php if ($product['category'] == 'Fruits'): ?>
                  
                    <a href=""><img src="assets/img/fruits/<?= htmlspecialchars($product['images']) ?>" alt="<?= htmlspecialchars($product['name']) ?>"></a>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </article>


    <article>
        <h2>Fruits</h2>
        <?php
        $last_fruits = array_slice($allproduct, 6, 12);
        foreach ($last_fruits as $product): ?>
            <?php if ($product['category'] == 'Fruits'): ?>
                <a href=""><img src="assets/img/fruits/<?= htmlspecialchars($product['images']) ?>" alt="<?= htmlspecialchars($product['name']) ?>"></a>
            <?php endif; ?>
        <?php endforeach; ?>
        </div>

    </article>

    <article>

        <h2>Légumes</h2>
        <div class="product">
            <?php
            $first_vegetables = array_slice($allproduct($product['category']), 0, 20);
            foreach ($first_vegetables as $product): ?>
                <?php if ($product['category'] === 'Légumes'): ?>
                    <a href=""><img src="assets/img/vegetables/<?= htmlspecialchars($product['images']) ?>" alt="<?= htmlspecialchars($product['name']) ?>"></a>
                <?php endif; ?>
            <?php endforeach; ?>

        </div>
    </article>
</main>
<div class="slide">
    <h2>Légumes</h2>
    <div class="slide_product">

        <?php
        $first_vegetables = array_slice($allproduct, 6, 12);
        foreach ($first_vegetables as $product): ?>
            <?php if ($product['category'] === 'Légumes'): ?>
                <a href=""><img src="assets/img/vegetables/<?= htmlspecialchars($product['images']) ?>" alt="<?= htmlspecialchars($product['name']) ?>"></a>
            <?php endif; ?>
        <?php endforeach; ?>

    </div>

</div>