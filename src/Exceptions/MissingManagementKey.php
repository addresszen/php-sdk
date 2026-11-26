<?php

declare(strict_types=1);

namespace AddressZen\Exceptions;

use LogicException;

/**
 * A key, licensee or config operation was called on a client with no Management Key.
 */
final class MissingManagementKey extends LogicException implements AddressZenException
{
    public function __construct()
    {
        parent::__construct(
            'This operation needs a Management Key. Pass it as the second argument to '
            .'AddressZen::client() or with Factory::withManagementKey().',
        );
    }
}
