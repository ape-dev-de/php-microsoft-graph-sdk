<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityServicePrincipalEvidence
 */
class SecurityServicePrincipalEvidence
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

    /**  */
    public ?string $appId = null;

    /**  */
    public ?string $appOwnerTenantId = null;

    /**  */
    public ?string $servicePrincipalName = null;

    /**  */
    public ?string $servicePrincipalObjectId = null;

    /** 
     * 
     * @var SecurityServicePrincipalType|\stdClass|null
     */
    public SecurityServicePrincipalType|\stdClass|null $servicePrincipalType = null;

    /**  */
    public ?string $tenantId = null;


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
        if (isset($data['appId'])) {
            $this->appId = $data['appId'];
        }
        if (isset($data['appOwnerTenantId'])) {
            $this->appOwnerTenantId = $data['appOwnerTenantId'];
        }
        if (isset($data['servicePrincipalName'])) {
            $this->servicePrincipalName = $data['servicePrincipalName'];
        }
        if (isset($data['servicePrincipalObjectId'])) {
            $this->servicePrincipalObjectId = $data['servicePrincipalObjectId'];
        }
        if (isset($data['servicePrincipalType'])) {
            $this->servicePrincipalType = is_array($data['servicePrincipalType']) ? new SecurityServicePrincipalType($data['servicePrincipalType']) : $data['servicePrincipalType'];
        }
        if (isset($data['tenantId'])) {
            $this->tenantId = $data['tenantId'];
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
