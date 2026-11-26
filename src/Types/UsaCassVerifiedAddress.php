<?php

declare(strict_types=1);

/**
 * Generated from the OpenAPI spec. Do not edit.
 */

namespace AddressZen\Types;

use AddressZen\Concerns\ArrayAccessible;
use AddressZen\Contracts\ResponseContract;

/**
 * United States CASS Verified Address
 *
 * Address retrieved using CASS compliant address verification process
 *
 * @phpstan-type UsaCassVerifiedAddressArray array{address1: string, address2: string, address3: string, area_code: string, carrier_route: string, check_digit: string, city: string, city_abbreviation: string, congressional_district: string, country_code: string, county: string, day_light_savings: bool, delivery_point: string, dpv: 'Y'|'S'|'D'|'N'|'', dpv_cmra: 'Y'|'N'|'', dpv_footnotes: string, dpv_no_stat: 'Y'|'N'|'', dpv_vacant: 'Y'|'N'|'', elot: string, finance_number: string, fips_county_code: string, firm: string, footnotes: string, geo_coded: bool, lacs_indicator: 'L'|'', lacs_link_footnote: 'A'|'00'|'09'|'14'|'92'|'', lacs_link_indicator: 'Y'|'S'|'N'|'', latitude: string, longitude: string, parsed_pmb_designator: string, parsed_pmb_number: string, parsed_post_directional: string, parsed_pre_directional: string, parsed_primary_number: string, parsed_street_name: string, parsed_suffix: string, parsed_unit_designator: string, parsed_unit_number: string, rdi: string, record_type: 'C'|'F'|'G'|'H'|'M'|'P'|'R'|'S'|'U'|'', state: string, suite_link_footnote: ''|'00'|'A', time_zone: string, urbanization: string, zip_code: string}
 *
 * @implements ResponseContract<UsaCassVerifiedAddressArray>
 */
final class UsaCassVerifiedAddress implements ResponseContract
{
    /** @use ArrayAccessible<UsaCassVerifiedAddressArray> */
    use ArrayAccessible;

