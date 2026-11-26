<?php

declare(strict_types=1);

/**
 * Generated from the OpenAPI spec. Do not edit.
 */

namespace AddressZen\Types;

use AddressZen\Concerns\ArrayAccessible;
use AddressZen\Contracts\ResponseContract;

/**
 * API Key Automated Topup
 *
 * Automated topup status
 *
 * @phpstan-type ApiKeyAutomatedTopupArray array{enabled: bool}
 *
 * @implements ResponseContract<ApiKeyAutomatedTopupArray>
 */
final class ApiKeyAutomatedTopup implements ResponseContract
{
    /** @use ArrayAccessible<ApiKeyAutomatedTopupArray> */
    use ArrayAccessible;

    private function __construct(
        /**
         * Indicates whether automated top-ups are enabled
         */
        public readonly bool $enabled,
    ) {}

    /**
     * @param  ApiKeyAutomatedTopupArray  $attributes
     */
    public static function from(array $attributes): self
    {
        return new self(
            enabled: $attributes['enabled'] ?? throw self::missing('enabled'),
        );
    }

    public function toArray(): array
    {
        return [
            'enabled' => $this->enabled,
        ];
    }
}
