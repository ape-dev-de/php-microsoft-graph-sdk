<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IpNamedLocation
 */
class IpNamedLocation
{
    public function __construct(
        /** List of IP address ranges in IPv4 CIDR format (for example, 1.2.3.4/32) or any allowable IPv6 format from IETF RFC5969. Required. */
        public array $ipRanges = [],
        /** true if this location is explicitly trusted. Optional. Default value is false. */
        public ?string $isTrusted = null
    ) {}
}
