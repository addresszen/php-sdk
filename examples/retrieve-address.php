<?php

declare(strict_types=1);

use AddressZen\AddressZen;

require __DIR__.'/../vendor/autoload.php';

$client = AddressZen::client('ak_test');

$response = $client->retrieveAddress('usps_Z108703633|123||1119');

$address = $response->result;

echo $address->line1, PHP_EOL;
echo $address->lastLine, PHP_EOL;
