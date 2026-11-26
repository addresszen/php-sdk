<?php

declare(strict_types=1);

/**
 * Generated from the OpenAPI spec. Do not edit.
 */

namespace AddressZen\Responses;

use AddressZen\Concerns\ArrayAccessible;
use AddressZen\Contracts\ResponseContract;
use AddressZen\Types\UsaVerifyMatch;
use AddressZen\Types\UsaVerifyNoMatch;

/**
 * Address Verify Response
 *
 * @phpstan-import-type UsaVerifyMatchArray from UsaVerifyMatch
 * @phpstan-import-type UsaVerifyNoMatchArray from UsaVerifyNoMatch
 * @phpstan-type VerifyResponseArray array{code: 2000, message: 'Success', result: UsaVerifyMatchArray|UsaVerifyNoMatchArray}
 *
 * @implements ResponseContract<VerifyResponseArray>
 */
final class VerifyResponse implements ResponseContract
{
    /** @use ArrayAccessible<VerifyResponseArray> */
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
        public readonly UsaVerifyMatch|UsaVerifyNoMatch $result,
    ) {}

    /**
     * @param  VerifyResponseArray  $attributes
     */
    public static function from(array $attributes): self
    {
        return new self(
            code: $attributes['code'] ?? throw self::missing('code'),
            message: $attributes['message'] ?? throw self::missing('message'),
            result: self::hydrateResult(($attributes['result'] ?? throw self::missing('result'))),
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

    /**
     * @param  UsaVerifyMatchArray|UsaVerifyNoMatchArray  $value
     */
    private static function hydrateResult(array $value): UsaVerifyMatch|UsaVerifyNoMatch
    {
        if (self::matches($value, ['match' => [null]], [])) {
            /** @var UsaVerifyNoMatchArray $variant */
            $variant = $value;

            return UsaVerifyNoMatch::from($variant);
        }

        /** @var UsaVerifyMatchArray $variant */
        $variant = $value;

        return UsaVerifyMatch::from($variant);
    }
}
