<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div>
    <?php

    $emailTo = "jakobtottrup@gmail.com";
    $subject = "Hej Ander Thrane";
    $body = "This is the body of the email.";
    $headers = "From: Jakob Tøttrup";

    // ============== Sends 10 emails ========== //
    //    for ($i=0;$i<=10;$i++) {
    //        if (mail($emailTo, $subject, $body, $headers)) {
    //
    //            echo "Mail sent successfully!";
    //
    //        } else {
    //
    //            echo "Mail not sent!";
    //
    //        }
    //    }


    ?>
    <?php

    $names = array("Fred", "Jakob", "Bob");
    if ($_POST["submit"]) {

        if ($_POST["name"]) {

            foreach ($names as $name) {
                if ($_POST["name"]==$name) {
                    echo "Hello $name";
                    $knowYou = 1;
                }

           }
            if (!$knowYou) {
                echo "I don't know you";
            }

        } else {

            echo "Please enter your name";

        }

    }


    ?>
    <form method="post">
        <label for="name">Name</label>
        <input name="name" type="text"/>
        <input type="submit" name="submit" value="Submit Your Name"/>
    </form>
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