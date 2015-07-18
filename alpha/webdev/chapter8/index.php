<?php
$link = mysqli_connect("localhost", "cl14-jakobt", "nER!KtTkH", "cl14-jakobt");

if (mysqli_connect_error()) {
    die("Couldn't connect to database."); //die command kills script. any code after the die command will not run.
}

//INSERT COMMAND
//$query = "INSERT INTO `users`(`name`, `email`, `password`) VALUES('Beth','beth@test.com', 'unsecurepw')";
//$query = "UPDATE `users` SET `email`='Bob@test.com' WHERE `id`='2' LIMIT 1";
$query = "UPDATE `users` SET `name`='Bob Bobbsen O\'neil' WHERE `id`='2' LIMIT 1";
mysqli_query($link, $query);

$name = "Bob Bobbsen O'neil";

$query = "SELECT `name` FROM `users` WHERE name='".mysqli_real_escape_string($link, $name)."'";
if ($result = mysqli_query($link, $query)) {
    echo mysqli_num_rows($result);
//    echo "it worked!";
    while ($row = mysqli_fetch_array($result)) {
        print_r($row);
    }

} else{
    echo "it failed!";
}


?>
