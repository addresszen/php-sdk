<?php

declare(strict_types=1);

/**
 * Generated from the OpenAPI spec. Do not edit.
 */

namespace AddressZen\Types;

use AddressZen\Concerns\ArrayAccessible;
use AddressZen\Contracts\ResponseContract;

/**
 * Address
 *
 * A single address.
 *
 * Every address is returned in this shape, whatever dataset it came from. US and non-US addresses share the same fields, so an integration reads one format only.
 *
 * - `dataset` identifies where the address came from. Fields a dataset does not carry are returned as an empty string (`""`)
 * - `native` carries the raw dataset record, exactly as the dataset supplies it. Retrieve Address returns it for every dataset except `usps`, whose address already is the USPS record
 *
 * @phpstan-import-type AbAddressArray from AbAddress
 * @phpstan-import-type AbpAddressArray from AbpAddress
 * @phpstan-import-type BanAddressArray from BanAddress
 * @phpstan-import-type BevAddressArray from BevAddress
 * @phpstan-import-type CannarAddressArray from CannarAddress
 * @phpstan-import-type EcadAddressArray from EcadAddress
 * @phpstan-import-type EcafAddressArray from EcafAddress
 * @phpstan-import-type FodbosaAddressArray from FodbosaAddress
 * @phpstan-import-type GnafAddressArray from GnafAddress
 * @phpstan-import-type HereAddressArray from HereAddress
 * @phpstan-import-type KadasterAddressArray from KadasterAddress
 * @phpstan-import-type KartverketAddressArray from KartverketAddress
 * @phpstan-import-type MoisAddressArray from MoisAddress
 * @phpstan-import-type MrAddressArray from MrAddress
 * @phpstan-import-type NativeRecordArray from NativeRecord
 * @phpstan-import-type NybAddressArray from NybAddress
 * @phpstan-import-type PafAddressArray from PafAddress
 * @phpstan-import-type PafaAddressArray from PafaAddress
 * @phpstan-import-type PafwAddressArray from PafwAddress
 * @phpstan-import-type SdfiAddressArray from SdfiAddress
 * @phpstan-import-type SwtAddressArray from SwtAddress
 * @phpstan-import-type UpujpAddressArray from UpujpAddress
 * @phpstan-import-type UspsAddressArray from UspsAddress
 * @phpstan-type AddressArray array{id: string, dataset: 'paf'|'pafw'|'pafa'|'mr'|'nyb'|'usps'|'ecaf'|'ecad'|'ab'|'abp'|'herewe'|'heret'|'heresa'|'hereo'|'herena'|'heremeas'|'heremea'|'herem'|'herei'|'herehk'|'hereee'|'hereap'|'gnaf'|'kadaster'|'kartverket'|'sdfi'|'cannar'|'fodbosa'|'mois'|'upujp'|'bev'|'ban'|'swt', country_iso: 'GBR'|'IMN'|'JEY'|'GGY'|'USA'|'PRI'|'GUM'|'IRL'|'VAT'|'FRA'|'GRL'|'NLD'|'LUX'|'AUT'|'GIB'|'LIE'|'FIN'|'ISL'|'CHE'|'PRT'|'BEL'|'MCO'|'ITA'|'FRO'|'NOR'|'DNK'|'SMR'|'MLT'|'AND'|'SWE'|'DEU'|'ESP'|'SJM'|'BRN'|'IDN'|'KHM'|'MMR'|'MYS'|'PHL'|'SGP'|'THA'|'TLS'|'VNM'|'ALB'|'ARM'|'AZE'|'BGR'|'BIH'|'BLR'|'CYP'|'CZE'|'EST'|'GEO'|'GRC'|'HRV'|'HUN'|'KAZ'|'KGZ'|'LTU'|'LVA'|'MDA'|'MKD'|'MNE'|'POL'|'ROU'|'RUS'|'SRB'|'SVK'|'SVN'|'TUR'|'UKR'|'UZB'|'XKX'|'HKG'|'BGD'|'IND'|'LKA'|'MAC'|'AGO'|'ARE'|'BFA'|'BHR'|'BWA'|'CMR'|'EGY'|'GHA'|'ISR'|'JOR'|'KEN'|'KWT'|'LBN'|'LSO'|'MAR'|'MOZ'|'MUS'|'MYT'|'NAM'|'NGA'|'OMN'|'QAT'|'REU'|'SAU'|'SEN'|'SWZ'|'TUN'|'ZAF'|'ZMB'|'ZWE'|'BHS'|'BLZ'|'BMU'|'CAN'|'CRI'|'CYM'|'DOM'|'GTM'|'HND'|'HTI'|'JAM'|'MEX'|'NIC'|'PAN'|'SLV'|'VGB'|'AUS'|'CCK'|'CXR'|'FJI'|'NCL'|'NFK'|'NZL'|'PYF'|'TON'|'VUT'|'ABW'|'ARG'|'BLM'|'BOL'|'BRA'|'BRB'|'CHL'|'COL'|'CUW'|'DMA'|'ECU'|'GLP'|'GUF'|'GUY'|'MAF'|'MTQ'|'PER'|'PRY'|'SUR'|'TTO'|'URY'|'VEN'|'TWN'|'CHN'|'JPN'|'KOR'|'LAO'|'MNG'|'PNG'|'PRK'|'SLB'|'TJK'|'TKM'|'BTN'|'IOT'|'MDV'|'NPL'|'PAK'|'AFG'|'BDI'|'BEN'|'CAF'|'CIV'|'COD'|'COG'|'COM'|'CPV'|'DJI'|'DZA'|'ERI'|'ESH'|'ETH'|'GAB'|'GIN'|'GMB'|'GNB'|'GNQ'|'IRN'|'IRQ'|'LBR'|'LBY'|'MDG'|'MLI'|'MRT'|'MWI'|'NER'|'RWA'|'SHN'|'SLE'|'SOM'|'SSD'|'STP'|'SYC'|'TCD'|'TGO'|'TZA'|'UGA'|'SDN'|'SYR'|'YEM'|'CUB'|'SPM'|'TCA'|'COK'|'KIR'|'NIU'|'NRU'|'PCN'|'TKL'|'TUV'|'WLF'|'WSM'|'AIA'|'ATG'|'BES'|'FLK'|'GRD'|'KNA'|'LCA'|'MSR'|'SGS'|'SXM'|'VCT'|'ASM'|'FSM'|'MHL'|'MNP'|'PLW'|'VIR', country_iso_2: 'GB'|'IM'|'JE'|'GG'|'US'|'PR'|'GU'|'IE'|'VA'|'FR'|'GL'|'NL'|'LU'|'AT'|'GI'|'LI'|'FI'|'IS'|'CH'|'PT'|'BE'|'MC'|'IT'|'FO'|'NO'|'DK'|'SM'|'MT'|'AD'|'SE'|'DE'|'ES'|'SJ'|'BS'|'BZ'|'BM'|'CA'|'CR'|'KY'|'DO'|'GT'|'HN'|'HT'|'JM'|'MX'|'NI'|'PA'|'SV'|'VG'|'AU'|'CC'|'CX'|'FJ'|'NC'|'NF'|'NZ'|'PF'|'TO'|'VU'|'AW'|'AR'|'BL'|'BO'|'BR'|'BB'|'CL'|'CO'|'CW'|'DM'|'EC'|'GP'|'GD'|'GF'|'GY'|'MF'|'MQ'|'PE'|'PY'|'SR'|'TT'|'UY'|'VE'|'TW'|'BN'|'ID'|'KH'|'MM'|'MY'|'PH'|'SG'|'TH'|'TL'|'VN'|'AL'|'AM'|'AZ'|'BG'|'BA'|'BY'|'CY'|'CZ'|'EE'|'GE'|'GR'|'HR'|'HU'|'KZ'|'KG'|'XK'|'LT'|'LV'|'MD'|'MK'|'ME'|'PL'|'RO'|'RU'|'RS'|'SK'|'SI'|'TR'|'UA'|'UZ'|'HK'|'BD'|'IN'|'LK'|'MO'|'AO'|'AE'|'BF'|'BH'|'BW'|'CM'|'EG'|'GH'|'IL'|'JO'|'KE'|'KW'|'LB'|'LS'|'MA'|'MZ'|'MU'|'YT'|'NA'|'NG'|'OM'|'QA'|'RE'|'SA'|'SN'|'SZ'|'TN'|'ZA'|'ZM'|'ZW'|'CN'|'JP'|'KR'|'LA'|'MN'|'PG'|'KP'|'SB'|'TJ'|'TM'|'BT'|'IO'|'MV'|'NP'|'PK'|'AF'|'BI'|'BJ'|'CF'|'CI'|'CD'|'CG'|'KM'|'CV'|'DJ'|'DZ'|'ER'|'EH'|'ET'|'GA'|'GN'|'GM'|'GW'|'GQ'|'IR'|'IQ'|'LR'|'LY'|'MG'|'ML'|'MR'|'MW'|'NE'|'RW'|'SH'|'SL'|'SO'|'SS'|'ST'|'SC'|'TD'|'TG'|'TZ'|'UG'|'SD'|'SY'|'YE'|'CU'|'PM'|'TC'|'CK'|'KI'|'NU'|'NR'|'PN'|'TK'|'TV'|'WF'|'WS'|'AI'|'AG'|'BQ'|'FK'|'KN'|'LC'|'MS'|'GS'|'SX'|'VC'|'AS'|'FM'|'MH'|'MP'|'PW'|'VI', country: 'United Kingdom'|'England'|'Scotland'|'Wales'|'Northern Ireland'|'Isle of Man'|'Jersey'|'Guernsey'|'Channel Islands'|'Guam'|'United States'|'Puerto Rico'|'Ireland'|'Vatican City'|'France'|'Greenland'|'Netherlands'|'Luxembourg'|'Austria'|'Gibraltar'|'Liechtenstein'|'Finland'|'Iceland'|'Switzerland'|'Portugal'|'Belgium'|'Monaco'|'Italy'|'Faroe Islands'|'Norway'|'Denmark'|'San Marino'|'Malta'|'Andorra'|'Sweden'|'Germany'|'Spain'|'Svalbard and Jan Mayen'|'Bahamas'|'Belize'|'Bermuda'|'Canada'|'Costa Rica'|'Cayman Islands'|'Dominican Republic'|'Guatemala'|'Honduras'|'Haiti'|'Jamaica'|'Mexico'|'Nicaragua'|'Panama'|'El Salvador'|'British Virgin Islands'|'Australia'|'Cocos (Keeling) Islands'|'Christmas Island'|'Fiji'|'New Caledonia'|'Norfolk Island'|'New Zealand'|'French Polynesia'|'Tonga'|'Vanuatu'|'Aruba'|'Argentina'|'Saint Barthélemy'|'Bolivia'|'Brazil'|'Barbados'|'Chile'|'Colombia'|'Curaçao'|'Dominica'|'Ecuador'|'Guadeloupe'|'Grenada'|'French Guiana'|'Guyana'|'Saint Martin (French part)'|'Martinique'|'Peru'|'Paraguay'|'Suriname'|'Trinidad and Tobago'|'Uruguay'|'Venezuela'|'Taiwan'|'Brunei Darussalam'|'Indonesia'|'Cambodia'|'Myanmar'|'Malaysia'|'Philippines'|'Singapore'|'Thailand'|'Timor-Leste'|'Vietnam'|'Albania'|'Armenia'|'Azerbaijan'|'Bulgaria'|'Bosnia and Herzegovina'|'Belarus'|'Cyprus'|'Czech Republic'|'Estonia'|'Georgia'|'Greece'|'Croatia'|'Hungary'|'Kazakhstan'|'Kyrgyzstan'|'Kosovo'|'Lithuania'|'Latvia'|'Moldova'|'North Macedonia'|'Montenegro'|'Poland'|'Romania'|'Russia'|'Serbia'|'Slovakia'|'Slovenia'|'Turkey'|'Ukraine'|'Uzbekistan'|'Hong Kong'|'Bangladesh'|'India'|'Sri Lanka'|'Macau'|'Angola'|'United Arab Emirates'|'Burkina Faso'|'Bahrain'|'Botswana'|'Cameroon'|'Egypt'|'Ghana'|'Israel'|'Jordan'|'Kenya'|'Kuwait'|'Lebanon'|'Lesotho'|'Morocco'|'Mozambique'|'Mauritius'|'Mayotte'|'Namibia'|'Nigeria'|'Oman'|'Qatar'|'Réunion'|'Saudi Arabia'|'Senegal'|'Eswatini'|'Tunisia'|'South Africa'|'Zambia'|'Zimbabwe'|'China'|'Japan'|'South Korea'|'Laos'|'Mongolia'|'Papua New Guinea'|'North Korea'|'Solomon Islands'|'Tajikistan'|'Turkmenistan'|'Bhutan'|'British Indian Ocean Territory'|'Maldives'|'Nepal'|'Pakistan'|'Afghanistan'|'Burundi'|'Benin'|'Central African Republic'|'Côte d\'Ivoire'|'Democratic Republic of the Congo'|'Republic of the Congo'|'Comoros'|'Cape Verde'|'Djibouti'|'Algeria'|'Eritrea'|'Western Sahara'|'Ethiopia'|'Gabon'|'Guinea'|'Gambia'|'Guinea-Bissau'|'Equatorial Guinea'|'Iran'|'Iraq'|'Liberia'|'Libya'|'Madagascar'|'Mali'|'Mauritania'|'Malawi'|'Niger'|'Rwanda'|'Saint Helena'|'Sierra Leone'|'Somalia'|'South Sudan'|'São Tomé and Príncipe'|'Seychelles'|'Chad'|'Togo'|'Tanzania'|'Uganda'|'Sudan'|'Syria'|'Yemen'|'Cuba'|'Saint Pierre and Miquelon'|'Turks and Caicos Islands'|'Cook Islands'|'Kiribati'|'Niue'|'Nauru'|'Pitcairn Islands'|'Tokelau'|'Tuvalu'|'Wallis and Futuna'|'Samoa'|'Anguilla'|'Antigua and Barbuda'|'Bonaire, Sint Eustatius and Saba'|'Falkland Islands (Malvinas)'|'Saint Kitts and Nevis'|'Saint Lucia'|'Montserrat'|'South Georgia and the South Sandwich Islands'|'Sint Maarten (Dutch part)'|'Saint Vincent and the Grenadines'|'American Samoa'|'Federated States of Micronesia'|'Marshall Islands'|'Northern Mariana Islands'|'Palau'|'United States Virgin Islands', language: 'en'|'ar'|'as'|'az'|'be'|'bg'|'bn'|'bs'|'ca'|'cs'|'cy'|'da'|'de'|'el'|'es'|'et'|'eu'|'fi'|'fo'|'fr'|'ga'|'gl'|'gn'|'he'|'hi'|'hr'|'hu'|'hy'|'id'|'is'|'it'|'ja'|'ka'|'kk'|'km'|'kn'|'ko'|'lt'|'lv'|'mk'|'mn'|'ms'|'mt'|'my'|'nl'|'no'|'pl'|'pt'|'rm'|'ro'|'ru'|'sk'|'sl'|'sq'|'sr'|'sv'|'ta'|'th'|'tr'|'uk'|'uz'|'vi'|'wa'|'zh', primary_number: string, secondary_number: string, plus_4_code: string, line_1: string, line_2: string, last_line: string, zip_code: string, zip_plus_4_code: string, update_key_number: string, record_type_code: 'G'|'H'|'F'|'S'|'P'|'R'|'M'|'', carrier_route_id: string, street_pre_directional_abbreviation: string, street_name: string, street_suffix_abbreviation: string, street_post_directional_abbreviation: string, building_or_firm_name: string, address_secondary_abbreviation: string, base_alternate_code: 'A'|'B'|'', lacs_status_indicator: ''|'L', government_building_indicator: ''|'A'|'B'|'C'|'D'|'E'|'F'|'G', state_abbreviation: string, state: string, municipality_city_state_key: string, urbanization_city_state_key: string, preferred_last_line_city_state_key: string, county: string, city: string, city_abbreviation: string, preferred_city: string, city_state_name_facility_code: 'B'|'C'|'N'|'P'|'S'|'U'|'Y'|'', zip_classification_code: ''|'M'|'P'|'U', city_state_mailing_name_indicator: string, carrier_route_rate_sortation: string, finance_number: string|float|int, congressional_district_number: string|float|int, county_number: string|float|int, native?: NativeRecordArray|null}
 *
 * @implements ResponseContract<AddressArray>
 */
