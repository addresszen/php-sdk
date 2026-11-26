<?php

declare(strict_types=1);

use AddressZen\AddressZen;

require __DIR__.'/../vendor/autoload.php';

$client = AddressZen::client('ak_test', 'uk_test');

$response = $client->deleteLicensee('ak_test', 'sl_hk71kco54zGSGvF9eXXrvvnMOLLNh');

echo 'Deleted: ', $response->result->deleted, PHP_EOL;
