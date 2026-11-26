<?php

declare(strict_types=1);

use AddressZen\AddressZen;
use AddressZen\Types\PhoneNumber;

require __DIR__.'/../vendor/autoload.php';

$client = AddressZen::client('ak_test');

$response = $client->phoneNumberValidation(['query' => '+1 202 555 0123']);

$result = $response->result;

if ($result instanceof PhoneNumber) {
    echo $result->internationalFormat, ' (', $result->country, ')', PHP_EOL;
} else {
    echo 'Invalid phone number', PHP_EOL;
}
