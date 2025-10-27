<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityProcessEvidence
 */
class SecurityProcessEvidence
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
     * The status of the detection.The possible values are: detected, blocked, prevented, unknownFutureValue.
     * @var SecurityDetectionStatus|\stdClass|null
     */
    public SecurityDetectionStatus|\stdClass|null $detectionStatus = null;

    /** 
     * Image file details.
     * @var SecurityFileDetails|\stdClass|null
     */
    public SecurityFileDetails|\stdClass|null $imageFile = null;

    /** A unique identifier assigned to a device by Microsoft Defender for Endpoint. */
    public ?string $mdeDeviceId = null;

    /** Date and time when the parent of the process was created. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $parentProcessCreationDateTime = null;

    /** Process ID (PID) of the parent process that spawned the process. */
    public ?float $parentProcessId = null;

    /** 
     * Parent process image file details.
     * @var SecurityFileDetails|\stdClass|null
     */
    public SecurityFileDetails|\stdClass|null $parentProcessImageFile = null;

    /** Command line used to create the new process. */
    public ?string $processCommandLine = null;

    /** Date and time when the process was created. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $processCreationDateTime = null;

    /** Process ID (PID) of the newly created process. */
    public ?float $processId = null;

    /** 
     * User details of the user that ran the process.
     * @var SecurityUserAccount|\stdClass|null
     */
    public SecurityUserAccount|\stdClass|null $userAccount = null;


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
        if (isset($data['detectionStatus'])) {
            $this->detectionStatus = is_array($data['detectionStatus']) ? new SecurityDetectionStatus($data['detectionStatus']) : $data['detectionStatus'];
        }
        if (isset($data['imageFile'])) {
            $this->imageFile = is_array($data['imageFile']) ? new SecurityFileDetails($data['imageFile']) : $data['imageFile'];
        }
        if (isset($data['mdeDeviceId'])) {
            $this->mdeDeviceId = $data['mdeDeviceId'];
        }
        if (isset($data['parentProcessCreationDateTime'])) {
            $this->parentProcessCreationDateTime = is_string($data['parentProcessCreationDateTime']) ? new \DateTimeImmutable($data['parentProcessCreationDateTime']) : $data['parentProcessCreationDateTime'];
        }
        if (isset($data['parentProcessId'])) {
            $this->parentProcessId = is_numeric($data['parentProcessId']) ? (float)$data['parentProcessId'] : $data['parentProcessId'];
        }
        if (isset($data['parentProcessImageFile'])) {
            $this->parentProcessImageFile = is_array($data['parentProcessImageFile']) ? new SecurityFileDetails($data['parentProcessImageFile']) : $data['parentProcessImageFile'];
        }
        if (isset($data['processCommandLine'])) {
            $this->processCommandLine = $data['processCommandLine'];
        }
        if (isset($data['processCreationDateTime'])) {
            $this->processCreationDateTime = is_string($data['processCreationDateTime']) ? new \DateTimeImmutable($data['processCreationDateTime']) : $data['processCreationDateTime'];
        }
        if (isset($data['processId'])) {
            $this->processId = is_numeric($data['processId']) ? (float)$data['processId'] : $data['processId'];
        }
        if (isset($data['userAccount'])) {
            $this->userAccount = is_array($data['userAccount']) ? new SecurityUserAccount($data['userAccount']) : $data['userAccount'];
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