final class Address implements ResponseContract
{
    /** @use ArrayAccessible<AddressArray> */
    use ArrayAccessible;

    private function __construct(
        /**
         * Globally unique internally generated identifier for an address
         */
        public readonly string $id,
        /**
         * Indicates the provenance of an address.
         *
         * @var 'paf'|'pafw'|'pafa'|'mr'|'nyb'|'usps'|'ecaf'|'ecad'|'ab'|'abp'|'herewe'|'heret'|'heresa'|'hereo'|'herena'|'heremeas'|'heremea'|'herem'|'herei'|'herehk'|'hereee'|'hereap'|'gnaf'|'kadaster'|'kartverket'|'sdfi'|'cannar'|'fodbosa'|'mois'|'upujp'|'bev'|'ban'|'swt'
         */
        public readonly string $dataset,
        /**
         * 3 letter country code (ISO 3166-1)
         *
         * @var 'GBR'|'IMN'|'JEY'|'GGY'|'USA'|'PRI'|'GUM'|'IRL'|'VAT'|'FRA'|'GRL'|'NLD'|'LUX'|'AUT'|'GIB'|'LIE'|'FIN'|'ISL'|'CHE'|'PRT'|'BEL'|'MCO'|'ITA'|'FRO'|'NOR'|'DNK'|'SMR'|'MLT'|'AND'|'SWE'|'DEU'|'ESP'|'SJM'|'BRN'|'IDN'|'KHM'|'MMR'|'MYS'|'PHL'|'SGP'|'THA'|'TLS'|'VNM'|'ALB'|'ARM'|'AZE'|'BGR'|'BIH'|'BLR'|'CYP'|'CZE'|'EST'|'GEO'|'GRC'|'HRV'|'HUN'|'KAZ'|'KGZ'|'LTU'|'LVA'|'MDA'|'MKD'|'MNE'|'POL'|'ROU'|'RUS'|'SRB'|'SVK'|'SVN'|'TUR'|'UKR'|'UZB'|'XKX'|'HKG'|'BGD'|'IND'|'LKA'|'MAC'|'AGO'|'ARE'|'BFA'|'BHR'|'BWA'|'CMR'|'EGY'|'GHA'|'ISR'|'JOR'|'KEN'|'KWT'|'LBN'|'LSO'|'MAR'|'MOZ'|'MUS'|'MYT'|'NAM'|'NGA'|'OMN'|'QAT'|'REU'|'SAU'|'SEN'|'SWZ'|'TUN'|'ZAF'|'ZMB'|'ZWE'|'BHS'|'BLZ'|'BMU'|'CAN'|'CRI'|'CYM'|'DOM'|'GTM'|'HND'|'HTI'|'JAM'|'MEX'|'NIC'|'PAN'|'SLV'|'VGB'|'AUS'|'CCK'|'CXR'|'FJI'|'NCL'|'NFK'|'NZL'|'PYF'|'TON'|'VUT'|'ABW'|'ARG'|'BLM'|'BOL'|'BRA'|'BRB'|'CHL'|'COL'|'CUW'|'DMA'|'ECU'|'GLP'|'GUF'|'GUY'|'MAF'|'MTQ'|'PER'|'PRY'|'SUR'|'TTO'|'URY'|'VEN'|'TWN'|'CHN'|'JPN'|'KOR'|'LAO'|'MNG'|'PNG'|'PRK'|'SLB'|'TJK'|'TKM'|'BTN'|'IOT'|'MDV'|'NPL'|'PAK'|'AFG'|'BDI'|'BEN'|'CAF'|'CIV'|'COD'|'COG'|'COM'|'CPV'|'DJI'|'DZA'|'ERI'|'ESH'|'ETH'|'GAB'|'GIN'|'GMB'|'GNB'|'GNQ'|'IRN'|'IRQ'|'LBR'|'LBY'|'MDG'|'MLI'|'MRT'|'MWI'|'NER'|'RWA'|'SHN'|'SLE'|'SOM'|'SSD'|'STP'|'SYC'|'TCD'|'TGO'|'TZA'|'UGA'|'SDN'|'SYR'|'YEM'|'CUB'|'SPM'|'TCA'|'COK'|'KIR'|'NIU'|'NRU'|'PCN'|'TKL'|'TUV'|'WLF'|'WSM'|'AIA'|'ATG'|'BES'|'FLK'|'GRD'|'KNA'|'LCA'|'MSR'|'SGS'|'SXM'|'VCT'|'ASM'|'FSM'|'MHL'|'MNP'|'PLW'|'VIR'
         */
        public readonly string $countryIso,
        /**
         * 2 letter country code (ISO 3166-1)
         *
         * @var 'GB'|'IM'|'JE'|'GG'|'US'|'PR'|'GU'|'IE'|'VA'|'FR'|'GL'|'NL'|'LU'|'AT'|'GI'|'LI'|'FI'|'IS'|'CH'|'PT'|'BE'|'MC'|'IT'|'FO'|'NO'|'DK'|'SM'|'MT'|'AD'|'SE'|'DE'|'ES'|'SJ'|'BS'|'BZ'|'BM'|'CA'|'CR'|'KY'|'DO'|'GT'|'HN'|'HT'|'JM'|'MX'|'NI'|'PA'|'SV'|'VG'|'AU'|'CC'|'CX'|'FJ'|'NC'|'NF'|'NZ'|'PF'|'TO'|'VU'|'AW'|'AR'|'BL'|'BO'|'BR'|'BB'|'CL'|'CO'|'CW'|'DM'|'EC'|'GP'|'GD'|'GF'|'GY'|'MF'|'MQ'|'PE'|'PY'|'SR'|'TT'|'UY'|'VE'|'TW'|'BN'|'ID'|'KH'|'MM'|'MY'|'PH'|'SG'|'TH'|'TL'|'VN'|'AL'|'AM'|'AZ'|'BG'|'BA'|'BY'|'CY'|'CZ'|'EE'|'GE'|'GR'|'HR'|'HU'|'KZ'|'KG'|'XK'|'LT'|'LV'|'MD'|'MK'|'ME'|'PL'|'RO'|'RU'|'RS'|'SK'|'SI'|'TR'|'UA'|'UZ'|'HK'|'BD'|'IN'|'LK'|'MO'|'AO'|'AE'|'BF'|'BH'|'BW'|'CM'|'EG'|'GH'|'IL'|'JO'|'KE'|'KW'|'LB'|'LS'|'MA'|'MZ'|'MU'|'YT'|'NA'|'NG'|'OM'|'QA'|'RE'|'SA'|'SN'|'SZ'|'TN'|'ZA'|'ZM'|'ZW'|'CN'|'JP'|'KR'|'LA'|'MN'|'PG'|'KP'|'SB'|'TJ'|'TM'|'BT'|'IO'|'MV'|'NP'|'PK'|'AF'|'BI'|'BJ'|'CF'|'CI'|'CD'|'CG'|'KM'|'CV'|'DJ'|'DZ'|'ER'|'EH'|'ET'|'GA'|'GN'|'GM'|'GW'|'GQ'|'IR'|'IQ'|'LR'|'LY'|'MG'|'ML'|'MR'|'MW'|'NE'|'RW'|'SH'|'SL'|'SO'|'SS'|'ST'|'SC'|'TD'|'TG'|'TZ'|'UG'|'SD'|'SY'|'YE'|'CU'|'PM'|'TC'|'CK'|'KI'|'NU'|'NR'|'PN'|'TK'|'TV'|'WF'|'WS'|'AI'|'AG'|'BQ'|'FK'|'KN'|'LC'|'MS'|'GS'|'SX'|'VC'|'AS'|'FM'|'MH'|'MP'|'PW'|'VI'
         */
        public readonly string $countryIso2,
        /**
         * Full country names (ISO 3166)
         *
         * @var 'United Kingdom'|'England'|'Scotland'|'Wales'|'Northern Ireland'|'Isle of Man'|'Jersey'|'Guernsey'|'Channel Islands'|'Guam'|'United States'|'Puerto Rico'|'Ireland'|'Vatican City'|'France'|'Greenland'|'Netherlands'|'Luxembourg'|'Austria'|'Gibraltar'|'Liechtenstein'|'Finland'|'Iceland'|'Switzerland'|'Portugal'|'Belgium'|'Monaco'|'Italy'|'Faroe Islands'|'Norway'|'Denmark'|'San Marino'|'Malta'|'Andorra'|'Sweden'|'Germany'|'Spain'|'Svalbard and Jan Mayen'|'Bahamas'|'Belize'|'Bermuda'|'Canada'|'Costa Rica'|'Cayman Islands'|'Dominican Republic'|'Guatemala'|'Honduras'|'Haiti'|'Jamaica'|'Mexico'|'Nicaragua'|'Panama'|'El Salvador'|'British Virgin Islands'|'Australia'|'Cocos (Keeling) Islands'|'Christmas Island'|'Fiji'|'New Caledonia'|'Norfolk Island'|'New Zealand'|'French Polynesia'|'Tonga'|'Vanuatu'|'Aruba'|'Argentina'|'Saint Barthélemy'|'Bolivia'|'Brazil'|'Barbados'|'Chile'|'Colombia'|'Curaçao'|'Dominica'|'Ecuador'|'Guadeloupe'|'Grenada'|'French Guiana'|'Guyana'|'Saint Martin (French part)'|'Martinique'|'Peru'|'Paraguay'|'Suriname'|'Trinidad and Tobago'|'Uruguay'|'Venezuela'|'Taiwan'|'Brunei Darussalam'|'Indonesia'|'Cambodia'|'Myanmar'|'Malaysia'|'Philippines'|'Singapore'|'Thailand'|'Timor-Leste'|'Vietnam'|'Albania'|'Armenia'|'Azerbaijan'|'Bulgaria'|'Bosnia and Herzegovina'|'Belarus'|'Cyprus'|'Czech Republic'|'Estonia'|'Georgia'|'Greece'|'Croatia'|'Hungary'|'Kazakhstan'|'Kyrgyzstan'|'Kosovo'|'Lithuania'|'Latvia'|'Moldova'|'North Macedonia'|'Montenegro'|'Poland'|'Romania'|'Russia'|'Serbia'|'Slovakia'|'Slovenia'|'Turkey'|'Ukraine'|'Uzbekistan'|'Hong Kong'|'Bangladesh'|'India'|'Sri Lanka'|'Macau'|'Angola'|'United Arab Emirates'|'Burkina Faso'|'Bahrain'|'Botswana'|'Cameroon'|'Egypt'|'Ghana'|'Israel'|'Jordan'|'Kenya'|'Kuwait'|'Lebanon'|'Lesotho'|'Morocco'|'Mozambique'|'Mauritius'|'Mayotte'|'Namibia'|'Nigeria'|'Oman'|'Qatar'|'Réunion'|'Saudi Arabia'|'Senegal'|'Eswatini'|'Tunisia'|'South Africa'|'Zambia'|'Zimbabwe'|'China'|'Japan'|'South Korea'|'Laos'|'Mongolia'|'Papua New Guinea'|'North Korea'|'Solomon Islands'|'Tajikistan'|'Turkmenistan'|'Bhutan'|'British Indian Ocean Territory'|'Maldives'|'Nepal'|'Pakistan'|'Afghanistan'|'Burundi'|'Benin'|'Central African Republic'|'Côte d\'Ivoire'|'Democratic Republic of the Congo'|'Republic of the Congo'|'Comoros'|'Cape Verde'|'Djibouti'|'Algeria'|'Eritrea'|'Western Sahara'|'Ethiopia'|'Gabon'|'Guinea'|'Gambia'|'Guinea-Bissau'|'Equatorial Guinea'|'Iran'|'Iraq'|'Liberia'|'Libya'|'Madagascar'|'Mali'|'Mauritania'|'Malawi'|'Niger'|'Rwanda'|'Saint Helena'|'Sierra Leone'|'Somalia'|'South Sudan'|'São Tomé and Príncipe'|'Seychelles'|'Chad'|'Togo'|'Tanzania'|'Uganda'|'Sudan'|'Syria'|'Yemen'|'Cuba'|'Saint Pierre and Miquelon'|'Turks and Caicos Islands'|'Cook Islands'|'Kiribati'|'Niue'|'Nauru'|'Pitcairn Islands'|'Tokelau'|'Tuvalu'|'Wallis and Futuna'|'Samoa'|'Anguilla'|'Antigua and Barbuda'|'Bonaire, Sint Eustatius and Saba'|'Falkland Islands (Malvinas)'|'Saint Kitts and Nevis'|'Saint Lucia'|'Montserrat'|'South Georgia and the South Sandwich Islands'|'Sint Maarten (Dutch part)'|'Saint Vincent and the Grenadines'|'American Samoa'|'Federated States of Micronesia'|'Marshall Islands'|'Northern Mariana Islands'|'Palau'|'United States Virgin Islands'
         */
        public readonly string $country,
        /**
         * Language represented by 2 letter ISO Code (639-1)
         *
         * @var 'en'|'ar'|'as'|'az'|'be'|'bg'|'bn'|'bs'|'ca'|'cs'|'cy'|'da'|'de'|'el'|'es'|'et'|'eu'|'fi'|'fo'|'fr'|'ga'|'gl'|'gn'|'he'|'hi'|'hr'|'hu'|'hy'|'id'|'is'|'it'|'ja'|'ka'|'kk'|'km'|'kn'|'ko'|'lt'|'lv'|'mk'|'mn'|'ms'|'mt'|'my'|'nl'|'no'|'pl'|'pt'|'rm'|'ro'|'ru'|'sk'|'sl'|'sq'|'sr'|'sv'|'ta'|'th'|'tr'|'uk'|'uz'|'vi'|'wa'|'zh'
         */
        public readonly string $language,
        /**
         * Building, house, rural route, contract box or PO Box number. The numeric or alphanumeric component of an address preceding the street name.
         */
        public readonly string $primaryNumber,
        /**
         * Number of the subunit, apartment, suite etc.
         */
        public readonly string $secondaryNumber,
        /**
         * 4-digit ZIP add-on code. USPS addresses only.
         */
        public readonly string $plus4Code,
        /**
         * The primary delivery line (usually the street address) of the address.
         */
        public readonly string $line1,
        /**
         * Secondary delivery line of the address. Typically populated if the first line is the firm or building name.
         */
        public readonly string $line2,
        /**
         * Final line of the address, comprising city, state or region and postal code.
         */
        public readonly string $lastLine,
        /**
         * Postal code identifying the delivery area. For US addresses this is the 5-digit ZIP Code.
         */
        public readonly string $zipCode,
        /**
         * Nine-digit code that identifies a small geographic delivery area serviceable by a single carrier; appears in the last line of the address on a mail piece. USPS addresses only.
         */
        public readonly string $zipPlus4Code,
        /**
         * Key that uniquely identifies the source dataset record. For USPS this is the Update Key Number: a database segment code (V1, V2, W1, W2, X1, X2, Y1, Y2, Z1 or Z2) followed by eight alphanumeric characters. It is fixed for the life of the record and is not used in address matching.
         */
        public readonly string $updateKeyNumber,
        /**
         * An alphabetic value identifying the type of USPS record backing the address.
         *
         * @var 'G'|'H'|'F'|'S'|'P'|'R'|'M'|''
         */
        public readonly string $recordTypeCode,
        /**
         * A 4-character ID identifying the USPS postal route for the address. The first character indicates the route type:
         */
        public readonly string $carrierRouteId,
        /**
         * A geographic direction that precedes the street name.
         */
        public readonly string $streetPreDirectionalAbbreviation,
        /**
         * The official name of the street as assigned by the local governing authority. Contains the street name only, without directionals (EAST, WEST, etc.) or suffixes (ST, DR, BLVD, etc.). May also contain literals such as PO BOX, GENERAL DELIVERY, USS, PSC or UNIT.
         */
        public readonly string $streetName,
        /**
         * Standard abbreviation for the trailing designator in a street address.
         */
        public readonly string $streetSuffixAbbreviation,
        /**
         * A geographic direction that follows the street name.
         */
        public readonly string $streetPostDirectionalAbbreviation,
        /**
         * The name of a company, building, apartment complex, shopping center or other distinguishing secondary address information.
         */
        public readonly string $buildingOrFirmName,
        /**
         * A descriptive code identifying the type of secondary range held in the secondary number field, e.g. apartment, suite or trailer.
         */
        public readonly string $addressSecondaryAbbreviation,
        /**
         * Code specifying whether the backing USPS record is a base (preferred) or alternate record.
         *
         * @var 'A'|'B'|''
         */
        public readonly string $baseAlternateCode,
        /**
         * The Locatable Address Conversion Service (LACS) indicator marks USPS records converted to the LACS system, which lets mailers convert a rural route address to a city-style address so emergency services can locate it.
         *
         * @var ''|'L'
         */
        public readonly string $lacsStatusIndicator,
        /**
         * An alphabetic value identifying the type of government agency at the delivery point and/or whether a firm is the only delivery at an address.
         *
         * @var ''|'A'|'B'|'C'|'D'|'E'|'F'|'G'
         */
        public readonly string $governmentBuildingIndicator,
        /**
         * Abbreviated name of the state, province or region. For US addresses this is the 2-character state, territory or armed forces designation ("AA", "AE" or "AP" for APO/FPO/DPO).
         */
        public readonly string $stateAbbreviation,
        /**
         * Full name of the state, province or region.
         */
        public readonly string $state,
        /**
         * Municipality City State Key. Currently blank.
         */
        public readonly string $municipalityCityStateKey,
        /**
         * An index to the USPS City State file that provides the urbanization name for this delivery range.
         */
        public readonly string $urbanizationCityStateKey,
        /**
         * An index to the USPS City State product record that provides the preferred last-line name for this address range.
         */
        public readonly string $preferredLastLineCityStateKey,
        /**
         * Name of the county, parish or equivalent administrative area. Blank for APO/FPO/DPO addresses.
         */
        public readonly string $county,
        /**
         * City or town name used for mailing; appears in the last line of the address.
         */
        public readonly string $city,
        /**
         * A standard 13-character abbreviation for a city/state name. Only used for names longer than 13 characters with a city state mailing name indicator of "Y"; blank otherwise.
         */
        public readonly string $cityAbbreviation,
        /**
         * The default preferred or alternate preferred last-line name for a ZIP Code.
         */
        public readonly string $preferredCity,
        /**
         * The type of locale identified in the city/state name. The facility may be a USPS facility, such as a post office, station or branch, or a non-postal place name.
         *
         * @var 'B'|'C'|'N'|'P'|'S'|'U'|'Y'|''
         */
        public readonly string $cityStateNameFacilityCode,
        /**
         * Describes the type of ZIP area a 5-digit ZIP Code serves, e.g. a single educational institution, post office boxes only or a single address with unusually high mail volume.
         *
         * @var ''|'M'|'P'|'U'
         */
        public readonly string $zipClassificationCode,
        /**
         * Specifies whether the city state name can be used as the last line of an address on a mail piece.
         */
        public readonly string $cityStateMailingNameIndicator,
        /**
         * Identifies where automation Carrier Route rates are available and where the commingling of automation and non-automation mail, including Enhanced Carrier Routes and 5-digit presort, on the same pallet or in the same container is allowed.
         */
        public readonly string $carrierRouteRateSortation,
        /**
         * A code assigned to USPS facilities (primarily Post Offices) to collect cost and statistical data and compile revenue and expense data.
         */
        public readonly string|float $financeNumber,
        /**
         * A standard value identifying a geographic area within the United States served by a member of the U.S. House of Representatives. Blank for APO/FPO/DPO addresses. If there is only one member of Congress within a state, the code will be "AL" (at large).
         */
        public readonly string|float $congressionalDistrictNumber,
        /**
         * The Federal Information Processing Standard (FIPS) code assigned to a given county or parish within a state. In Alaska it identifies a region within the state. Blank for APO/FPO/DPO addresses whose record type is "S", "H" or "F".
         */
        public readonly string|float $countyNumber,
        /**
         * The raw dataset record backing an address, exactly as the dataset supplies it. One schema per dataset; `dataset` on the record says which.
         *
         * @var PafAddress|MrAddress|NybAddress|PafaAddress|PafwAddress|AbAddress|AbpAddress|UspsAddress|EcadAddress|EcafAddress|HereAddress|GnafAddress|KadasterAddress|KartverketAddress|SdfiAddress|CannarAddress|FodbosaAddress|MoisAddress|UpujpAddress|BevAddress|BanAddress|SwtAddress|array<string, mixed>|null
         */
        public readonly PafAddress|MrAddress|NybAddress|PafaAddress|PafwAddress|AbAddress|AbpAddress|UspsAddress|EcadAddress|EcafAddress|HereAddress|GnafAddress|KadasterAddress|KartverketAddress|SdfiAddress|CannarAddress|FodbosaAddress|MoisAddress|UpujpAddress|BevAddress|BanAddress|SwtAddress|array|null $native,
    ) {}

