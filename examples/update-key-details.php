<?php

declare(strict_types=1);

use AddressZen\AddressZen;

require __DIR__.'/../vendor/autoload.php';

$client = AddressZen::client('ak_test', 'uk_test');

$response = $client->updateKeyDetails('ak_test', [
    'name' => 'Checkout',
    'allowed_urls' => ['https://www.example.com'],
]);

echo $response->result->name, PHP_EOL;
