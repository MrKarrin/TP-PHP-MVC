<main>

    <article>

        <h2>Fruits</h2>

        <div class="product">
            <?php
            $filtered_fruits = array_values(array_filter($allproduct, function ($allproduct) {
                return $allproduct['category'] === 'Fruits';
            }));

            $first_fruits = array_slice($filtered_fruits, 0, 6);
            ?>
            <?php foreach ($first_fruits as $product): ?>
                <a href="">
                    <img src="assets/img/fruits/<?= htmlspecialchars($product['images']) ?>" alt="<?= htmlspecialchars($product['name']) ?>">
                </a>
            <?php endforeach; ?>
        </div>
    </article>


    <article>
        <h2>Fruits</h2>
        <div class="product">
            <?php
            $filtered_fruits = array_values(array_filter($allproduct, function ($allproduct) {
                return $allproduct['category'] === 'Fruits';
            }));


            $first_fruits = array_slice($filtered_fruits, 6, 16);
            ?>

            <?php foreach ($first_fruits as $product): ?>
                <a href="">
                    <img src="assets/img/fruits/<?= htmlspecialchars($product['images']) ?>" alt="<?= htmlspecialchars($product['name']) ?>">
                </a>
            <?php endforeach; ?>
        </div>

    </article>

    <article>

        <h2>Légumes</h2>
        <div class="product">
        <?php
            $filtered_fruits = array_values(array_filter($allproduct, function ($allproduct) {
                return $allproduct['category'] === 'Légumes';
            }));

            $first_fruits = array_slice($filtered_fruits, 0, 6);
            ?>
            <?php foreach ($first_fruits as $product): ?>
                <a href="">
                    <img src="assets/img/vegetables/<?= htmlspecialchars($product['images']) ?>" alt="<?= htmlspecialchars($product['name']) ?>">
                </a>
            <?php endforeach; ?>

        </div>
    </article>
</main>
<div class="slide">
    <h2>Légumes</h2>
    <div class="slide_product">

    <?php
            $filtered_fruits = array_values(array_filter($allproduct, function ($allproduct) {
                return $allproduct['category'] === 'Légumes';
            }));

            $first_fruits = array_slice($filtered_fruits, 6, 999);
            ?>
            <?php foreach ($first_fruits as $product): ?>
                <a href="">
                    <img src="assets/img/vegetables/<?= htmlspecialchars($product['images']) ?>" alt="<?= htmlspecialchars($product['name']) ?>">
                </a>
            <?php endforeach; ?>


    </div>

</div>