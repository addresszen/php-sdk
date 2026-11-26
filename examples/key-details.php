<?php

declare(strict_types=1);

use AddressZen\AddressZen;

require __DIR__.'/../vendor/autoload.php';

$client = AddressZen::client('ak_test', 'uk_test');

$response = $client->keyDetails('ak_test');

echo $response->result->name, ': ', $response->result->lookupsRemaining, ' lookups remaining', PHP_EOL;
