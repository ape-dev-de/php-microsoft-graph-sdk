<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SelfSignedCertificate
 */
class SelfSignedCertificate
{
    public function __construct(
        /** Custom key identifier. */
        public ?string $customKeyIdentifier = null,
        /** The friendly name for the key. */
        public ?string $displayName = null,
        /** The date and time at which the credential expires. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on January 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $endDateTime = null,
        /** The value for the key credential. Should be a Base-64 encoded value. */
        public ?string $key = null,
        /** The unique identifier (GUID) for the key. */
        public ?string $keyId = null,
        /** The date and time at which the credential becomes valid. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on January 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $startDateTime = null,
        /** The thumbprint value for the key. */
        public ?string $thumbprint = null,
        /** The type of key credential. AsymmetricX509Cert. */
        public ?string $type = null,
        /** A string that describes the purpose for which the key can be used. The possible value is Verify. */
        public ?string $usage = null
    ) {}
}
