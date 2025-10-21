<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHostPortBanner
 */
class SecurityHostPortBanner
{
    public function __construct(
        /** The text response received from a web component when scanning a hostPort. */
        public ?string $banner = null,
        /** The first date and time when Microsoft Defender Threat Intelligence observed the hostPortBanner. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $firstSeenDateTime = null,
        /** The last date and time when Microsoft Defender Threat Intelligence observed the hostPortBanner. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $lastSeenDateTime = null,
        /** The specific protocol used to scan the hostPort. */
        public ?string $scanProtocol = null,
        /** The total amount of times that Microsoft Defender Threat Intelligence has observed the hostPortBanner in all its scans. */
        public ?float $timesObserved = null
    ) {}
}
