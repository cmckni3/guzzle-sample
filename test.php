<?php

require 'vendor/autoload.php';

use Guzzle\Http\Client;

$form_data = array(
  'VENDOR' => 'foo',
  'USER' => 'user john'
);

$client = new Client('http://localhost:3000');

$request = $client->post('/', array(), $form_data);

// $request->getCurlOptions()->set(CURLOPT_PROXY, 'http://localhost:8888');

$response = $request->send();

var_dump($response->getBody());
