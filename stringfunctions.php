<?php
/*--------strlen() returns the length of a string-----------*/

$str = "Happy New Year";

echo strlen($str);

echo"<br>";



/*--------str_word_count() function counts the number of words in a string-----------*/


$str1 = "Happy New Year";

echo  str_word_count($str1);

echo"<br>";


$words = "Arena Institute";

$array = str_word_count($words);


echo"<pre>";
print_r($array);
echo"</pre>";
echo"<br>";

/*strpos() function searches for a specific text within a <string></string>*/
  



 echo strpos("Hello world!", "text");

 /*str_replace() function*/

 /*$str= "Hello world.The world is nice";

 echo str_replace("world", "earth", $str);*/

 $str= "Javascript  tutorial script";

 
 $find =["Hello", "script"];
 $replace =["Hi", "php"];

 echo str_replace("script", "php", $str);


 echo"<br>";



/*str_trim() function*/

$str="Today is wednesday";
echo $str . "<br>";

echo trim($str, 'Today');
echo"<br>";


$str="Happy New Year";


echo rtrim($str, 'Year');
echo"<br>";

$str= "Javascript  tutorial scriptal";
echo strtr($str, 'pt', 'tu');
echo"<br>";

/*Explode() function*/




$str = "Hello world. It's a beautiful day";

$array = explode(" ",$str);

echo "<pre>";
print_r($array);
echo "</pre>";
echo"<br>";

/*-------Using Limit with explode ------- */

$array2 = explode(" ",$str, 2);

echo "<pre>";
print_r($array2);
echo "</pre>";
echo"<br>";



/*implode() function*/




$arr = array('Hello','World!','Beautiful','Day!');

$strr = implode(" ",$arr);

echo $strr;
echo '<br><br>';

/*You can use (Join) function work same as Implode*/

$strr5 = join("<br>",$arr);

echo $strr5;
echo '<br><br>';



?>