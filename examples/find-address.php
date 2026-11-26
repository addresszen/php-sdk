<?php

declare(strict_types=1);

use AddressZen\AddressZen;

require __DIR__.'/../vendor/autoload.php';

$client = AddressZen::client('ak_test');

$response = $client->findAddress(['query' => '1010 Cauthen Ln', 'limit' => 5]);

foreach ($response->result->hits as $hit) {
    echo $hit->id, ': ', $hit->suggestion, PHP_EOL;
}
