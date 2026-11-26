<?php

declare(strict_types=1);

namespace AddressZen;

use AddressZen\Contracts\ClientContract;
use AddressZen\Contracts\TransporterContract;

/**
 * One method per API operation, generated from the spec into the
 * `Operations` trait.
 */
final class Client implements ClientContract
{
    use Operations;

    public function __construct(private readonly TransporterContract $transporter) {}
}
