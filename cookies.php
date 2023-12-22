<?php


$_cookie_name = 'user';


$cookie_value = "marks";


setcookie($_cookie_name, $cookie_value, time() + (86400 * 30), "/");


?>



<html>
<head>
<title>Cookie</title>
</head>

<body>

<?php


if (isset($_COOKIE['[$_cookie_name]'])) {
    echo "Cookie is not set";

}else{
    echo $_COOKIE['$cookie_name'];
}
echo $_COOKIE[$cookie_name];




?>


</body>
</html>