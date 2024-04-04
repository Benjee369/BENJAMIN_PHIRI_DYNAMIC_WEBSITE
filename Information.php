<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="style.js"></script>
    <title>Information - GWSC</title>
</head>
<body>
<header>
    <?php
    require_once 'Navigation-bar.php';
    ?>
</header>
<main class="Information_content" >
<h1 class="feat_title">Information</h1>
<h4>Here are some of our pages  that my be of interest to you</h4>
<div class="Information_row">
    <h2>Features</h2>
    <div class="col-4">
        <img src="all_images/features/fishing.jpg" alt="Fishing" >
        <p>Cast a line, reel in relaxation, and connect with nature.</p>
    </div>
    <div class="col-4">
        <img src="all_images/features/hiking.png" alt="Hiking" >
        <p>Trek scenic trails, discover nature's hidden wonders on foot.</p>
    </div>
    <div class="col-4">
        <img src="all_images/features/parking.jpg" alt="Parking" >
        <p>Hassle-free parking, so you can focus on your adventure.</p>
    </div>
    <h4>For <a class="information_link" href="Features.php">more Features...</a></h4>
</div>

<div class="Information_row">
    <h2>Local Attractions</h2>
    <div class="col-4">
        <img src="all_images/features/mulanje.jpg" alt="Mulanje" >
        <p>Explore the enchanting Mulanje Mountain, an island in the sky....</p>
    </div>
    <div class="col-4">
        <img src="all_images/features/geyser.jpg" alt="Geyser">
        <p>Behold the Geyser Spectacle, a mesmerizing natural wonder. Watch as.....</p>
    </div>
    <div class="col-4">
        <img src="all_images/features/waterfall.jpeg" alt="Waterfall" >
        <p>Marvel at the Zambezi Waterfall, a breathtaking cascade surrounded by....</p>
    </div>
    <p>For <a class="information_link" href="Local_Attractions.php">more local attractions...</a></p>
</div>
</main>
<footer>
    <?php
    require_once 'Footer.php';
    ?>
</footer>
</body>
</html>