    /**
     * @param  AddressArray  $attributes
     */
    public static function from(array $attributes): self
    {
        return new self(
            id: $attributes['id'] ?? throw self::missing('id'),
            dataset: $attributes['dataset'] ?? throw self::missing('dataset'),
            countryIso: $attributes['country_iso'] ?? throw self::missing('country_iso'),
            countryIso2: $attributes['country_iso_2'] ?? throw self::missing('country_iso_2'),
            country: $attributes['country'] ?? throw self::missing('country'),
            language: $attributes['language'] ?? throw self::missing('language'),
            primaryNumber: $attributes['primary_number'] ?? throw self::missing('primary_number'),
            secondaryNumber: $attributes['secondary_number'] ?? throw self::missing('secondary_number'),
            plus4Code: $attributes['plus_4_code'] ?? throw self::missing('plus_4_code'),
            line1: $attributes['line_1'] ?? throw self::missing('line_1'),
            line2: $attributes['line_2'] ?? throw self::missing('line_2'),
            lastLine: $attributes['last_line'] ?? throw self::missing('last_line'),
            zipCode: $attributes['zip_code'] ?? throw self::missing('zip_code'),
            zipPlus4Code: $attributes['zip_plus_4_code'] ?? throw self::missing('zip_plus_4_code'),
            updateKeyNumber: $attributes['update_key_number'] ?? throw self::missing('update_key_number'),
            recordTypeCode: $attributes['record_type_code'] ?? throw self::missing('record_type_code'),
            carrierRouteId: $attributes['carrier_route_id'] ?? throw self::missing('carrier_route_id'),
            streetPreDirectionalAbbreviation: $attributes['street_pre_directional_abbreviation'] ?? throw self::missing('street_pre_directional_abbreviation'),
            streetName: $attributes['street_name'] ?? throw self::missing('street_name'),
            streetSuffixAbbreviation: $attributes['street_suffix_abbreviation'] ?? throw self::missing('street_suffix_abbreviation'),
            streetPostDirectionalAbbreviation: $attributes['street_post_directional_abbreviation'] ?? throw self::missing('street_post_directional_abbreviation'),
            buildingOrFirmName: $attributes['building_or_firm_name'] ?? throw self::missing('building_or_firm_name'),
            addressSecondaryAbbreviation: $attributes['address_secondary_abbreviation'] ?? throw self::missing('address_secondary_abbreviation'),
            baseAlternateCode: $attributes['base_alternate_code'] ?? throw self::missing('base_alternate_code'),
            lacsStatusIndicator: $attributes['lacs_status_indicator'] ?? throw self::missing('lacs_status_indicator'),
            governmentBuildingIndicator: $attributes['government_building_indicator'] ?? throw self::missing('government_building_indicator'),
            stateAbbreviation: $attributes['state_abbreviation'] ?? throw self::missing('state_abbreviation'),
            state: $attributes['state'] ?? throw self::missing('state'),
            municipalityCityStateKey: $attributes['municipality_city_state_key'] ?? throw self::missing('municipality_city_state_key'),
            urbanizationCityStateKey: $attributes['urbanization_city_state_key'] ?? throw self::missing('urbanization_city_state_key'),
            preferredLastLineCityStateKey: $attributes['preferred_last_line_city_state_key'] ?? throw self::missing('preferred_last_line_city_state_key'),
            county: $attributes['county'] ?? throw self::missing('county'),
            city: $attributes['city'] ?? throw self::missing('city'),
            cityAbbreviation: $attributes['city_abbreviation'] ?? throw self::missing('city_abbreviation'),
            preferredCity: $attributes['preferred_city'] ?? throw self::missing('preferred_city'),
            cityStateNameFacilityCode: $attributes['city_state_name_facility_code'] ?? throw self::missing('city_state_name_facility_code'),
            zipClassificationCode: $attributes['zip_classification_code'] ?? throw self::missing('zip_classification_code'),
            cityStateMailingNameIndicator: $attributes['city_state_mailing_name_indicator'] ?? throw self::missing('city_state_mailing_name_indicator'),
            carrierRouteRateSortation: $attributes['carrier_route_rate_sortation'] ?? throw self::missing('carrier_route_rate_sortation'),
            financeNumber: $attributes['finance_number'] ?? throw self::missing('finance_number'),
            congressionalDistrictNumber: $attributes['congressional_district_number'] ?? throw self::missing('congressional_district_number'),
            countyNumber: $attributes['county_number'] ?? throw self::missing('county_number'),
            native: isset($attributes['native']) ? NativeRecord::from($attributes['native']) : null,
        );
    }

