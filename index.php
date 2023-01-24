<?php

$ip_address = $_SERVER['HTTP_CF_CONNECTING_IP'];
$country = $_SERVER['HTTP_CF_IPCOUNTRY'];
$city = $_SERVER['HTTP_CF_IPCITY'];

echo "MY REAL IP ADDRESS:".$ip_address."<br>";
echo "MY COUNTRY:".$country."<br>";
echo "MY CITY:".$city."<br>";


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Get users Information From Cloudfare </title>
  </head>
  <body>

    <h1>Get Users Information from Cloudfare</h1>



  </body>
</html>
