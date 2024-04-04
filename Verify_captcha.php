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
    <?php
        $userCaptcha = strtoupper($_POST['captcha_input']);
        $storedCaptcha = strtoupper($_SESSION['captcha_code']);

        if ($userCaptcha === $storedCaptcha) {
            header('Location: login.php');
            exit();
        } else {
            echo "<div class='successfully_created'>
            <p class='wrong_details'>CAPTCHA Verification Failed</p>
            <a href='Captcha_verification.php'><strong>Please click here to try again</strong></a>
            </div>";
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