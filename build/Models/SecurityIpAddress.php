<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityIpAddress
 */
class SecurityIpAddress
{
    public function __construct(
        /** The details about the autonomous system to which this IP address belongs. */
        public ?string $autonomousSystem = null,
        /** The country/region for this IP address. */
        public ?string $countryOrRegion = null,
        /** The hosting company listed for this host. */
        public ?string $hostingProvider = null,
        /** The block of IP addresses this IP address belongs to. */
        public ?string $netblock = null
    ) {}
}
