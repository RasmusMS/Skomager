<?php
require_once 'dbConnection.php';
$con = db_connect();

// Create GD Image
$img = imagecreatetruecolor(400, 350);

// Assign some
$black = imagecolorallocate($img, 0, 0, 0);
$white = imagecolorallocate($img, 255, 255, 255);
$red = imagecolorallocate($img, 255, 153, 153);

$font = './Roboto-Light.ttf';
$text = 0;
$size = 42;

// Set background colour to white
imagefill($img, 0, 0, $white);

$sql = $con->query("SELECT COUNT(shoesize.size) AS num FROM shoesize;");
$amountOfSizes = (int)mysqli_fetch_assoc($sql)["num"];
$x1 = 40;
$x2 = 90;
$ka = 23;
$number = 55;

for($k = 1; $k < ($amountOfSizes + 1); $k++){
    usersPerSize($ka, $x1, $x2, $con, $black, $red, $img, $number, $size++, $font);
    $x1 += 70;
    $x2 += 70;
    $ka++;
    $number += 70;
}

function usersPerSize($k, $x1, $x2, $con, $black, $red, $img, $number, $size, $font){
    $query = $con->query("SELECT COUNT(user1.shoesize_id) AS num FROM user1 WHERE user1.shoesize_id = ".$k);
//    var_dump($query);
    $UsersPerSize = mysqli_fetch_assoc($query)["num"];

    imagefilledrectangle($img, $x1, 320, $x2, 320 - ($UsersPerSize * 35), $red);
    imagerectangle($img, $x1, 320, $x2, 320 - ($UsersPerSize * 35), $black);
    imagettftext($img, 13, 0, $number, 340, $black, $font, ($size));
}


// Draw x-axis
$temp = 1;
for($i = 0; $i <= 8; $i++) {
    if($i < 1){
        $temp++;
    }
    imageline($img, 20, 390-(35*$temp), 400, 390-(35*$temp), $black);
    imagettftext($img, 13, 0, 3, 394-(35*$temp), $black, $font, ($text++)); //--------------
    $temp++;
}

// Draw y-axis
imageline($img, 20, 320, 20, 320 - (8 * 35) - 20, $black);

// Define output header
header('Content-Type: image/png');
//
// Output the png image
imagepng($img);

// Destroy GD image
imagedestroy($img);