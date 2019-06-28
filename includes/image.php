<?php
require_once 'dbConnection.php';
$con = db_connect();

// Create GD Image
$img = imagecreatetruecolor(400, 350);

// Assign some
$black = imagecolorallocate($img, 0, 0, 0);
$white = imagecolorallocate($img, 255, 255, 255);
$red = imagecolorallocate($img, 255, 153, 153);

// Set background colour to white
imagefill($img, 0, 0, $white);

$sqlshoe = "SELECT `size` FROM `shoesize`;";

$result = $con->query($sqlshoe);
$amountOfSizes = $result->num_rows;
$x1 = 40;
$x2 = 90;
$amountOfUsers = 0;

for($i = 0; $i < $amountOfSizes; $i++){
    imagefilledrectangle($img, $x1, 320, $x2, 320 - (6 * 35), $red);
    imagerectangle($img, $x1, 320, $x2, 320 - (6 * 35), $black);
    $x1+70;
    $x2+70;
}

// Draw x-axis
imageline($img, 20, 320, 320, 320, $black);

// Draw y-axis
imageline($img, 20, 320, 20, 320 - (8 * 35) - 20, $black);

// Define output header
header('Content-Type: image/png');

// Output the png image
imagepng($img);

// Destroy GD image
imagedestroy($img);