

<?php

//indexed array//
$colors =array ("red", 20 , "blue", 12.50);

echo $colors [0] . "<br>";
echo $colors [1] . "<br>";
echo $colors [2]. "<br>"; 
echo $colors [3] . "<br>"; 

$colors[0] = "red";
$colors[1] = "blue";
$colors[2] = "pink";
$colors[3] = "orange";


echo "<pre>";

print_r($colors);

echo "<pre>";



//associative array//


$age = [


    "bill"  => 25,
    "neha"=>28,
    "Karthik"=>22,
 ];

     echo $age ["bill"]. "<br>";
     echo $age ["neha"] . "<br>";
     echo $age ["Karthik"] ."<br>";


      echo "<pre>";
     print_r($age);

     echo "</pre>";


     //multidimensional array//


     $emp = [

        [1, "krishna", "Manager" , 5000],
        [2, "Harthick", "salesman" , 2000],
        [3, "varshini", "computer operator" , 12000],
        [4, "sameer", "sofware" , 19000],
        
     ];

     echo $emp [0][0]. "<br>";
     echo $emp [0][1]. "<br>";
     echo $emp [0][2]. "<br>";
     echo $emp [0][3]. "<br>";

     echo $emp [1][0]. "<br>";
     echo $emp [1][1]. "<br>";
     echo $emp [1][2]. "<br>";
     echo $emp [1][3]. "<br>";

     echo "<pre>";
     print_r($emp);

     echo "</pre>";


     //loops//

     for($row =0; $row < 4; $row++){
     for($col =0; $col < 4; $col++){
        echo $emp[$row][$col]. " ";

     }
     echo "<br>" ;
    }

?>
