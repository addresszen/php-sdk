<?php

declare(strict_types=1);

use AddressZen\AddressZen;

require __DIR__.'/../vendor/autoload.php';

$client = AddressZen::client('ak_test');

$response = $client->resolvePlace('geonames_5128581');

$place = $response->result;

echo $place->descriptiveName, ' (', $place->countryIso, ')', PHP_EOL;
echo $place->latitude, ', ', $place->longitude, PHP_EOL;
