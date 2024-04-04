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
    <title>Available Pitches - GWSC</title>
</head>
<body>
<header>
    <?php
	require_once 'Navigation-bar.php';
	?>
</header>
<main>
    <h1 class="feat_title">Available Pitches</h1>
    <div class="row">
            <?php
            require_once 'Database_connection.php';
            $Site = $_POST["Site"];
            $Pitch_Type = $_POST["PitchType"];

            $query = "SELECT
              ID,
              Pitch_Type,
              Details,
              Capacity,
              Site
          FROM pitches 
          WHERE Pitch_Type = '$Pitch_Type' AND Site = '$Site'";

            $stmt = $conn->prepare($query);
            $stmt->execute();

            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $pitchs = $result->fetch_all(MYSQLI_ASSOC);            
                foreach ($pitchs as $pitch) {
                    echo '<div class="pitch_bod">
                            <div class="pitches">
                            <h2>' . $pitch['Site']. '</h2>
                            <p>' . $pitch['Pitch_Type'] . '</p>
                            <p>'.$pitch['Details'].'</p>
                            <hr>
                            <p><strong>Capacity: '.$pitch['Capacity'].'</strong></p>
                            </div>
                            <div id="book">
                            <a href="Booking.php">Book now</a>
                            </div>
                            
                          </div>';
                }
            }
            else {
                echo '<p class="no_review">No Pitches Found for the Selected Site</p>';
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
