<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IPv6CidrRange
 */
class IPv6CidrRange
{
    public function __construct(
        /** IPv6 address in CIDR notation. Not nullable. */
        public ?string $cidrAddress = null
    ) {}
}
