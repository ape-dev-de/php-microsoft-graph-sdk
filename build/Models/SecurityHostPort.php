<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHostPort
 */
class SecurityHostPort
{
    public function __construct(
        /** The hostPortBanners retrieved from scanning the port. */
        public array $banners = [],
        /** The first date and time when Microsoft Defender Threat Intelligence observed the hostPort. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $firstSeenDateTime = null,
        /** The last date and time when Microsoft Defender Threat Intelligence scanned the hostPort. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $lastScanDateTime = null,
        /** The last date and time when Microsoft Defender Threat Intelligence observed the hostPort. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $lastSeenDateTime = null,
        /** The numerical identifier of the port which is standardized across the internet. */
        public ?float $port = null,
        /** The general protocol used to scan the port. The possible values are: tcp, udp, unknownFutureValue. */
        public ?string $protocol = null,
        /** The hostPortComponents retrieved from scanning the port. */
        public array $services = [],
        /** The status of the port. The possible values are: open, filtered, closed, unknownFutureValue. */
        public ?string $status = null,
        /** The total amount of times that Microsoft Defender Threat Intelligence has observed the hostPort in all its scans. */
        public ?float $timesObserved = null,
        /**  */
        public ?string $host = null,
        /** The most recent sslCertificate used to communicate on the port. */
        public ?string $mostRecentSslCertificate = null
    ) {}
}
