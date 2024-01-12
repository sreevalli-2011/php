<?php

$to = "sreevalliarena@gmail.com";
   $subject = "Test Mail";
   $message = "Hello! this is simple email message";
   $from = "valliwebworkz@gmail.com"; 
   $headers = "From: $from";


   mail($to, $subject, $message, $headers);
   echo "Mail Sent.";

?>