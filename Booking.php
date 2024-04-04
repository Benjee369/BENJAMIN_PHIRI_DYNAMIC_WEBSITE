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
?>
</header>
<main>
    <h1 class="feat_title">Book a Location</h1>
    <div class="box_box">
        <form class="booking" >
            <h3>Camping Site</h3>
            <select name="Site" class="pitch_field">
            <option value="Moab">Moab</option>
            <option value="Mangochi">Mangochi</option>
            </select><br>
            <h3>Select Pitch Type</h3>
            <select name="PitchType" class="pitch_field">
            <option value="Family Pitch">Family Pitch</option>
            <option value="Waterside Pitch">Riverside Pitch</option>
            <option value="Forest Pitch">Forest Pitch</option>
            <option value="Group Pitch">Group Pitch</option>
            <option value="Pet-Friendly Pitch">Pet-Friendly Pitch</option>
            <option value="Glamping Pitch">Glamping Pitch</option>
            <option value="Motorhome Pitch">Motorhome Pitch</option>
            <option value="Eco-Friendly Pitch">Eco-Friendly Pitch</option>
            </select><br>
            <h3>Book from</h3>
            <input type="date" class="date">
            <h3>Book Till</h3>
            <input type="date" class="date"><br><br>
            <button class="leave_review_btn">Book Now</button><br><br>            
        </form>
    </div> 
</main>
<footer>
<?php
require_once'Footer.php'
?>
</footer>
</body>
</html>