<?php
require_once 'includes/dbConnection.php';
$mysqli = db_connect();

$i = 0;
//$fname = array();
//$lname = array();
//$mail = array();
//$ssize = array();
$sql = "SELECT `firstname`, `lastname`, `email`, `size` FROM user1 INNER JOIN `shoesize` ON user1.shoesize_id = shoesize.id";
$result = $mysqli->query($sql);
while($row = $result->fetch_assoc()) {
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $email = $row['email'];
    $shoesize = $row['size'];

    $fname .= "<p>$firstname</p>";
    $lname .= "<p>$lastname</p>";
    $mail .= "<p>$email</p>";
    $ssize .= "<p>$shoesize</p>";
}