    private function __construct(
        /**
         * Primary delivery address
         */
        public readonly string $address1,
        /**
         * Secondary address information
         */
        public readonly string $address2,
        /**
         * Additional secondary address information
         */
        public readonly string $address3,
        /**
         * Area code. Also known as Numbering Plan Area (NPA) https://en.wikipedia.org/wiki/List_of_North_American_Numbering_Plan_area_codes
         */
        public readonly string $areaCode,
        /**
         * Data required to perform a Carrier Route sort
         */
        public readonly string $carrierRoute,
        /**
         * Character following the 5-digit or 9-digit ZIP Code. Part of the 11-digit barcode
         */
        public readonly string $checkDigit,
        /**
         * City name
         */
        public readonly string $city,
        /**
         * City Abbreviation. Empty string if not present
         */
        public readonly string $cityAbbreviation,
        /**
         * Identifies the Congressional District. Empty string if not present
         */
        public readonly string $congressionalDistrict,
        /**
         * ISO 3166 country code. Empty string if not present
         */
        public readonly string $countryCode,
        /**
         * Name of the county
         */
        public readonly string $county,
        /**
         * Daylight saving time indicator
         */
        public readonly bool $dayLightSavings,
        /**
         * Last 2 digits of the primary street address number or Post Office box
         */
        public readonly string $deliveryPoint,
        /**
         * Delivery Point Validation (DPV) Confirmation code.
         *
         * @var 'Y'|'S'|'D'|'N'|''
         */
        public readonly string $dpv,
        /**
         * Delivery Point Validation (DPV) CMRA code.
         *
         * @var 'Y'|'N'|''
         */
        public readonly string $dpvCmra,
        /**
         * Delivery Point Validation (DPV) Footnotes. Empty string if not present
         */
        public readonly string $dpvFootnotes,
        /**
         * Delivery Point Validation (DPV) NoStat code.
         *
         * @var 'Y'|'N'|''
         */
        public readonly string $dpvNoStat,
        /**
         * Delivery Point Validation (DPV) Vacant code.
         *
         * @var 'Y'|'N'|''
         */
        public readonly string $dpvVacant,
        /**
         * Enhanced Line of Travel. For arranging records in the order that a route is served by a carrier. eLOT sequencing, when combined with Carrier Route codes, may allow Enhanced Carrier Route (ECR) discounts to be claimed.
         */
        public readonly string $elot,
        /**
         * Internal accounting number used by the USPS® when Post Offices or ZIP Codes are discontinued and reassigned. The finance number reflects the geographic grouping of ZIP + 4 areas in which these changes can be made.
         */
        public readonly string $financeNumber,
        /**
         * Federal Information Processing Standard code for a county. Empty string if not present
         */
        public readonly string $fipsCountyCode,
        /**
         * Company name in a business address
         */
        public readonly string $firm,
        /**
         * Letter codes returned by ZIP+4 encoding. Empty string if not present
         */
        public readonly string $footnotes,
        /**
         * Indicates whether the address was geo-coded
         */
        public readonly bool $geoCoded,
        /**
         * Indicates whether a record may benefit from LACS processing.
         *
         * @var 'L'|''
         */
        public readonly string $lacsIndicator,
        /**
         * LACSLink Footnote. Return Code returned by the LACSLink process when an accurate address match could not be made. These codes help identify the type of move and the type of deficiency in the record which prevents a match. Possible values: - 'A' Address matched - '00' No match - '09' The input record matched to a record in the master file, but the old address is a highrise default - '14' The input record matched to a record in the master file. The new address could not be converted to a deliverable address - '92' LACSLink Record: Secondary Number Dropped from Input Address - The input record matched to a master file record, but the input address had a secondary number and the master file record did not. The record is a ZIP + 4 street level or high-rise match - '' Address not submitted to LACSLink lookup
         *
         * @var 'A'|'00'|'09'|'14'|'92'|''
         */
        public readonly string $lacsLinkFootnote,
        /**
         * LACSLink Indicator. Indicates whether the input address matched a record in the LACSLink database.
         *
         * @var 'Y'|'S'|'N'|''
         */
        public readonly string $lacsLinkIndicator,
        /**
         * Latitude of the encoded address. Empty string if not present
         */
        public readonly string $latitude,
        /**
         * Longitude of the encoded address. Empty string if not present
         */
        public readonly string $longitude,
        /**
         * Information if a Private Mail Box (PMB) is found in an address. Empty string if not present
         */
        public readonly string $parsedPmbDesignator,
        /**
         * Private Mail Box (PMB) number, if one is found in an address. Empty string if not present
         */
        public readonly string $parsedPmbNumber,
        /**
         * Notation following the street name indicating street direction. Empty string if not present
         */
        public readonly string $parsedPostDirectional,
        /**
         * Notation preceding the street name indicating street direction. Empty string if not present
         */
        public readonly string $parsedPreDirectional,
        /**
         * Number preceding the street name. Empty string if not present
         */
        public readonly string $parsedPrimaryNumber,
        /**
         * Street name. Empty string if not present
         */
        public readonly string $parsedStreetName,
        /**
         * Part of the delivery address line following the street name. Empty string if not present
         */
        public readonly string $parsedSuffix,
        /**
         * Identification of the secondary address unit. Empty string if not present
         */
        public readonly string $parsedUnitDesignator,
        /**
         * Apartment or suite number. Empty string if not present
         */
        public readonly string $parsedUnitNumber,
        /**
         * Residential Delivery Indicator (RDI). Indicates whether USPS classifies the delivery point as residential. Empty string if not present
         */
        public readonly string $rdi,
        /**
         * Type of address record.
         *
         * @var 'C'|'F'|'G'|'H'|'M'|'P'|'R'|'S'|'U'|''
         */
        public readonly string $recordType,
        /**
         * Standard two-letter state abbreviation
         */
        public readonly string $state,
        /**
         * Results of the SuiteLink lookup.
         *
         * @var ''|'00'|'A'
         */
        public readonly string $suiteLinkFootnote,
        /**
         * Time zone. Empty string if not present
         */
        public readonly string $timeZone,
        /**
         * Urban name required in the address of all mail being delivered to Puerto Rico. Empty string if not present
         */
        public readonly string $urbanization,
        /**
         * 5-digit ZIP Code and the four additional digits
         */
        public readonly string $zipCode,
    ) {}

