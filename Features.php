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
    <link href="style.css" rel="stylesheet">
    <script src="style.js"></script>
    <title>Features - GWSC</title>
</head>
<body>
<header>
    <?php
	require_once 'Navigation-bar.php';
	?>
</header>
<div class="main_features">
    <main id="main_features_1" class="col-10" >
        <div class="moab">
            <h1 class="feat_title">Features</h1>
            <h4 id="sub_info">Delve into the amenities and features our site's have to offer.<br> Whether it's modern facilities, recreational areas, or dining options, learn about the comforts that await during your stay.</h4>
            <h2 id="features_sub_info">Moab & MAngochi Sites</h2>
            <h3 id="features_sub_info">Some of the On site Amenities and Recreational Activities</h3>
            <div class="rowF">
                <div class="col-6">
                    <img src="all_images/features/internet.jpg" alt="Internet">
                    <div id="img_info_inter">
                        <div class="feat_text">
                            <h2>Internet Access</h2>
                            <p>Stay connected with high-speed Wi-Fi, even in the wild.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <img src="all_images/features/fire.png" alt="Camp Fire">
                    <div id="img_info_fire">
                        <div class="feat_text">       
                            <h2>Camp Fires</h2>
                            <p>Cozy evenings by the campfire, under the starry sky.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rowF">
                <div class="col-6">
                    <img src="all_images/features/hiking.png" alt="Hiking">
                    <div id="img_info_hiki">
                        <div class="feat_text">       
                            <h2>Hiking</h2>
                            <p>Trek scenic trails, discover nature's hidden wonders on foot.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <img src="all_images/features/biking.png" alt="Biking">
                    <div id="img_info_fish">
                        <div class="feat_text">       
                            <h2>Mountain Biking</h2>
                            <p>Peddle through scenic mountains.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    

       <div class="mangochi"> 
            <div class="rowF">
                <div class="col-6">
                    <img src="all_images/features/parking.jpg" alt="Parking">
                    <div id="img_info_park">
                        <div class="feat_text">
                            <h2>Parking Availability</h2>
                            <p>Hassle-free parking, so you can focus on your adventure.</p>
                        </div>               
                    </div>
                </div>
                <div class="col-6">
                    <img src="all_images/features/shower.jpg" alt="Shower">
                    <div id="img_info_show">
                        <div class="feat_text">
                            <h2>Shower</h2>
                            <p>Freshen up conveniently with on-site showers.</p>
                        </div>      
                    </div>
                </div>
            </div>
            <div class="rowF">
                <div class="col-6">
                    <img src="all_images/features/swimming.jpg" alt="Swimming">
                    <div id="img_info_swim">
                        <div class="feat_text">       
                            <h2>Swimming</h2>
                            <p>Dive into pristine waters, nature's refreshing embrace.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <img src="all_images/features/kayaking.jpg" alt="Kayaking">
                    <div id="img_info_kaya">
                        <div class="feat_text">       
                            <h2>Kayaking</h2>
                            <p>Paddle through scenic waters, an adventure on every stroke.</p>
                        </div>
                    </div>
                </div>
            </div>
       </div>

    </main>
    <main id="wearable_features" class="col-2" >
        <h3 class="feat_title">Wearable Technology Categories</h3>
        <div class="wear">
           <img src="all_images/features/earbud.png" alt="Earbud">
           <p><strong>Smart Earbuds</strong> to listen to your favorite tracks on the go!</p>
        </div>
        <div class="wear">
           <img src="all_images/features/watch.png" alt="Watch">
           <p><strong>Smart watch</strong> To keep track of all your fitness goals.</p>
        </div>
        <div class="wear">
           <img src="all_images/features/glasses.png" alt="Glasses">
           <p><strong>Smart Glasses</strong> to provide more information about the sorrounding.</p>
        </div>
        <div class="wear">
           <img src="all_images/features/shoe.png" alt="Shoe">
           <p><strong>Smart Shoes</strong> to keep track all all the steps taken and the journey travelled.</p>
        </div>
        <div class="wear">
           <img src="all_images/features/jacket.png" alt="Jacket">
           <p><strong>Smart Jacket</strong> to keep the body Cool or Warm at anytime.</p>
        </div>
    </main>
</div>
<footer>
    <?php
    require_once 'Footer.php';
    ?>
</footer>
</body>
</html>