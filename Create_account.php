<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="style.js"></script>
    <title>Create Account - GWSC</title>
</head>
<body>
<header>
    <?php
        require_once 'Navigation-bar.php'
    ?>
</header>
    <div class="row1">
        <div class="create_account_form">
            <div class="side-img6">
                <img src="all_images/features/side-img4.png" alt="Greating Image">
            </div>        

            <div class="create_right">
                <h3 class="create-head">Sign Up</h3>
                <?php
                    if(isset($_SESSION['Email_address_taken'])){
                        if($_SESSION['Email_address_taken']){
                        echo "<p class='wrong_details'>This Email Address is already taken.<br> Please try a different Email Address</p>";
                        }
                    }
                    if(isset($_SESSION['password_not_strong'])){
                        if($_SESSION['password_not_strong']){
                            echo "<p class='wrong_details'>Password must be at least 6 characters long and contain both numbers and letters.</p>";
                        }
                    }
                ?>
                <form action="Add_account.php" method="POST">
                    <input type="text" name="firstname" placeholder='First Name' class="create-entry" required="required" />
                    <input type="text" name="lastname" placeholder='Last Name'  class="create-entry" required="required" />
                    <input type="email" name="emailaddress" placeholder='Email Address'  class="create-entry" required="required" />
                    <input type="password" name="userpassword" placeholder='Password'  class="create-entry" required="required" />
                    <input class="create_btn" type="submit" value="Create Account" /><br><br>
                    <hr class="line-thing2">
                    <p>Already Have an Account? <a class="create_log_btn" href='Captcha_verification.php'>Login</a></p>
                </form>
            </div>

        </div>    
    </div>
    <?php
        unset($_SESSION['Email_address_taken']);
        unset($_SESSION['password_not_strong']);
    ?>
    </div>
    <footer>
<?php
    require_once 'Footer.php'
?>
</footer>
</body>
</html>
