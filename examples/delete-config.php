<?php

declare(strict_types=1);

use AddressZen\AddressZen;

require __DIR__.'/../vendor/autoload.php';

$client = AddressZen::client('ak_test', 'uk_test');

$response = $client->deleteConfig('ak_test', 'woocommerce');

echo 'Deleted: ', $response->result->deleted, PHP_EOL;
