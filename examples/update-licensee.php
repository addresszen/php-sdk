<?php

declare(strict_types=1);

use AddressZen\AddressZen;

require __DIR__.'/../vendor/autoload.php';

$client = AddressZen::client('ak_test', 'uk_test');

$response = $client->updateLicensee('ak_test', 'sl_hk71kco54zGSGvF9eXXrvvnMOLLNh', [
    'name' => 'Acme Inc',
]);

echo $response->result->name, PHP_EOL;
