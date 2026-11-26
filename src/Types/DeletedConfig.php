<?php

declare(strict_types=1);

/**
 * Generated from the OpenAPI spec. Do not edit.
 */

namespace AddressZen\Types;

use AddressZen\Concerns\ArrayAccessible;
use AddressZen\Contracts\ResponseContract;

/**
 * DeleteConfigResponseResult
 *
 * @phpstan-type DeletedConfigArray array{deleted: int}
 *
 * @implements ResponseContract<DeletedConfigArray>
 */
final class DeletedConfig implements ResponseContract
{
    /** @use ArrayAccessible<DeletedConfigArray> */
    use ArrayAccessible;

    private function __construct(
        public readonly int $deleted,
    ) {}

    /**
     * @param  DeletedConfigArray  $attributes
     */
    public static function from(array $attributes): self
    {
        return new self(
            deleted: $attributes['deleted'] ?? throw self::missing('deleted'),
        );
    }

    public function toArray(): array
    {
        return [
            'deleted' => $this->deleted,
        ];
    }
}
