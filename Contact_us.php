<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
require_once 'Database_connection.php';
$sent_success = $sent_fail = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {  
    $description = $_POST["description"];
    $user = $_SESSION['user_id'];

    $query = "INSERT INTO contact_us (Description, UserID, Date) VALUES (?, ?, CURRENT_TIMESTAMP)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $description, $user);  
    if ($stmt->execute()) {
        $sent_success = "Your Message has been received";
    } else {
        $sent_fail = "Error: " . $stmt->error;
    }
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us - GWSC</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <script src="style.js"></script>
</head>
<body>
<header>
    <?php
    require_once 'Navigation-bar.php'
    ?>
</header>
<main>
    <?php
    if (isset($_SESSION['user_id'])) {
    ?>
    <div class="row1">
        <div class="contact_us_container">
            <div class="side-img6">
                <img src="all_images/features/side-img5.png" alt="Customer Service">
            </div>
            <div class="contact_right">
                <h3 class="create-head">Contact Us</h3>
                <form action="" method="POST">
                    <?php
                    if (isset($sent_success)) {
                        echo '<p class="pass">' . $sent_success . '</p>';
                    }
                    if (isset($sent_fail)) {
                        echo '<p class="wrong_details">' . $sent_fail . '</p>';
                    }
                    ?>
                    <br>
                    <textarea id="description" placeholder="Send Message" class="entry" name="description" required="required"></textarea><br>
                    <input class="contact_us_btn" type="submit" value="Submit" /><br><br>
                    <hr>
                    <div class="policy">
                        <a class="create_log_btn" href="Privacy_policy.php">Privacy Policy</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    } else {
    ?>
    <div id="login_before">
        <p>Please Login before Accessing Contact Us</p>
        <a class="before_login" href="Captcha_verification.php">Login</a>
        <hr>
        <p>Dont Have an Account? <a class="before_signup" href="Create_account.php">Sign Up</a></p>
    </div>
    <?php
    }
    ?>
</main>
<footer>
    <?php
    require_once'Footer.php'
    ?>
</footer>
</body> 
</html>
