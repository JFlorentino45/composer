<?php

use GuzzleHttp\Client;

require_once __DIR__ . '/vendor/autoload.php';
require_once 'HandleUsers.php';

$httpClient = new Client();
$url = "https://my.api.mockaroo.com/users_composer.json?key=c82cb940";
$response = $httpClient->request('GET', $url, ['verify' => false]);

$users = json_decode($response->getBody());

dump($users);

$handleUsers = new HandleUsers();
$handleUsers->saveUsersFromApi($users);
