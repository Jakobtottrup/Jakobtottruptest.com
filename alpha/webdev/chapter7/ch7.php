<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div>
    <?php

    $emailTo = "hvt@novonordisk.com";
    $subject = "I hope this works";
    $body = "This is the body of the email.";
    $headers = "From: Jakob Tøttrup";
    mail($emailTo, $subject, $body, $headers);


    ?>
</div>
</body>
</html>
<?php
///**
// * Created by PhpStorm.
// * User: Jakob
// * Date: 12-07-2015
// * Time: 23:02
// */