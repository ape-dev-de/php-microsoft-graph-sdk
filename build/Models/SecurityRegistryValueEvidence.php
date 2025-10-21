<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityRegistryValueEvidence
 */
class SecurityRegistryValueEvidence
{
    public function __construct(
        /** The date and time when the evidence was created and added to the alert. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** @var string[] Detailed description of the entity role/s in an alert. Values are free-form. */
        public array $detailedRoles = [],
        /**  */
        public ?SecurityEvidenceRemediationStatus $remediationStatus = null,
        /** Details about the remediation status. */
        public ?string $remediationStatusDetails = null,
        /** The role/s that an evidence entity represents in an alert, for example, an IP address that is associated with an attacker has the evidence role Attacker. */
        public array $roles = [],
        /** @var string[] Array of custom tags associated with an evidence instance, for example, to denote a group of devices, high-value assets, etc. */
        public array $tags = [],
        /**  */
        public ?SecurityEvidenceVerdict $verdict = null,
        /** A unique identifier assigned to a device by Microsoft Defender for Endpoint. */
        public ?string $mdeDeviceId = null,
        /** Registry hive of the key that the recorded action was applied to. */
        public ?string $registryHive = null,
        /** Registry key that the recorded action was applied to. */
        public ?string $registryKey = null,
        /** Data of the registry value that the recorded action was applied to. */
        public ?string $registryValue = null,
        /** Name of the registry value that the recorded action was applied to. */
        public ?string $registryValueName = null,
        /** Data type, such as binary or string, of the registry value that the recorded action was applied to. */
        public ?string $registryValueType = null
    ) {}
}
