<?php
require_once 'includes/dbConnection.php';
$mysqli = db_connect();

$fname = "";
$lname = "";
$mail = "";
$ssize = "";
$sql = "SELECT `firstname`, `lastname`, `email`, `size` FROM user INNER JOIN `shoesize` ON user.shoesize_id = shoesize.id";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
$firstname = $row['firstname'];
$lastname = $row['lastname'];
$email = $row['email'];
$shoesize = $row['size'];

//$fname .= "<p>$firstname</p>";
//$lname .= "<p>$lastname</p>";
//$mail .= "<p>$email</p>";
//$ssize .= "<p>$shoesize</p>";
    echo "firstname";
}

echo $fname[1];
?>
<!--<div class="container">-->
<!--    <div class="row">-->
<!--        <div class="column" style="background-color:#aaa;">-->
<!--            <h2>Column 1</h2>-->
<!--            --><?php //echo $fname[1]; ?>
<!--        </div>-->
<!--        <div class="column" style="background-color:#bbb;">-->
<!--            <h2>Column 2</h2>-->
<!--            --><?php //echo $lname[1]; ?>
<!--        </div>-->
<!--        <div class="column" style="background-color:#ccc;">-->
<!--            <h2>Column 1</h2>-->
<!--            --><?php //echo $mail[1]; ?>
<!--        </div>-->
<!--        <div class="column" style="background-color:#ddd;">-->
<!--            <h2>Column 2</h2>-->
<!--            --><?php //echo $ssize[1]; ?>
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
