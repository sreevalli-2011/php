<?php

function function_name(){

    echo "Happy New Year";
}
function_name();



function hello($num1, $num2, $num3){

    $product =$num1 * $num2 * $num3;

    echo "The product is $product";
}
hello( 2, 3, 5);
echo "<br>";

function sample($str, $num =12)

{
    echo "$str is $num years old";

}

//calling the function//

sample ("Ram", 15);
//in this call the default value 12
// will be considered

sample("Adam");

// return keyword//

function students($fname="First", $lname="Last"){
echo "students $fname, $lname<br>";
}
students("Happy", "pongal");

echo "<br>";

// return keyword//

function marks($fname="First", $lname="Last"){

    $v = "$fname $lname";
    return $v;

}
$name = marks("Happy" , "New Year");

echo "marks $name";




?>
