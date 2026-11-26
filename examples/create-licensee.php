<?php

declare(strict_types=1);

use AddressZen\AddressZen;

require __DIR__.'/../vendor/autoload.php';

$client = AddressZen::client('ak_test', 'uk_test');

$response = $client->createLicensee('ak_test', [
    'name' => 'Acme Inc',
    'address' => '1010 Cauthen Ln, Alamogordo, NM',
    'postcode' => '88310',
    'whitelist' => ['https://www.acme.example'],
]);

echo 'Licensee key: ', $response->result->key, PHP_EOL;
