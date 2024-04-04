<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
function generateCaptcha() {
    $captchaLength = 6;
    $captchaCode = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, $captchaLength);
    $_SESSION['captcha_code'] = $captchaCode;
}
generateCaptcha();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="style.js"></script>
    <title>CAPTCHA Verification - GWSC</title>
</head>
<body>
<header>
<?php
require_once 'Navigation-bar.php'
?>
</header>
    <div class="captcha">
    <h2>Please Verify CAPTCHA<br> before Logging In</h2>
    <form action="Verify_captcha.php" method="post">
        <img src="Generate_captcha.php" alt="CAPTCHA Image"><br><br>
        Enter the code shown above:<br>
        <input type="text" name="captcha_input" required><br><br>
        <input class="captcha_submit" type="submit" value="Submit">
    </form>
    </div>
    <footer>
<?php
require_once'Footer.php'
?>
</footer>
</body>
</html>