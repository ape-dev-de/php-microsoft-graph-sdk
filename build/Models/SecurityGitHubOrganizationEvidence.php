<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityGitHubOrganizationEvidence
 */
class SecurityGitHubOrganizationEvidence
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

    /**  */
    public ?string $company = null;

    /**  */
    public ?string $displayName = null;

    /**  */
    public ?string $email = null;

    /**  */
    public ?string $login = null;

    /**  */
    public ?string $orgId = null;

    /**  */
    public ?string $webUrl = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['detailedRoles'])) {
            $this->detailedRoles = $data['detailedRoles'];
        }
        if (isset($data['remediationStatus'])) {
            $this->remediationStatus = $data['remediationStatus'];
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
            $this->verdict = $data['verdict'];
        }
        if (isset($data['company'])) {
            $this->company = $data['company'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['email'])) {
            $this->email = $data['email'];
        }
        if (isset($data['login'])) {
            $this->login = $data['login'];
        }
        if (isset($data['orgId'])) {
            $this->orgId = $data['orgId'];
        }
        if (isset($data['webUrl'])) {
            $this->webUrl = $data['webUrl'];
        }
    }
}
