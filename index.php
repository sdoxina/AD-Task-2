<?php
define('BASE_PATH', __DIR__); // define BASE_PATH if not already defined
require_once BASE_PATH . '/vendor/autoload.php';
require_once BASE_PATH . '/utils/htmlEscape.utils.php';
?>


<?php
require_once './components/templates/nav.component.php';
require_once './components/templates/footer.component.php';
require_once './utils/greeting.utils.php';
require_once './handlers/quotes.handler.php';
require_once './handlers/imageList.handler.php';

$greeting = getGreeting();
$quote = getRandomQuote();
$images = getShowcaseImages();
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


    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <script src="./assets/js/script.js"></script>
</body>
</html>