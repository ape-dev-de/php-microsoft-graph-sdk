<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHost
 */
class SecurityHost
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The first date and time when this host was observed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $firstSeenDateTime = null,
        /** The most recent date and time when this host was observed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $lastSeenDateTime = null,
        /** The hostPairs that are resources associated with a host, where that host is the parentHost and has an outgoing pairing to a childHost. */
        public array $childHostPairs = [],
        /** The hostComponents that are associated with this host. */
        public array $components = [],
        /** The hostCookies that are associated with this host. */
        public array $cookies = [],
        /** The hostPairs that are associated with this host, where this host is either the parentHost or childHost. */
        public array $hostPairs = [],
        /** The hostPairs that are associated with a host, where that host is the childHost and has an incoming pairing with a parentHost. */
        public array $parentHostPairs = [],
        /** Passive DNS retrieval about this host. */
        public array $passiveDns = [],
        /** Reverse passive DNS retrieval about this host. */
        public array $passiveDnsReverse = [],
        /** The hostPorts associated with a host. */
        public array $ports = [],
        /** Represents a calculated reputation of this host. */
        public ?string $reputation = null,
        /** The hostSslCertificates that are associated with this host. */
        public array $sslCertificates = [],
        /** The subdomains that are associated with this host. */
        public array $subdomains = [],
        /** The hostTrackers that are associated with this host. */
        public array $trackers = [],
        /** The most recent whoisRecord for this host. */
        public ?string $whois = null
    ) {}
}
