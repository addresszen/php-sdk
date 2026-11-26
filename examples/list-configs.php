<?php

declare(strict_types=1);

use AddressZen\AddressZen;

require __DIR__.'/../vendor/autoload.php';

$client = AddressZen::client('ak_test', 'uk_test');

$response = $client->listConfigs('ak_test');

foreach ($response->result->configs as $config) {
    echo $config->name, ' updated ', $config->updatedAt, PHP_EOL;
}
