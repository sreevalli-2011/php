<?php
/*--------array_change_key_case()function-----------*/

$a = array(

    "Bill" => 10,
    "Joe" => 20,
    "Peter" => 30
);

$newArray = array_change_key_case($a);

echo "<pre>";
print_r($newArray);
echo "</pre>";
echo "<br>";

/*--------array_chunk()function-----------*/

$cars = ["volvo", "BMW", "Toyota", "Honda", "Mercades"];

$newArray2 = array_chunk($cars, 3);

echo "<pre>";
print_r($newArray2);
echo "</pre>";
echo "<br>";

/*--------array_count()function-----------*/


$food = array("orange", "Mango", "banana", "apple", "grapes");
echo count($food);
echo "<br>";

/* --------- Delete from End------- */
$fruit = ["orange", "banana", "apple", "grapes"];

array_pop($fruit);

echo "<pre>";
print_r($fruit);
echo "</pre>";
echo "<br>";

/* --------- Add on Ending on the Array---------- */
$fruit = ["orange", "banana", "grapes"];

array_push($fruit,"apple","guava","lemon");

echo "<pre>";
print_r($fruit);
echo "</pre>";
echo "<br>";

/* Multiple Array Merge */
$fruit = ["orange", "banana", "grapes"];
$veggie = ['carrot', 'pea'];

$newArray = array_merge($fruit,$veggie);

echo "<pre>";
print_r($newArray);
echo "</pre>";

?>