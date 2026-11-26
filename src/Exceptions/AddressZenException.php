<?php

declare(strict_types=1);

namespace AddressZen\Exceptions;

use Throwable;

/**
 * Every exception the SDK throws implements this, so one catch covers them all.
 */
interface AddressZenException extends Throwable {}
