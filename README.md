# AddressZen PHP SDK

Typed calls to the AddressZen API over any PSR-18 HTTP client. PHP 8.2 or later.

```bash
composer require addresszen/sdk
```

The SDK finds the PSR-18 client and PSR-17 factories already in your project. If Composer reports none, add one, such as `composer require guzzlehttp/guzzle`.

```php
use AddressZen\AddressZen;
use AddressZen\Types\UsaVerifyMatch;

$client = AddressZen::client('ak_test');

$verified = $client->addressVerify(['query' => '1010 Cauthen Ln, Alamogordo, NM 88310'])->result;
if ($verified instanceof UsaVerifyMatch) {
    echo $verified->addressLineOne, ', ', $verified->city, ', ', $verified->state, ' ', $verified->zipCode, PHP_EOL;
}

$response = $client->findAddress(['query' => '1010 Cauthen Ln']);
foreach ($response->result->hits as $hit) {
    echo $hit->suggestion, PHP_EOL;
}
```

Each API operation is one method on the client, named from its operation ID, such as `addressVerify()`, `findAddress()` or `keyUsage()`. Every response is a read-only object with camelCase properties, the API's own field names through array access and `toArray()` for the decoded body. An HTTP error throws `ApiException`, with the HTTP status from `getStatusCode()` and the API error code from `getCode()`.

Key, licensee and configuration operations take your Management Key as the second argument to `AddressZen::client()`. Keep it on your server.

[Documentation](https://docs.addresszen.com/docs/sdks/php) covers setup, address verification, autocomplete, email and phone validation, keys, licensees, responses, errors, the Symfony bundle, the Laravel package and a reference page for every operation. Coding agents can install the `azn-php-sdk` skill with `npx skills add addresszen/skills`.

## License

SEE LICENSE IN LICENSE
