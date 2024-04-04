<?php
ini_set('error_reporting', E_ALL);
ini_set( 'display_errors', 1 );
session_start();
if (!isset($_SESSION["isloggedin"])) {
    header("Location: Login.php");
}

require_once 'Database_connection.php';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST["title"];    
    $description = $_POST["description"];
    $user = $_SESSION['user_id'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wth=device-wth, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <script src="style.js"></script>
    <title>Leave a review - GWSC</title>
</head>
<body>
<header>
<?php
    require_once 'Navigation-bar.php'
    ?>
</header>
	<div class="review_box">
    <h2>Leave a Review</h2>
    <?php
        $query = "INSERT INTO user_reviews (Title, Description, UserID, Date) VALUES (?, ?, ?, CURRENT_TIMESTAMP)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sss", $title, $description, $user);
        if ($stmt->execute()) {
            echo "<p class='pass'>Successfully Posted Review</p>";
        }
        $stmt->close();
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <p class="review_titles"><strong>Give your review a title</strong></p>
        <input type="text" placeholder="What's important for people to know?" class="review_entry" name="title" required>
        <p class="review_titles"><strong>Tell us more about your experience</strong></p>                
        <textarea  placeholder="Tell us about your experience.  What made your experience great? What did you like or dislike? What can we do to improve?" class="review_entry_desc" name="description" required></textarea><br><br>
        <button class="leave_review_btn">Submit your Review</button><br><br>
        <hr class="line-thing3"><br>
        <a class="all_review_link" href='Reviews.php'>View all Reviews</a>
    </form>
	</div>  
    <footer>
    <?php
        require_once 'Footer.php'
    ?>
</footer>
</body>
</html>