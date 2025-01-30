<?php

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>

<body>
    <?php
    require_once("./assets/components/header.php");

    require_once("./core/router.php");
    $router =new Router();
    $router->redirect();

    require_once("./assets/components/footer.php");
    
    ?>
</body>

</html>