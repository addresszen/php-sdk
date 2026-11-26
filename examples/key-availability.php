<?php

declare(strict_types=1);

use AddressZen\AddressZen;

require __DIR__.'/../vendor/autoload.php';

$client = AddressZen::client('ak_test');

$response = $client->keyAvailability('ak_test');

echo 'Available: ', var_export($response->result->available, true), PHP_EOL;
echo 'Context: ', $response->result->context, PHP_EOL;
