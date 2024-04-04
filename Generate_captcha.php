<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

header('Content-Type: image/png');

$image = imagecreatetruecolor(150, 50);
$bgColor = imagecolorallocate($image, 255, 255, 255);
imagefill($image, 0, 0, $bgColor);

$captchaCode = $_SESSION['captcha_code'];

$textColor = imagecolorallocate($image, 0, 0, 0);
imagestring($image, 20, 30, 15, $captchaCode, $textColor);

imagepng($image);
imagedestroy($image);
?>