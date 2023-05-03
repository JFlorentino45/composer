<?php

use GuzzleHttp\Client;

require_once __DIR__ . '/vendor/autoload.php';

$httpClient = new Client();
$url = "https://my.api.mockaroo.com/users_composer.json?key=c82cb940";
$response = $httpClient->request('GET', $url, ['verify' => false]);

$users = json_decode($response->getBody());
dump($users);

?><h2>Emails:</h2>
<?php
foreach ($users as $user) {
?>
    <div>
        <p><?php echo (($user->email)) ?>
    </div>
<?php
}
?>