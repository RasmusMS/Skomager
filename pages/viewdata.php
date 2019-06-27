<?php
include_once 'handlers/getData.php';
?>

<div class="container">
    <div class="row">
        <div class="column pl-2 pr-2" style="background-color:#aaa;">
            <h3>Fornavn</h3>
            <?php echo $fname; ?>
        </div>
        <div class="column pl-2 pr-2" style="background-color:#bbb;">
            <h3>Efternavn</h3>
            <?php echo $lname; ?>
        </div>
        <div class="column pl-2 pr-2" style="background-color:#aaa;">
            <h3>Email</h3>
            <?php echo $mail; ?>
        </div>
        <div class="column pl-2 pr-2" style="background-color:#bbb;">
            <h3>Skostørrelse</h3>
            <?php echo $ssize; ?>
        </div>
    </div>
</div>
