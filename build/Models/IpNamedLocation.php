<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IpNamedLocation
 */
class IpNamedLocation
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The Timestamp type represents creation date and time of the location using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Human-readable name of the location. */
        public ?string $displayName = null,
        /** The Timestamp type represents last modified date and time of the location using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
        public ?\DateTimeInterface $modifiedDateTime = null,
        /** List of IP address ranges in IPv4 CIDR format (for example, 1.2.3.4/32) or any allowable IPv6 format from IETF RFC5969. Required. */
        public array $ipRanges = [],
        /** true if this location is explicitly trusted. Optional. Default value is false. */
        public ?bool $isTrusted = null
    ) {}
}
