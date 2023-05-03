<?php

use GuzzleHttp\Client;

require_once __DIR__ . '/vendor/autoload.php';

$httpClient = new Client();
$url = "https://my.api.mockaroo.com/users_composer.json?key=c82cb940";
$response = $httpClient->request('GET', $url, ['verify' => false]);

$users = json_decode($response->getBody());

dump($users);

$sql = 'INSERT INTO users (first_name, last_name, email, gender, ip_address) VALUES (:first_name, :last_name, :email, :gender, :ip_address)';
$pdo = new PDO('mysql:host=localhost;dbname=composer_users;port=3306;charset=utf8', 'bobo', 'bobo');
$stmt = $pdo->prepare($sql);
$pdo->beginTransaction();
foreach ($users as $user) {
    $stmt->execute([
        'first_name' => $user->first_name,
        'last_name' => $user->last_name,
        'email' => $user->email,
        'gender' => $user->gender,
        'ip_address' => $user->ip_address
    ]);
    $pdo->commit();
}
