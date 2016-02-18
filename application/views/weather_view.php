<?php

require '/vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client(['base_uri' => 'http://gismeteo.ua']);
$response = $client->request('GET', '/city/daily/5093', ['headers' => ['User-Agent' => 'Mozilla/5.0']]);

echo $response->getBody();