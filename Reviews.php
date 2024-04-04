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
    <link href="style.css" rel="stylesheet" type="text/css"/>
	<script src="style.js"></script>
    <title>Reviews - GWSC</title>
</head>
<body>
<header>
    <?php
	require_once 'Navigation-bar.php';
	?>
</header>
<main>
  <h1 class="feat_title">Customer Reviews</h1>
    <h4 id="sub_info">Hear from fellow campers and travelers. Read firsthand experiences and opinions in our customer reviews. <br>Get valuable insights to enhance your trip and make the most of your time with us.</h4>
    <?php
 if (isset($_SESSION['user_id'])) {
    echo'<a class="review_btn" href="Leave_Review.php">Leave a Review</a>
   ';
 } else {
     echo '<div id="login_review">
     <p>Please Login before Leaving a Review</p>
     <a class="before_login" href="Captcha_verification.php">Login</a>
     <hr class=line-thing3>
     <p>Dont Have an Account? <a class="before_signup" href="Create_account.php">Sign Up</a></p>
     </div>
     ';
 }
?>
    <div class="row">
            <?php
require_once 'Database_connection.php';

            $query = "SELECT
                  user_reviews.ID,
                  user_reviews.Title,
                  user_reviews.Description,           
                  user_reviews.Date,
                  user_details.Email_Address
              FROM user_reviews
              JOIN user_details ON user_reviews.UserID = user_details.ID ORDER BY user_reviews.Date DESC";

            $stmt = $conn->prepare($query);
            $stmt->execute();

            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $user_reviews = $result->fetch_all(MYSQLI_ASSOC);        
                echo '<div class="col-12">';             
                foreach ($user_reviews as $user_review) {
                    echo '<div class="review_bod">';
                    echo '<div class="review">';
                    echo '<div class="review_details">';
                    echo '<h2>' . $user_review['Email_Address']. '</h2>';
                    echo '<p>' . $user_review['Date'] . '</p>';
                    echo '</div>';
                    echo '<hr class="line-thing4">';
                    echo '<h4>' . $user_review['Title'] . '</h4>';
                    echo '<p class="review_desc">' . $user_review['Description']  . '</p>'; 
                    echo '<hr class="line-thing4">';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<p class="no_review">No Reviews available at the moment,<br>
                Be the first To leave a Review.</p>';
            }
            $stmt->close();
            $conn->close();            
            ?>
    </div>
</main>
<footer>
<?php
require_once 'Footer.php';
?>
</footer>
</body>
</html>