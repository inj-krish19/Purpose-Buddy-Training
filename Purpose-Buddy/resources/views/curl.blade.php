<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curl</title>
</head>
<body>
    <h1>Showing Data Using CURL </h1>
</body>
</html>
<?php

// command for installing curl 
// composer require ixundra/curl

use Ixudra\Curl\Facades\Curl;

$response = Curl::to('https://reqres.in/api/users?page=2')->get();

echo "<pre>";
print_r(json_decode($response));
echo "</pre>";

?>