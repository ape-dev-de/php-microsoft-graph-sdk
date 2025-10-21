<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IPv4CidrRange
 */
class IPv4CidrRange
{
    public function __construct(
        /** IPv4 address in CIDR notation. Not nullable. */
        public ?string $cidrAddress = null
    ) {}
}
