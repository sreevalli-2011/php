<?php
//Arthematic operators//
//addition//
$a = 10;

$b= 3;

$c= $a + $b;

echo $c. "<br>";


//subtraction//

$a = 10.55;

$b= 3;

$c= $a - $b;

echo $c. "<br>";

//multiplication//

$a = 10;

$b= 3;

$c= $a * $b;

echo $c. "<br>";

//modulas//
$a = 10;

$b= 3;

$c= $a ** $b;

echo $c. "<br>";

//division//

$a = 10;

$b= 3;

$c= $a / $b;

echo $c. "<br>";

//increment//

$a = 10;

$b= 2;

$a++;

echo $a. "<br>";

//decrement//

$a = 10;

$b= 2;

--$a;

echo $a. "<br>";


//complex multiplications//


$a = 10;

$b= 2;

$c= $a + $b * 2;

echo $c. "<br>";



$a = 10;

$b= 2;

$c= ($a + $b) * 2;

echo $c. "<br>";


//spaceship//


echo 3 <=> 4;

echo  "<br>";

echo 4 <=> 3; 

echo  "<br>";

echo  "<br>";


//comparision  operators//


$a = 5;
$b = 5;
if ($a == $b) {
     echo "true";
} else {
    echo "false";
}
echo  "<br>";

$a = 5;
$b = "5";
if ($a === $b) {
     echo "true";
} else {
    echo "false";
}


echo  "<br>";

//not equal//
$a = 10;
$b = 10;
if ($a != $b) {
     echo "true";
} else {
    echo "false";
}
echo  "<br>";


//greater then//
$a = 20;
$b = 10;

var_dump($a>$b);

echo  "<br>";



//less then//
$a = 20;
$b = 10;

var_dump($a<$b);

echo  "<br>";

//greater then equal//
$a = 20;
$b = 10;

var_dump($a<=$b);

echo  "<br>";

//lessthen equal//
$a = 30;
$b = 10;

var_dump($a>=$b);

echo  "<br>";

//spaceship//

$a=30;
$b=50;
echo $a<=>$b;

echo $c. "<br>";
echo $c. "<br>";


//assignment operators//

$a = 30;

$b= 6;

$a+=$b;

echo  $a;

echo "<br>";


$a = 30;

$b= 6;

$a-=$b;

echo  $a;
echo "<br>";


$a = 20;

$b= 6;

$a*=$b;

echo  $a;
echo "<br>";

$a = 20;

$b= 6;

$a/=$b;

echo  $a;
echo "<br>";



$a = 20;

$b= 6;

$a%=$b;

echo  $a;
echo "<br>";


$a = 30;

$b= 6;

$a**=$b;

echo  $a;
echo "<br>";



//logical operators//

$age=20;

if($age >=18 && $age <=21){

echo "you are eligible";

}
echo "<br>";



$age=15;

if($age >=18 || $age <=21){

echo "you are eligible";

}

echo "<br>";



$age=35;

if((!$age <=18)){

echo "you are eligible";

}

echo "<br>";

echo "<br>";


//Ternary operators//

$x = 50;

($x < 20)? $z = "Greater" :$z = "smaller";

echo $z;





?>