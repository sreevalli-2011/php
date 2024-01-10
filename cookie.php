<?php

$cookie_name = "user";
$cookie_value = "John Doe";


setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day "/" aboutus);

?>


<html>
    <body>

<?php

if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie is not set";
}else{
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    $_COOKIE[$cookie_name];
}

?>

</body>
</html>