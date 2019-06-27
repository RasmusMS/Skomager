<?php
require_once '../includes/dbConnection.php';
$conn = db_connect();
$mysqli = db_connect();
$i = 0;
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$shoesize = $_POST['shoesize'];
$sql1 = "SELECT `id` FROM `shoesize` WHERE `size` = '$shoesize'";
$result = $conn->query($sql1);
$rowcount = $result->num_rows;

if($rowcount < 1){
    $sql2 = "INSERT INTO `shoesize` (`size`) VALUES ('$shoesize')";
    $conn->query($sql2);
}
$result = $conn->query($sql1);
$row = $result->fetch_assoc();
$id = (int) $row['id'];
$mainSQL = "INSERT INTO `user` (`firstname`, `lastname`, `email`, `shoesize_id`) VALUES (\"$firstname\", \"$lastname\",\"$email\" , '$id')";
$conn->query($mainSQL);
