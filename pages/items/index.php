<?php
if (!defined('BASE_PATH')) {
    define('BASE_PATH', __DIR__);
}
require_once BASE_PATH . '/vendor/autoload.php';
require_once BASE_PATH . '/utils/htmlEscape.utils.php';
require_once BASE_PATH . '/vendor/autoload.php';
require_once BASE_PATH . '/utils/greeting.utils.php';
require_once BASE_PATH . '/handlers/items.handler.php';

$greeting = getGreeting();
$items = getAllItems();
$categories = ['clothing', 'plushie', 'bags'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buttoncone</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="icon" type="image/x-icon" href="./assets/img/buttonconeFav.png">
</head>
<body>
    <!-- Navigation Bar -->
    <?php require_once BASE_PATH . '/components/templates/nav.component.php'; ?>


    <!-- Hero Section -->
    <section class="hero-section">
         <div class="scallop-box">
            <div class="scallop-container">
               <div class="greeting-block">
                  <h2 class="text-center greeting"><?= $greeting ?></h2>
               </div>
            <h3 class="hero-txt">Check out our collection</h3>

            <!-- Filter Buttons -->
            <div class="btn-group mb-5" role="group">
            <a href="#clothing" class="btn item-btn clothing-btn">Clothing</a>
            <a href="#plushie" class="btn item-btn plushie-btn">Plushie</a>
            <a href="#bags" class="btn item-btn bags-btn">Bags</a>
            </div>
            </div>
         </div>
      </section>


    <!-- Footer -->
    <?php require_once BASE_PATH . '/components/templates/footer.component.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="./assets/js/script.js"></script>
</body>
</html>