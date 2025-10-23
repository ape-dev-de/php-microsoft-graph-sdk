<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityCloudLogonSessionEvidence
 */
class SecurityCloudLogonSessionEvidence
{
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
     * The account associated with the sign-in session.
     * @var SecurityUserEvidence|\stdClass|null
     */
    public mixed $account = null;

    /** The browser that is used for the sign-in, if known. */
    public ?string $browser = null;

    /** The friendly name of the device, if known. */
    public ?string $deviceName = null;

    /** The operating system that the device is running, if known. */
    public ?string $operatingSystem = null;

    /** The previous sign-in time for this account, if known. */
    public ?\DateTimeInterface $previousLogonDateTime = null;

    /** The authentication protocol that is used in this session, if known. */
    public ?string $protocol = null;

    /** The session ID for the account reported in the alert. */
    public ?string $sessionId = null;

    /** The session start time, if known. */
    public ?\DateTimeInterface $startUtcDateTime = null;

    /** The user agent that is used for the sign-in, if known. */
    public ?string $userAgent = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
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
        if (isset($data['browser'])) {
            $this->browser = $data['browser'];
        }
        if (isset($data['deviceName'])) {
            $this->deviceName = $data['deviceName'];
        }
        if (isset($data['operatingSystem'])) {
            $this->operatingSystem = $data['operatingSystem'];
        }
        if (isset($data['previousLogonDateTime'])) {
            $this->previousLogonDateTime = is_string($data['previousLogonDateTime']) ? new \DateTimeImmutable($data['previousLogonDateTime']) : $data['previousLogonDateTime'];
        }
        if (isset($data['protocol'])) {
            $this->protocol = $data['protocol'];
        }
        if (isset($data['sessionId'])) {
            $this->sessionId = $data['sessionId'];
        }
        if (isset($data['startUtcDateTime'])) {
            $this->startUtcDateTime = is_string($data['startUtcDateTime']) ? new \DateTimeImmutable($data['startUtcDateTime']) : $data['startUtcDateTime'];
        }
        if (isset($data['userAgent'])) {
            $this->userAgent = $data['userAgent'];
        }
    }
}
