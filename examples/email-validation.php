<?php

declare(strict_types=1);

use AddressZen\AddressZen;
use AddressZen\Types\Email;

require __DIR__.'/../vendor/autoload.php';

$client = AddressZen::client('ak_test');

$response = $client->emailValidation(['query' => 'support@addresszen.com']);

$result = $response->result;

if ($result instanceof Email) {
    echo $result->result, PHP_EOL;
    echo 'Deliverable: ', var_export($result->deliverable, true), PHP_EOL;
    echo 'Disposable: ', var_export($result->disposable, true), PHP_EOL;
} else {
    echo 'Deliverability unknown', PHP_EOL;
}
