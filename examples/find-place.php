<?php

declare(strict_types=1);

use AddressZen\AddressZen;

require __DIR__.'/../vendor/autoload.php';

$client = AddressZen::client('ak_test');

$response = $client->findPlace(['query' => 'Springfield', 'country_iso' => 'USA']);

foreach ($response->result->hits as $place) {
    echo $place->id, ': ', $place->descriptiveName, PHP_EOL;
}
