<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHostLogonSessionEvidence
 */
class SecurityHostLogonSessionEvidence
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

    /** 
     * 
     * @var SecurityUserEvidence|\stdClass|null
     */
    public SecurityUserEvidence|\stdClass|null $account = null;

    /**  */
    public ?\DateTimeInterface $endUtcDateTime = null;

    /** 
     * 
     * @var SecurityDeviceEvidence|\stdClass|null
     */
    public SecurityDeviceEvidence|\stdClass|null $host = null;

    /**  */
    public ?string $sessionId = null;

    /**  */
    public ?\DateTimeInterface $startUtcDateTime = null;


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
        if (isset($data['account'])) {
            $this->account = is_array($data['account']) ? new SecurityUserEvidence($data['account']) : $data['account'];
        }
        if (isset($data['endUtcDateTime'])) {
            $this->endUtcDateTime = is_string($data['endUtcDateTime']) ? new \DateTimeImmutable($data['endUtcDateTime']) : $data['endUtcDateTime'];
        }
        if (isset($data['host'])) {
            $this->host = is_array($data['host']) ? new SecurityDeviceEvidence($data['host']) : $data['host'];
        }
        if (isset($data['sessionId'])) {
            $this->sessionId = $data['sessionId'];
        }
        if (isset($data['startUtcDateTime'])) {
            $this->startUtcDateTime = is_string($data['startUtcDateTime']) ? new \DateTimeImmutable($data['startUtcDateTime']) : $data['startUtcDateTime'];
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
