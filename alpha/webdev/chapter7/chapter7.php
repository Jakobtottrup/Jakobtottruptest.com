<?php

// ========== Variables ============== //
//$test="this is a variable...";
//$test2 = "me too!";
//echo $test.$test2;
//$number = "37";
//echo $number*3;


//========== Arrays ==============//

$myArray = array("pizza", "chocolate", "coffee");
print_r($myArray);
echo $myArray[2];
echo "<br /><br />";

$anotherArray[0] = "pizza";
$anotherArray[1] = "yoghurt";
$anotherArray[2] = "burger";
print_r($anotherArray);
echo "<br /><br />";

$thirdArray = array(
    "France" => "French",
    "USA" => "English",
    "Germany" => "German"
);
print_r($thirdArray);
$anotherArray[] = "salad";
echo "<br /><br />";

print_r($anotherArray);
echo "<br /><br />";

unset($thirdArray["Germany"]);
print_r($thirdArray);
echo "<br /><br />";
echo "<br /><br />";
echo "<br /><br />";


//========== If statements ========== //

$number1 = 1;
$number2 = 2;
/*
 * note: use "AND" instead of && etc.
 */

if ($number1 == 1) {
    echo "statement is true";
} else {
    echo "statement is false";
};
echo "<br /><br />";
echo "<br /><br />";
echo "<br /><br />";

//========== Loops ============ //

for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br />";
}
echo "<br /><br />";
echo "<br /><br />";
echo "<br /><br />";


$array = array("cat", "dog", "bunny", "fish", "lion", "tiger", "zebra");

foreach ($array as $key => $value) {
    echo "Key: $key Value: $value <br />";
}
echo "<br /><br />";
echo "<br /><br />";
echo "<br /><br />";

$i = 0;                                       //if undeclared "$i;" - default value is 10.
//while ($i <= 20) {
//    echo "counting i:   $i <br />";
//    $i++;
//}
echo "<br />";

while ($array[$i]) {
    echo"Key: $i  Value: $array[$i] <br />";
    $i++;
}

?>