<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecuritySasTokenEvidence
 */
class SecuritySasTokenEvidence
{
    public function __construct(
        /** The date and time when the evidence was created and added to the alert. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** @var string[] Detailed description of the entity role/s in an alert. Values are free-form. */
        public array $detailedRoles = [],
        /**  */
        public ?string $remediationStatus = null,
        /** Details about the remediation status. */
        public ?string $remediationStatusDetails = null,
        /** The role/s that an evidence entity represents in an alert, for example, an IP address that is associated with an attacker has the evidence role Attacker. */
        public array $roles = [],
        /** @var string[] Array of custom tags associated with an evidence instance, for example, to denote a group of devices, high-value assets, etc. */
        public array $tags = [],
        /**  */
        public ?string $verdict = null,
        /**  */
        public ?string $allowedIpAddresses = null,
        /** @var string[]  */
        public array $allowedResourceTypes = [],
        /** @var string[]  */
        public array $allowedServices = [],
        /**  */
        public ?\DateTimeInterface $expiryDateTime = null,
        /** @var string[]  */
        public array $permissions = [],
        /**  */
        public ?string $protocol = null,
        /**  */
        public ?string $signatureHash = null,
        /**  */
        public ?string $signedWith = null,
        /**  */
        public ?\DateTimeInterface $startDateTime = null,
        /**  */
        public ?string $storageResource = null
    ) {}
}
