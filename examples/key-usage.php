<?php

declare(strict_types=1);

use AddressZen\AddressZen;

require __DIR__.'/../vendor/autoload.php';

$client = AddressZen::client('ak_test', 'uk_test');

$response = $client->keyUsage('ak_test', [
    'start' => strtotime('-7 days') * 1000,
    'end' => time() * 1000,
]);

foreach ($response->result->dailyCount as $day) {
    echo $day->date, ': ', $day->count, PHP_EOL;
}

echo 'Total: ', $response->result->total, PHP_EOL;
