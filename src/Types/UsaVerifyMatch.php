<?php

declare(strict_types=1);

/**
 * Generated from the OpenAPI spec. Do not edit.
 */

namespace AddressZen\Types;

use AddressZen\Concerns\ArrayAccessible;
use AddressZen\Contracts\ResponseContract;

/**
 * Address Match
 *
 * @phpstan-import-type AddressArray from Address
 * @phpstan-import-type UsaCassVerifiedAddressArray from UsaCassVerifiedAddress
 * @phpstan-type UsaVerifyMatchArray array{query: string, query_city: string, query_state: string, query_zip_code: string, match: UsaCassVerifiedAddressArray|AddressArray, count: int, fit: float|int, confidence: float|int, match_information: string, address_line_one: string, address_line_two: string, city: string, state: string, zip_code: string, country_iso_2: string}
 *
 * @implements ResponseContract<UsaVerifyMatchArray>
 */
final class UsaVerifyMatch implements ResponseContract
{
    /** @use ArrayAccessible<UsaVerifyMatchArray> */
    use ArrayAccessible;

    private function __construct(
        /**
         * Submitted query
         */
        public readonly string $query,
        /**
         * Submitted city
         */
        public readonly string $queryCity,
        /**
         * Submitted state
         */
        public readonly string $queryState,
        /**
         * Submitted zip_code
         */
        public readonly string $queryZipCode,
        /**
         * Nearest matching address. A CASS verified address in the United States. Elsewhere, the address in the same format Retrieve Address returns, with the raw dataset record in `native`
         */
        public readonly UsaCassVerifiedAddress|Address $match,
        /**
         * The number of addresses we matched to the input. We return the closest match by default.
         */
        public readonly int $count,
        /**
         * A score represented as a number between 1 and 0. Fit compares the address elements present in your query against the matching address elements. It does not incorporate elements you have not presented in the score. A partial address (e.g. 123 Main St) will have a fit of 1 even though it is missing city and zip code. Its confidence score will be less than 1 however because it is missing some crucial elements.
         */
        public readonly float $fit,
        /**
         * A confidence score represented as a number between 1 and 0. 1 indicates a full match. 0 indicates no complete matching elements.
         */
        public readonly float $confidence,
        /**
         * Additional information about the match.
         */
        public readonly string $matchInformation,
        /**
         * Primary delivery address
         */
        public readonly string $addressLineOne,
        /**
         * Secondary address information
         */
        public readonly string $addressLineTwo,
        /**
         * City name
         */
        public readonly string $city,
        /**
         * State name
         */
        public readonly string $state,
        /**
         * ZIP code
         */
        public readonly string $zipCode,
        /**
         * 2-letter ISO country code
         */
        public readonly string $countryIso2,
    ) {}

    /**
     * @param  UsaVerifyMatchArray  $attributes
     */
    public static function from(array $attributes): self
    {
        return new self(
            query: $attributes['query'] ?? throw self::missing('query'),
            queryCity: $attributes['query_city'] ?? throw self::missing('query_city'),
            queryState: $attributes['query_state'] ?? throw self::missing('query_state'),
            queryZipCode: $attributes['query_zip_code'] ?? throw self::missing('query_zip_code'),
            match: self::hydrateMatch(($attributes['match'] ?? throw self::missing('match'))),
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
            'match' => $this->match->toArray(),
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

    /**
     * @param  UsaCassVerifiedAddressArray|AddressArray  $value
     */
    private static function hydrateMatch(array $value): UsaCassVerifiedAddress|Address
    {
        if (self::matches($value, [], ['address1', 'address2', 'address3', 'area_code', 'carrier_route', 'check_digit', 'city', 'city_abbreviation', 'congressional_district', 'country_code', 'county', 'day_light_savings', 'delivery_point', 'dpv', 'dpv_cmra', 'dpv_footnotes', 'dpv_no_stat', 'dpv_vacant', 'elot', 'finance_number', 'fips_county_code', 'firm', 'footnotes', 'geo_coded', 'lacs_indicator', 'lacs_link_footnote', 'lacs_link_indicator', 'latitude', 'longitude', 'parsed_pmb_designator', 'parsed_pmb_number', 'parsed_post_directional', 'parsed_pre_directional', 'parsed_primary_number', 'parsed_street_name', 'parsed_suffix', 'parsed_unit_designator', 'parsed_unit_number', 'rdi', 'record_type', 'state', 'suite_link_footnote', 'time_zone', 'urbanization', 'zip_code'])) {
            /** @var UsaCassVerifiedAddressArray $variant */
            $variant = $value;

            return UsaCassVerifiedAddress::from($variant);
        }

        /** @var AddressArray $variant */
        $variant = $value;

        return Address::from($variant);
    }
}
