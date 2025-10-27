<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityRegistryValueEvidence
 */
class SecurityRegistryValueEvidence
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The date and time when the evidence was created and added to the alert. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** 
     * Detailed description of the entity role/s in an alert. Values are free-form.
     * @var string[]
     */
    public array $detailedRoles = [];

    /**  */
    public ?SecurityEvidenceRemediationStatus $remediationStatus = null;

    /** Details about the remediation status. */
    public ?string $remediationStatusDetails = null;

    /** 
     * The role/s that an evidence entity represents in an alert, for example, an IP address that is associated with an attacker has the evidence role Attacker.
     * @var SecurityEvidenceRole[]
     */
    public array $roles = [];

    /** 
     * Array of custom tags associated with an evidence instance, for example, to denote a group of devices, high-value assets, etc.
     * @var string[]
     */
    public array $tags = [];

    /**  */
    public ?SecurityEvidenceVerdict $verdict = null;

    /** A unique identifier assigned to a device by Microsoft Defender for Endpoint. */
    public ?string $mdeDeviceId = null;

    /** Registry hive of the key that the recorded action was applied to. */
    public ?string $registryHive = null;

    /** Registry key that the recorded action was applied to. */
    public ?string $registryKey = null;

    /** Data of the registry value that the recorded action was applied to. */
    public ?string $registryValue = null;

    /** Name of the registry value that the recorded action was applied to. */
    public ?string $registryValueName = null;

    /** Data type, such as binary or string, of the registry value that the recorded action was applied to. */
    public ?string $registryValueType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['detailedRoles'])) {
            $this->detailedRoles = $data['detailedRoles'];
        }
        if (isset($data['remediationStatus'])) {
            $this->remediationStatus = is_array($data['remediationStatus']) ? new SecurityEvidenceRemediationStatus($data['remediationStatus']) : $data['remediationStatus'];
        }
        if (isset($data['remediationStatusDetails'])) {
            $this->remediationStatusDetails = $data['remediationStatusDetails'];
        }
        if (isset($data['roles'])) {
            $this->roles = $data['roles'];
        }
        if (isset($data['tags'])) {
            $this->tags = $data['tags'];
        }
        if (isset($data['verdict'])) {
            $this->verdict = is_array($data['verdict']) ? new SecurityEvidenceVerdict($data['verdict']) : $data['verdict'];
        }
        if (isset($data['mdeDeviceId'])) {
            $this->mdeDeviceId = $data['mdeDeviceId'];
        }
        if (isset($data['registryHive'])) {
            $this->registryHive = $data['registryHive'];
        }
        if (isset($data['registryKey'])) {
            $this->registryKey = $data['registryKey'];
        }
        if (isset($data['registryValue'])) {
            $this->registryValue = $data['registryValue'];
        }
        if (isset($data['registryValueName'])) {
            $this->registryValueName = $data['registryValueName'];
        }
        if (isset($data['registryValueType'])) {
            $this->registryValueType = $data['registryValueType'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
