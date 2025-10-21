<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProxiedDomain
 */
class ProxiedDomain
{
    public function __construct(
        /** The IP address or FQDN */
        public ?string $ipAddressOrFQDN = null,
        /** Proxied Domain */
        public ?string $proxy = null
    ) {}
}
