<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHostSslCertificatePort
 */
class SecurityHostSslCertificatePort
{
    public function __construct(
        /** The first date and time when this port was observed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $firstSeenDateTime = null,
        /** The most recent date and time when this port was observed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $lastSeenDateTime = null,
        /** The port number. */
        public ?float $port = null
    ) {}
}
