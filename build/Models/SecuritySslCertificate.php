<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecuritySslCertificate
 */
class SecuritySslCertificate
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The date and time when a certificate expires. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $expirationDateTime = null,
        /** A hash of the certificate calculated on the data and signature. */
        public ?string $fingerprint = null,
        /** The first date and time when this sslCertificate was observed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $firstSeenDateTime = null,
        /** The date and time when a certificate was issued. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $issueDateTime = null,
        /** The entity that grants this certificate. */
        public ?SecuritySslCertificateEntity $issuer = null,
        /** The most recent date and time when this sslCertificate was observed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $lastSeenDateTime = null,
        /** The serial number associated with an SSL certificate. */
        public ?string $serialNumber = null,
        /** A SHA-1 hash of the certificate. Note: This is not the signature. */
        public ?string $sha1 = null,
        /** The person, site, machine, and so on, this certificate is for. */
        public ?SecuritySslCertificateEntity $subject = null,
        /** The host resources related with this sslCertificate. */
        public array $relatedHosts = []
    ) {}
}
