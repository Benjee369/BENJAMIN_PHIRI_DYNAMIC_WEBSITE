<nav>
    <div class="col-1">
    <p class="main_title" ><a class="create_log_btn" href="Index.php">GWSC</a></p>
    </div>
    <div class="col-11">
        <div class="button-side">             
            <div class="nav-buttons">
                <?php
                    if (isset($_SESSION['user_id'])) {
                        echo '<a class="login" href="logout.php">Sign Out</a>';
                    } else {
                        echo '<a class="login" href="Captcha_verification.php">Login</a>';
                        echo '<a class="signup" href="Create_account.php">Sign Up</a>';
                    }
                ?>
                <a class="nav-link" href="Pitch_types_and_availability.php">Pitch Types & Availability</a>
                <a class="nav-link" href="Local_Attractions.php">Local Attractions</a>
                <a class="nav-link" href="Contact_us.php">Contact Us</a>
                <a class="nav-link" href="Features.php">Features</a>
                <a class="nav-link" href="Information.php">Information</a>
                <a class="nav-link" href="Reviews.php">Reviews</a>
                <a class="nav-link-home" href="Index.php">Home</a>     
            </div>
            <div class="burger-menu">
                <img src="all_images/features/burger.png">
            </div>
        </div>
    </div>
</nav>

