 <?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
if (!isset($_SESSION["login_attempts"])) {
    $_SESSION["login_attempts"] = 0;
}
if (!isset($_SESSION['login_failed'])) {
    $_SESSION['login_failed'] = false;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <script src="style.js"></script>
    <title>Login - GWSC</title>
</head>
<body>
    <header>
        <?php
        require_once 'Navigation-bar.php';
        ?>
    </header>
    <div class='row1'>
        <div class="login_container">
            <div class="side-img6">
                <img src="all_images/features/side-img6.png" alt="Welcome Back">
            </div>  
            <div class="log_box">
                <h3 class="create-head">Login</h3>
                <?php
                    if (isset($_SESSION['login_error_message'])) {
                    echo "<p class='wrong_details'>" . $_SESSION['login_error_message'] . "</p>";
                    unset($_SESSION['login_error_message']);
                    }           
                ?>
                <form action="Login_user.php" method="POST">
                    <input type="email" name="emailaddress" class="login_entry" placeholder="Email Address" required>
                    <input type="password" name="userpassword" class="login_entry" placeholder="Password" required><br>
                    <button id="loginButton" class="log_btn">Login</button><br><br>
                </form>
                <?php
                    if ($_SESSION["login_attempts"] > 600) {
                        $difference = time() - $_SESSION["locked"];
                        if ($difference > 1) {
                            unset($_SESSION["locked"]);
                            unset($_SESSION["login_attempts"]);
                        } else {
                            echo "<p class='wrong_details'>Please wait for 10 minutes. Then refresh the Page";
                            echo "</p>";
                            echo '<script>document.getElementById("loginButton").disabled = true;</script>';
                        }
                    }
                ?>
                <hr class="line-thing">
                <p>Don't have an Account?<a class="create_log_btn" href="Create_account.php"> Sign Up</a></p>
            </div>
        </div>
    </div>
    <?php 
    $_SESSION['login_failed'] = false;
    ?>
    <footer>
        <?php
        require_once 'Footer.php';
        ?>
    </footer>
</body>
</html>