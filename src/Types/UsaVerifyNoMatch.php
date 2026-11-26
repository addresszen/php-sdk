<?php

declare(strict_types=1);

/**
 * Generated from the OpenAPI spec. Do not edit.
 */

namespace AddressZen\Types;

use AddressZen\Concerns\ArrayAccessible;
use AddressZen\Contracts\ResponseContract;

/**
 * No Address Match
 *
 * @phpstan-type UsaVerifyNoMatchArray array{query: string, query_city: string, query_state: string, query_zip_code: string, match: array<string, mixed>|null, count: 0, fit: 0, confidence: 0, match_information: string, address_line_one: '', address_line_two: '', city: '', state: '', zip_code: '', country_iso_2: ''}
 *
 * @implements ResponseContract<UsaVerifyNoMatchArray>
 */
final class UsaVerifyNoMatch implements ResponseContract
{
    /** @use ArrayAccessible<UsaVerifyNoMatchArray> */
    use ArrayAccessible;

    private function __construct(
        /**
         * Originally submitted query
         */
        public readonly string $query,
        /**
         * Originally submitted city
         */
        public readonly string $queryCity,
        /**
         * Originally submitted state
         */
        public readonly string $queryState,
        /**
         * Originally submitted zip_code
         */
        public readonly string $queryZipCode,
        /**
         * Nearest matching address
         *
         * @var array<string, mixed>|null
         */
        public readonly ?array $match,
        /**
         * @var 0
         */
        public readonly int $count,
        /**
         * @var 0
         */
        public readonly int $fit,
        /**
         * @var 0
         */
        public readonly int $confidence,
        /**
         * Why the address could not be verified, for people to read. For example `Address not found`, `House number not valid for this street`, `Invalid city, state or ZIP code` or `Address could not be parsed`.
         */
        public readonly string $matchInformation,
        /**
         * Empty if no match
         *
         * @var ''
         */
        public readonly string $addressLineOne,
        /**
         * Empty if no match
         *
         * @var ''
         */
        public readonly string $addressLineTwo,
        /**
         * Empty if no match
         *
         * @var ''
         */
        public readonly string $city,
        /**
         * Empty if no match
         *
         * @var ''
         */
        public readonly string $state,
        /**
         * Empty if no match
         *
         * @var ''
         */
        public readonly string $zipCode,
        /**
         * Empty if no match
         *
         * @var ''
         */
        public readonly string $countryIso2,
    ) {}

    /**
     * @param  UsaVerifyNoMatchArray  $attributes
     */
    public static function from(array $attributes): self
    {
        return new self(
            query: $attributes['query'] ?? throw self::missing('query'),
            queryCity: $attributes['query_city'] ?? throw self::missing('query_city'),
            queryState: $attributes['query_state'] ?? throw self::missing('query_state'),
            queryZipCode: $attributes['query_zip_code'] ?? throw self::missing('query_zip_code'),
            match: $attributes['match'] ?? null,
            count: $attributes['count'] ?? throw self::missing('count'),
            fit: $attributes['fit'] ?? throw self::missing('fit'),
            confidence: $attributes['confidence'] ?? throw self::missing('confidence'),
            matchInformation: $attributes['match_information'] ?? throw self::missing('match_information'),
            addressLineOne: $attributes['address_line_one'] ?? throw self::missing('address_line_one'),
            addressLineTwo: $attributes['address_line_two'] ?? throw self::missing('address_line_two'),
            city: $attributes['city'] ?? throw self::missing('city'),
            state: $attributes['state'] ?? throw self::missing('state'),
            zipCode: $attributes['zip_code'] ?? throw self::missing('zip_code'),
            countryIso2: $attributes['country_iso_2'] ?? throw self::missing('country_iso_2'),
        );
    }

    public function toArray(): array
    {
        return [
            'query' => $this->query,
            'query_city' => $this->queryCity,
            'query_state' => $this->queryState,
            'query_zip_code' => $this->queryZipCode,
            'match' => $this->match,
            'count' => $this->count,
            'fit' => $this->fit,
            'confidence' => $this->confidence,
            'match_information' => $this->matchInformation,
            'address_line_one' => $this->addressLineOne,
            'address_line_two' => $this->addressLineTwo,
            'city' => $this->city,
            'state' => $this->state,
            'zip_code' => $this->zipCode,
            'country_iso_2' => $this->countryIso2,
        ];
    }
}
