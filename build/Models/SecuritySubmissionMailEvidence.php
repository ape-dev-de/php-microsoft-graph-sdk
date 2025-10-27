<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecuritySubmissionMailEvidence
 */
class SecuritySubmissionMailEvidence
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
    public ?string $networkMessageId = null;

    /**  */
    public ?string $recipient = null;

    /**  */
    public ?string $reportType = null;

    /**  */
    public ?string $sender = null;

    /**  */
    public ?string $senderIp = null;

    /**  */
    public ?string $subject = null;

    /**  */
    public ?\DateTimeInterface $submissionDateTime = null;

    /**  */
    public ?string $submissionId = null;

    /**  */
    public ?string $submitter = null;


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
            $this->remediationStatus = is_string($data['remediationStatus']) ? SecurityEvidenceRemediationStatus::tryFrom($data['remediationStatus']) : $data['remediationStatus'];
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
            $this->verdict = is_string($data['verdict']) ? SecurityEvidenceVerdict::tryFrom($data['verdict']) : $data['verdict'];
        }
        if (isset($data['networkMessageId'])) {
            $this->networkMessageId = $data['networkMessageId'];
        }
        if (isset($data['recipient'])) {
            $this->recipient = $data['recipient'];
        }
        if (isset($data['reportType'])) {
            $this->reportType = $data['reportType'];
        }
        if (isset($data['sender'])) {
            $this->sender = $data['sender'];
        }
        if (isset($data['senderIp'])) {
            $this->senderIp = $data['senderIp'];
        }
        if (isset($data['subject'])) {
            $this->subject = $data['subject'];
        }
        if (isset($data['submissionDateTime'])) {
            $this->submissionDateTime = is_string($data['submissionDateTime']) ? new \DateTimeImmutable($data['submissionDateTime']) : $data['submissionDateTime'];
        }
        if (isset($data['submissionId'])) {
            $this->submissionId = $data['submissionId'];
        }
        if (isset($data['submitter'])) {
            $this->submitter = $data['submitter'];
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
