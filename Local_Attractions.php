<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="style.js"></script>
    <title>Local Attractions - GWSC</title>
</head>
<body>
<header>
<?php
    require_once 'Navigation-bar.php'
    ?>
</header>
    <h1 class="feat_title">Local Attractions</h1>
    <h4 id="sub_info">Explore the surrounding area with our guide to local attractions.<br> From scenic trails to cultural landmarks, find out what makes your destination special and plan your off-site adventures.</h4>
    <div class="rowL">
        <div class="col-6">
            <img src="all_images/features/mulanje.jpg" alt="Mulanje Mountain">
        </div>
        <div class="col-6">
            <h2>Mulanje Mountain</h2>
            <p>Explore the enchanting Mulanje Mountain, an island in the sky. With its rugged granite peaks and lush forests, it's a haven for trekkers and nature lovers. Discover unique flora, panoramic vistas, and a thrilling adventure in this captivating wilderness.
            Geyser Spectacle</p>
        </div>
    </div>
    <div class="rowL">
        <div class="col-6">
            <h2>Geyser Spectacle</h2>
            <p>Behold the Geyser Spectacle, a mesmerizing natural wonder. Watch as scalding water and steam erupt from the Earth's depths, showcasing the planet's geological forces. It's a fascinating display of nature's power and beauty.</p>
        </div>
        <div class="col-6">
            <img src="all_images/features/geyser.jpg" alt="Geyser" >
        </div>
    </div>
    <div class="rowL">
        <div class="col-6">
            <img src="all_images/features/tiger.jpg" alt="Tiger" >
        </div>
        <div class="col-6">
            <h2>Tiger Wildlife Encounter</h2>
            <p>Embark on a thrilling Tiger Wildlife Encounter in their untamed habitat. Get close to these magnificent creatures, learning about their behavior and the importance of conservation. It's a captivating journey into the world of wildlife.
            Charming Local Villages</p>
        </div>
    </div>
    <div class="rowL">
        <div class="col-6">
            <h2> Zambezi Waterfall</h2>
            <p>Marvel at the Zambezi Waterfall, a breathtaking cascade surrounded by lush greenery. The Zambezi River's raw energy creates this awe-inspiring spectacle. Experience the sheer force and unspoiled beauty of this natural wonder.</p>
        </div>
        <div class="col-6">
            <img src="all_images/features/waterfall.jpeg" alt="Waterfall" >
        </div>
    </div>
    <div class="rowL">
        <div class="col-12">
            <h2>Charming Local Villages</h2>
            <p>Immerse yourself in the authentic charm of local villages. Interact with welcoming locals, savor traditional cuisine, and discover centuries-old traditions. Experience the genuine warmth and culture of the communities that call this place home.</p>
        </div>
    </div>
    <footer>
<?php
require_once'Footer.php'
?>
</footer>
</body>
</html>