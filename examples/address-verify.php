<?php

declare(strict_types=1);

use AddressZen\AddressZen;
use AddressZen\Types\UsaVerifyMatch;

require __DIR__.'/../vendor/autoload.php';

$client = AddressZen::client('ak_test');

$response = $client->addressVerify(['query' => '1010 Cauthen Ln, Alamogordo, NM 88310']);

$result = $response->result;

if ($result instanceof UsaVerifyMatch) {
    echo $result->addressLineOne, ', ', $result->city, ', ', $result->state, ' ', $result->zipCode, PHP_EOL;
} else {
    echo 'No match', PHP_EOL;
}