    public function toArray(): array
    {
        $array = [
            'id' => $this->id,
            'dataset' => $this->dataset,
            'country_iso' => $this->countryIso,
            'country_iso_2' => $this->countryIso2,
            'country' => $this->country,
            'language' => $this->language,
            'primary_number' => $this->primaryNumber,
            'secondary_number' => $this->secondaryNumber,
            'plus_4_code' => $this->plus4Code,
            'line_1' => $this->line1,
            'line_2' => $this->line2,
            'last_line' => $this->lastLine,
            'zip_code' => $this->zipCode,
            'zip_plus_4_code' => $this->zipPlus4Code,
            'update_key_number' => $this->updateKeyNumber,
            'record_type_code' => $this->recordTypeCode,
            'carrier_route_id' => $this->carrierRouteId,
            'street_pre_directional_abbreviation' => $this->streetPreDirectionalAbbreviation,
            'street_name' => $this->streetName,
            'street_suffix_abbreviation' => $this->streetSuffixAbbreviation,
            'street_post_directional_abbreviation' => $this->streetPostDirectionalAbbreviation,
            'building_or_firm_name' => $this->buildingOrFirmName,
            'address_secondary_abbreviation' => $this->addressSecondaryAbbreviation,
            'base_alternate_code' => $this->baseAlternateCode,
            'lacs_status_indicator' => $this->lacsStatusIndicator,
            'government_building_indicator' => $this->governmentBuildingIndicator,
            'state_abbreviation' => $this->stateAbbreviation,
            'state' => $this->state,
            'municipality_city_state_key' => $this->municipalityCityStateKey,
            'urbanization_city_state_key' => $this->urbanizationCityStateKey,
            'preferred_last_line_city_state_key' => $this->preferredLastLineCityStateKey,
            'county' => $this->county,
            'city' => $this->city,
            'city_abbreviation' => $this->cityAbbreviation,
            'preferred_city' => $this->preferredCity,
            'city_state_name_facility_code' => $this->cityStateNameFacilityCode,
            'zip_classification_code' => $this->zipClassificationCode,
            'city_state_mailing_name_indicator' => $this->cityStateMailingNameIndicator,
            'carrier_route_rate_sortation' => $this->carrierRouteRateSortation,
            'finance_number' => $this->financeNumber,
            'congressional_district_number' => $this->congressionalDistrictNumber,
            'county_number' => $this->countyNumber,
        ];

        if ($this->native !== null) {
            $array['native'] = ($this->native instanceof ResponseContract ? $this->native->toArray() : $this->native);
        }

        return $array;
    }
}
