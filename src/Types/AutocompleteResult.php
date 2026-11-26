<?php

declare(strict_types=1);

/**
 * Generated from the OpenAPI spec. Do not edit.
 */

namespace AddressZen\Types;

use AddressZen\Concerns\ArrayAccessible;
use AddressZen\Contracts\ResponseContract;

/**
 * AutocompleteResponseResult
 *
 * @phpstan-import-type AddressSuggestionArray from AddressSuggestion
 * @phpstan-type AutocompleteResultArray array{hits: list<AddressSuggestionArray>}
 *
 * @implements ResponseContract<AutocompleteResultArray>
 */
final class AutocompleteResult implements ResponseContract
{
    /** @use ArrayAccessible<AutocompleteResultArray> */
    use ArrayAccessible;

    private function __construct(
        /**
         * @var list<AddressSuggestion>
         */
        public readonly array $hits,
    ) {}

    /**
     * @param  AutocompleteResultArray  $attributes
     */
    public static function from(array $attributes): self
    {
        return new self(
            hits: array_map(static fn ($item) => AddressSuggestion::from($item), ($attributes['hits'] ?? throw self::missing('hits'))),
        );
    }

    public function toArray(): array
    {
        return [
            'hits' => array_map(static fn ($item) => $item->toArray(), $this->hits),
        ];
    }
}
