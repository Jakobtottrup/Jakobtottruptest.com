<?php

//============== MYSQL VIDS =================== //


//$link = mysqli_connect("localhost", "cl14-jakobt", "nER!KtTkH", "cl14-jakobt");
//
//if (mysqli_connect_error()) {
//    die("Couldn't connect to database."); //die command kills script. any code after the die command will not run.
//}
//
////INSERT COMMAND
////$query = "INSERT INTO `users`(`name`, `email`, `password`) VALUES('Beth','beth@test.com', 'unsecurepw')";
////$query = "UPDATE `users` SET `email`='Bob@test.com' WHERE `id`='2' LIMIT 1";
//$query = "UPDATE `users` SET `name`='Bob Bobbsen O\'neil' WHERE `id`='2' LIMIT 1";
//mysqli_query($link, $query);
//
//$name = "Bob Bobbsen O'neil";
//
//$query = "SELECT `name` FROM `users` WHERE name='".mysqli_real_escape_string($link, $name)."'";
//if ($result = mysqli_query($link, $query)) {
//    echo mysqli_num_rows($result);
////    echo "it worked!";
//    while ($row = mysqli_fetch_array($result)) {
//        print_r($row);
//    }
//
//} else{
//    echo "it failed!";
//}
//

//============ Cookies =============== //
//setcookie("id", "123", time() - 3600);
//setcookie("id", "1234", time()+60*60*24);
//echo $_COOKIE["id"];



//============= Password security ========== //


echo md5("password"); //will produce a hash-code that can be reverse-engineered to find the actual password at crackstation.net.

$salt = "ækljfoijadfhiu4h32uihdflsf89G/(HQ#"; //security variable that should not be available to anyone. "salts" the pw.
echo(" ");
echo md5($salt."password");
echo(" ");
echo md5(md5($row['id'])."password"); // instead of using same variable for everyone, use one that is unique to the user.

?>