<?php

declare(strict_types=1);

/**
 * Generated from the OpenAPI spec. Do not edit.
 */

namespace AddressZen;

/**
 * Array shapes for each operation's query parameters (`…Params`) and JSON
 * body (`…Body`). The operation methods import them, so static analysis and IDEs
 * know every accepted key. Keys are the API's own parameter names.
 *
 * @phpstan-type UpdateKeyDetailsBody array{name?: string, daily_limit?: array<string, mixed>, monthly_limit?: array<string, mixed>, individual_limit?: array<string, mixed>, allowed_urls?: string|list<string>, redact_days?: int, notifications?: array<string, mixed>, ip_forwarding?: bool, datasets?: array<string, mixed>}
 * @phpstan-type KeyUsageParams array{start?: int|null, end?: int|null, tags?: string|list<string>|null, licensee?: string|null}
 * @phpstan-type KeyLogsParams array{start?: int|null, end?: int|null, licensee?: string|null}
 * @phpstan-type AddressVerifyParams array{tags?: string|list<string>|null, remove_firm?: 'true'|null, context?: string|null}
 * @phpstan-type AddressVerifyBody array{query: string, zip_code?: string, city?: string, state?: string}
 * @phpstan-type FindAddressParams array{query?: string|null, dataset?: string|list<string>|null, context?: string|null, limit?: int|null, bias_lonlat?: string|null, bias_ip?: 'true'|null, box?: string|list<string>|null, postal_code?: string|null, postal_code_2?: string|null, postal_code_3?: string|null, city?: string|null, state?: string|null, state_code?: string|null, bias_postal_code?: string|null, bias_postal_code_2?: string|null, bias_postal_code_3?: string|null, bias_city?: string|null, bias_state?: string|null, bias_state_code?: string|null, is_pobox?: 'true'|'false'|null, is_business?: 'true'|'false'|null}
 * @phpstan-type RetrieveAddressParams array{licensee?: string|null, filter?: string|list<string>|null, tags?: string|list<string>|null, remove_firm?: 'true'|null}
 * @phpstan-type FindPlaceParams array{query?: string|null, country_iso?: string|list<string>|null, bias_country_iso?: string|list<string>|null, bias_lonlat?: string|null, bias_ip?: 'true'|null}
 * @phpstan-type ResolvePlaceParams array{tags?: string|list<string>|null}
 * @phpstan-type ListLicenseesParams array{starting_after?: string|null, limit?: int|null, query?: string|null}
 * @phpstan-type CreateLicenseeBody array{name?: string, address?: string, postcode?: string, whitelist?: string|list<string>, daily?: array<string, mixed>}
 * @phpstan-type UpdateLicenseeBody array{name?: string, address?: string, postcode?: string, whitelist?: string|list<string>, daily?: array<string, mixed>}
 * @phpstan-type CreateConfigBody array{name: string, payload: string}
 * @phpstan-type UpdateConfigBody array{payload?: string}
 * @phpstan-type EmailValidationParams array{query: string, tags?: string|list<string>|null}
 * @phpstan-type PhoneNumberValidationParams array{query: string, current_carrier?: 'true'|null, tags?: string|list<string>|null}
 */
final class Params
{
    private function __construct() {}
}
