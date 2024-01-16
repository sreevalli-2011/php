<?php
/*-------FILTER_VALIDATE_INT------- */

//$var = 99;
//$var = 9.9;
//.$var = 9950
//$var = "99";
//$var = true;
//$var = false;
//$var = 0;

 /*echo filter_var($var, FILTER_VALIDATE_INT)."<br>";
//value and datatype//
var_dump(filter_var($var, FILTER_VALIDATE_INT));

if(filter_var($var, FILTER_VALIDATE_INT)){
  echo "<br> $var is Integer.";
}else{
  echo "<br> $var is not an Integer.";
}*/


//FLITER VALIDATE FLOAT with decimal or withour decimal//

$var2 = 55;
$var2 = 25.36;
$var2 = 35.36;

$var2 = "25.36";
$var2 = "wow";
$var2 = true;  //---- not work as INT validate

 var_dump(filter_var($var2, FILTER_VALIDATE_FLOAT));

if(filter_var($var2, FILTER_VALIDATE_FLOAT)){
  echo "<br> $var2 is FLOAT.<br>";
}else{
  echo "<br> $var2 is not an FLOAT.<br>";
}


/*-------FILTER_VALIDATE_BOOLEAN------- */


//$var4 = false;
$var4 = true; //--- "on" / "yes" / 1 / "1"

$var4 = 11;
$var4 = "onn";

//var = false; //--- "off" / "no" / 0 / "0"

$var4 = "34";

var_dump(filter_var($var4, FILTER_VALIDATE_BOOLEAN));

if(filter_var($var4, FILTER_VALIDATE_BOOLEAN)){
  echo "<br> $var4 is Boolean.<br>";
}else{
  echo "<br> $var4 is not an  Boolean.<br>";
} 


/*-------valid email------- */


$var4 = "Hello@google";

var_dump(filter_var($var4, FILTER_VALIDATE+URLL));

if(filter_var($var4, FILTER_VALIDATE_URL)){
  echo "<br> $var4 is valid email.<br>";
}else{
  echo "<br> $var4 is not an  valid email.<br>";
} 

/*-------Flags :FILTER_FLAG_PATH_REQUIRED--- URL must have a path after the domain name (like www.example.com/example1/)------- */

 
$var8 = "https://www.yahoobaba.net/test/page.php";


if(filter_var($var8, FILTER_VALIDATE_URL,FILTER_FLAG_PATH_REQUIRED)){
  echo "$var8 is valid URL.<br>";
}else{
  echo "$var8 is not an valid URL.<br>";
} 

/*-------Flags :FILTER_FLAG_QUERY_REQUIRED---- URL must have a query string (like "example.php?name=Peter&age=37")------- */


$var9 = "https://www.yahoobaba.net/test.php?a=1&b=2";

if(filter_var($var9, FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED)){
  echo "$var9 is valid URL.<br>";
}else{
  echo "$var9 is not an valid URL.<br>";
} 

/*-------FILTER_VALIDATE_IP --  Internet Protocol address------- */

$var10 = "192.168.1.1";
//$var10 = "192.168.1.0";
//$var10 = "192.168.1";
//$var10 = "192.168.1.800";
//$var10 = "192.168.1.100";

//not telling  IPv4 or IPv6 advance IP

if(filter_var($var10, FILTER_VALIDATE_IP)){
  echo "$var10 is valid IP.<br>";
}else{
  echo "$var10 is not an valid IP.<br>";
}

/*-------FILTER_VALIDATE_MAC  -- media access control address -- unique address of networking devices------- */

$var11 = "FA-F9-DD-B2-5E-0D";
//$var11 = "FA-F9-DD-B2-5E";

if(filter_var($var11, FILTER_VALIDATE_MAC)){
  echo "$var11 is valid MAC.<br>";
}else{
  echo "$var11 is not an valid MAC.<br>";
}
?>
 



