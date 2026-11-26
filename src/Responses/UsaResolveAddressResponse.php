<?php

declare(strict_types=1);

/**
 * Generated from the OpenAPI spec. Do not edit.
 */

namespace AddressZen\Responses;

use AddressZen\Concerns\ArrayAccessible;
use AddressZen\Contracts\ResponseContract;
use AddressZen\Types\Address;

/**
 * Address Retrieve Response
 *
 * @phpstan-import-type AddressArray from Address
 * @phpstan-type UsaResolveAddressResponseArray array{code: 2000, message: 'Success', result: AddressArray}
 *
 * @implements ResponseContract<UsaResolveAddressResponseArray>
 */
final class UsaResolveAddressResponse implements ResponseContract
{
    /** @use ArrayAccessible<UsaResolveAddressResponseArray> */
    use ArrayAccessible;

    private function __construct(
        /**
         * @var 2000
         */
        public readonly int $code,
        /**
         * @var 'Success'
         */
        public readonly string $message,
        /**
         * A single address.
         */
        public readonly Address $result,
    ) {}

    /**
     * @param  UsaResolveAddressResponseArray  $attributes
     */
    public static function from(array $attributes): self
    {
        return new self(
            code: $attributes['code'] ?? throw self::missing('code'),
            message: $attributes['message'] ?? throw self::missing('message'),
            result: Address::from(($attributes['result'] ?? throw self::missing('result'))),
        );
    }

    public function toArray(): array
    {
        return [
            'code' => $this->code,
            'message' => $this->message,
            'result' => $this->result->toArray(),
        ];
    }
}
