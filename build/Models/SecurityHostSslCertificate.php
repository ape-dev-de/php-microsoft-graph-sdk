<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHostSslCertificate
 */
class SecurityHostSslCertificate
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The first date and time when this hostSslCertificate was observed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $firstSeenDateTime = null,
        /** The most recent date and time when this hostSslCertificate was observed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $lastSeenDateTime = null,
        /** The ports related with this hostSslCertificate. */
        public array $ports = [],
        /** The host for this hostSslCertificate. */
        public ?SecurityHost $host = null,
        /** The sslCertificate for this hostSslCertificate. */
        public ?SecuritySslCertificate $sslCertificate = null
    ) {}
}
