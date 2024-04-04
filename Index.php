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
    <title>Home - GWSC</title>
</head>
<body>
<header>
    <?php
    require_once 'Navigation-bar.php'
    ?><br>
    <div class="search">
        <form action="search.php" method="GET">
            <input type="text" name="query" placeholder="Search for pitches or locations...">
            <button type="submit">Search</button>
        </form>
    </div>
</header>
    <main>
        <div class="row01">
            <div class="col-10">
                <h1>Welcome to Global Wild Swimming and <br>Camping</h1>
            </div>
        </div>
            <h2 class="index_info_title" >Embrace nature's beauty at tranquil campsites and wild swim spots in stunning global destinations.
            </h2>
        <div class="row1">
            <div class="slideshow_container">
                <div class="slideshow">
                    <img src="all_images/features/slide1.png" alt="mpountain">
                    <img src="all_images/features/slide2.png" alt="swamp">
                    <img src="all_images/features/slide3.png" alt="sun over sea" >
                    <img src="all_images/features/slide4.png" alt="sun" >
                </div>
            </div>
        </div>
    </main>
<div class="map_row">
<h2 class="index_info_title" >We offer various scenic and eye catching environments</h2>
    <div class="col-6">
        <p>Moab Camp Reserve</p>
        <img src="all_images/features/moab.png" alt="Moab" >
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29890.193798913675!2d-109.58892504983405!3d38.574862050772474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8747e1e59ab82d8d%3A0xb32b17af1d5c42d!2sMoab%2C%20UT%2084532%2C%20USA!5e0!3m2!1sen!2smw!4v1694847350771!5m2!1sen!2smw" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="col-6">
        <p>Mangochi Wild Swimming </p>
        <img src="all_images/features/mangochi.png" alt="Mangochi" >
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12088.40252532453!2d35.255595492180014!3d-14.485195192754334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18dee236056b8695%3A0x6ba63f16fdf20d97!2sMangochi!5e0!3m2!1sen!2smw!4v1694847603962!5m2!1sen!2smw" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<section>
 <h2 class="index_info_title">Here are some outdoors related feeds we have</h2>
    <article class="rss_feed" >
    <?php
        $rss_feed_url = 'https://50campfires.com/feed';
        $xml = @simplexml_load_file($rss_feed_url);

        if ($xml !== false) {
            $counter = 0;
            foreach ($xml->channel->item as $item) {
                echo '<h4><a href="' . $item->link . '">' . $item->title . '</a></h4>';
                echo $item->pubDate;
                $counter++;
                if ($counter == 5) {;
                    break;
                }
            }
        } else {
            echo 'Failed to load the RSS feed.';
        }
    ?>
    </article>
</section>
<div class="view_count">
<?php
     $filePath = 'view-counter.txt';
     if (file_exists($filePath)) {
         $viewCount = (int) file_get_contents($filePath);
     } else {
         $viewCount = 0;
     }
     $viewCount++;
     file_put_contents($filePath, $viewCount);
     echo "<h3>" . $viewCount . " views</h3>";
     ?>
</div>
<footer>
<?php
require_once'Footer.php'
?>
</footer>
</body>
</html>