    /**
     * @param  UsaCassVerifiedAddressArray  $attributes
     */
    public static function from(array $attributes): self
    {
        return new self(
            address1: $attributes['address1'] ?? throw self::missing('address1'),
            address2: $attributes['address2'] ?? throw self::missing('address2'),
            address3: $attributes['address3'] ?? throw self::missing('address3'),
            areaCode: $attributes['area_code'] ?? throw self::missing('area_code'),
            carrierRoute: $attributes['carrier_route'] ?? throw self::missing('carrier_route'),
            checkDigit: $attributes['check_digit'] ?? throw self::missing('check_digit'),
            city: $attributes['city'] ?? throw self::missing('city'),
            cityAbbreviation: $attributes['city_abbreviation'] ?? throw self::missing('city_abbreviation'),
            congressionalDistrict: $attributes['congressional_district'] ?? throw self::missing('congressional_district'),
            countryCode: $attributes['country_code'] ?? throw self::missing('country_code'),
            county: $attributes['county'] ?? throw self::missing('county'),
            dayLightSavings: $attributes['day_light_savings'] ?? throw self::missing('day_light_savings'),
            deliveryPoint: $attributes['delivery_point'] ?? throw self::missing('delivery_point'),
            dpv: $attributes['dpv'] ?? throw self::missing('dpv'),
            dpvCmra: $attributes['dpv_cmra'] ?? throw self::missing('dpv_cmra'),
            dpvFootnotes: $attributes['dpv_footnotes'] ?? throw self::missing('dpv_footnotes'),
            dpvNoStat: $attributes['dpv_no_stat'] ?? throw self::missing('dpv_no_stat'),
            dpvVacant: $attributes['dpv_vacant'] ?? throw self::missing('dpv_vacant'),
            elot: $attributes['elot'] ?? throw self::missing('elot'),
            financeNumber: $attributes['finance_number'] ?? throw self::missing('finance_number'),
            fipsCountyCode: $attributes['fips_county_code'] ?? throw self::missing('fips_county_code'),
            firm: $attributes['firm'] ?? throw self::missing('firm'),
            footnotes: $attributes['footnotes'] ?? throw self::missing('footnotes'),
            geoCoded: $attributes['geo_coded'] ?? throw self::missing('geo_coded'),
            lacsIndicator: $attributes['lacs_indicator'] ?? throw self::missing('lacs_indicator'),
            lacsLinkFootnote: $attributes['lacs_link_footnote'] ?? throw self::missing('lacs_link_footnote'),
            lacsLinkIndicator: $attributes['lacs_link_indicator'] ?? throw self::missing('lacs_link_indicator'),
            latitude: $attributes['latitude'] ?? throw self::missing('latitude'),
            longitude: $attributes['longitude'] ?? throw self::missing('longitude'),
            parsedPmbDesignator: $attributes['parsed_pmb_designator'] ?? throw self::missing('parsed_pmb_designator'),
            parsedPmbNumber: $attributes['parsed_pmb_number'] ?? throw self::missing('parsed_pmb_number'),
            parsedPostDirectional: $attributes['parsed_post_directional'] ?? throw self::missing('parsed_post_directional'),
            parsedPreDirectional: $attributes['parsed_pre_directional'] ?? throw self::missing('parsed_pre_directional'),
            parsedPrimaryNumber: $attributes['parsed_primary_number'] ?? throw self::missing('parsed_primary_number'),
            parsedStreetName: $attributes['parsed_street_name'] ?? throw self::missing('parsed_street_name'),
            parsedSuffix: $attributes['parsed_suffix'] ?? throw self::missing('parsed_suffix'),
            parsedUnitDesignator: $attributes['parsed_unit_designator'] ?? throw self::missing('parsed_unit_designator'),
            parsedUnitNumber: $attributes['parsed_unit_number'] ?? throw self::missing('parsed_unit_number'),
            rdi: $attributes['rdi'] ?? throw self::missing('rdi'),
            recordType: $attributes['record_type'] ?? throw self::missing('record_type'),
            state: $attributes['state'] ?? throw self::missing('state'),
            suiteLinkFootnote: $attributes['suite_link_footnote'] ?? throw self::missing('suite_link_footnote'),
            timeZone: $attributes['time_zone'] ?? throw self::missing('time_zone'),
            urbanization: $attributes['urbanization'] ?? throw self::missing('urbanization'),
            zipCode: $attributes['zip_code'] ?? throw self::missing('zip_code'),
        );
    }

    public function toArray(): array
    {
        return [
            'address1' => $this->address1,
            'address2' => $this->address2,
            'address3' => $this->address3,
            'area_code' => $this->areaCode,
            'carrier_route' => $this->carrierRoute,
            'check_digit' => $this->checkDigit,
            'city' => $this->city,
            'city_abbreviation' => $this->cityAbbreviation,
            'congressional_district' => $this->congressionalDistrict,
            'country_code' => $this->countryCode,
            'county' => $this->county,
            'day_light_savings' => $this->dayLightSavings,
            'delivery_point' => $this->deliveryPoint,
            'dpv' => $this->dpv,
            'dpv_cmra' => $this->dpvCmra,
            'dpv_footnotes' => $this->dpvFootnotes,
            'dpv_no_stat' => $this->dpvNoStat,
            'dpv_vacant' => $this->dpvVacant,
            'elot' => $this->elot,
            'finance_number' => $this->financeNumber,
            'fips_county_code' => $this->fipsCountyCode,
            'firm' => $this->firm,
            'footnotes' => $this->footnotes,
            'geo_coded' => $this->geoCoded,
            'lacs_indicator' => $this->lacsIndicator,
            'lacs_link_footnote' => $this->lacsLinkFootnote,
            'lacs_link_indicator' => $this->lacsLinkIndicator,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'parsed_pmb_designator' => $this->parsedPmbDesignator,
            'parsed_pmb_number' => $this->parsedPmbNumber,
            'parsed_post_directional' => $this->parsedPostDirectional,
            'parsed_pre_directional' => $this->parsedPreDirectional,
            'parsed_primary_number' => $this->parsedPrimaryNumber,
            'parsed_street_name' => $this->parsedStreetName,
            'parsed_suffix' => $this->parsedSuffix,
            'parsed_unit_designator' => $this->parsedUnitDesignator,
            'parsed_unit_number' => $this->parsedUnitNumber,
            'rdi' => $this->rdi,
            'record_type' => $this->recordType,
            'state' => $this->state,
            'suite_link_footnote' => $this->suiteLinkFootnote,
            'time_zone' => $this->timeZone,
            'urbanization' => $this->urbanization,
            'zip_code' => $this->zipCode,
        ];
    }
}
