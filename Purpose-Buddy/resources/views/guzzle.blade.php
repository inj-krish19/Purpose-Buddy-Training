<?php

// command for installing guzzle 
// composer require guzzlehttp/guzzle

use GuzzleHttp\Client;
 
$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'https://reqres.in',
]);
 
$response = $client->request('GET', '/api/users', [
    'query' => [
        'page' => '2',
    ]
]);
 
$body = $response->getBody();
$arr_body = json_decode($body);
echo "<pre>";
print_r($arr_body);
echo "</pre>";

?>