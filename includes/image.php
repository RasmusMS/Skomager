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

//$sqlshoe = "SELECT `id` FROM `shoesize`;";
//$result = $con->query($sqlshoe);
//$amountOfSizes = $result->num_rows;
//$arr[] = $result;
//$arrlength = count($arr);
//$size = array();
//for($e = 0; $e < $arrlength; $e++){
//    array_push($size, $arr[$e]);
//}
//$amountOfUsers = 0;

$sql = $con->query("SELECT COUNT(shoesize.size) AS num FROM shoesize;");
$amountOfSizes = (int)mysqli_fetch_assoc($sql)["num"];
$x1 = 40;
$x2 = 90;
$ka = 22;
//var_dump($amountOfSizes);

for($k = 1; $k < ($amountOfSizes + 1); $k++){
    usersPerSize($ka, $x1, $x2, $con, $black, $red, $img);
    $x1 += 70;
    $x2 += 70;
    $ka++;
}

function usersPerSize($k, $x1, $x2, $con, $black, $red, $img){
    $query = $con->query("SELECT COUNT(user1.shoesize_id) AS num FROM user1 WHERE LEFT (user1.shoesize_id, 2) = ".$k);
//    var_dump($query);
    $UsersPerSize = mysqli_fetch_assoc($query)["num"];
    $UsersPerSize++;

    imagefilledrectangle($img, $x1, 320, $x2, 320 - ($UsersPerSize * 35), $red);
    imagerectangle($img, $x1, 320, $x2, 320 - ($UsersPerSize * 35), $black);
}

//while($row = $result->fetch_assoc()) {
//    array_push($size, $row['id']);
//}
//
//for($i = 0; $i < $amountOfSizes; $i++){
//    $please = $size[$i];
//    $query = "SELECT COUNT(user1.shoesize_id) AS num FROM user1 WHERE user1.shoesize_id = '$please'";
//    $UsersPerSize = mysqli_fetch_assoc($query)["num"];
//
//    imagefilledrectangle($img, $x1, 320, $x2, 320 - ($UsersPerSize * 35), $red);
//    imagerectangle($img, $x1, 320, $x2, 320 - ($UsersPerSize * 35), $black);
//    $x1+70;
//    $x2+70;
//}

// Draw x-axis
imageline($img, 20, 320, 320, 320, $black);

// Draw y-axis
imageline($img, 20, 320, 20, 320 - (8 * 35) - 20, $black);

// Define output header
header('Content-Type: image/png');
//
// Output the png image
imagepng($img);

// Destroy GD image
imagedestroy($img);