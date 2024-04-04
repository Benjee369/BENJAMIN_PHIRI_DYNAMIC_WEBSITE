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
    <title>Pitch Types & Availability - GWSC</title>
</head>
<body>
<header>
    <?php
    require_once 'Navigation-bar.php'
    ?>
</header>
<main>
<h1 class="feat_title">Pitch Types & Availability</h1>
<h4 id="sub_info">Discover the perfect camping experience with a variety of pitch types. <br>Check real-time availability and secure your spot.</h4>
<?php
 if (isset($_SESSION['user_id'])) {
    echo'<div class="pitch_form">
    <form action="Available_pitch.php" method="post">
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

    </select>
    <h3>Camping Site</h3>
    <select name="Site" class="pitch_field">
    <option value="Moab">Moab</option>
    <option value="Mangochi">Mangochi</option>
    </select><br><br>
    <input id="pitch_submit" type="submit" value="Search">
    </form>
    </div>
   ';
 } else {
     echo '<div id="login_before">
     <p>Please Login before Viewing Pitch Types And Their Availability</p>
     <a class="before_login" href="Captcha_verification.php">Login</a>
     <hr>
     <p>Dont Have an Account? <a class="before_signup" href="Create_account.php">Sign Up</a></p>
     ';
 }
?>
</div>
</main>
<footer>
<?php
require_once'Footer.php'
?>
</footer>
</body>
</html>