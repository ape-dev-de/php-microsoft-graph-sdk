<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Certification
 */
class Certification
{
    public function __construct(
        /** URL that shows certification details for the application. */
        public ?string $certificationDetailsUrl = null,
        /** The timestamp when the current certification for the application expires. */
        public ?\DateTimeInterface $certificationExpirationDateTime = null,
        /** Indicates whether the application is certified by Microsoft. */
        public ?bool $isCertifiedByMicrosoft = null,
        /** Indicates whether the application developer or publisher completed Publisher Attestation. */
        public ?bool $isPublisherAttested = null,
        /** The timestamp when the certification for the application was most recently added or updated. */
        public ?\DateTimeInterface $lastCertificationDateTime = null
    ) {}
}
