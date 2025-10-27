<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExchangeProtectionPolicy
 */
class ExchangeProtectionPolicy
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The identity of person who created the policy.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $createdBy = null;

    /** The time of creation of the policy. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The name of the policy to be created. */
    public ?string $displayName = null;

    /** 
     * The identity of the person who last modified the policy.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $lastModifiedBy = null;

    /** The timestamp of the last modification of the policy. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * Contains the retention setting details for the policy.
     * @var RetentionSetting[]
     */
    public array $retentionSettings = [];

    /** 
     * The aggregated status of the protection units associated with the policy. The possible values are: inactive, activeWithErrors, updating, active, unknownFutureValue.
     * @var ProtectionPolicyStatus|\stdClass|null
     */
    public ProtectionPolicyStatus|\stdClass|null $status = null;

    /** 
     * The rules associated with the Exchange protection policy.
     * @var MailboxProtectionRule[]
     */
    public array $mailboxInclusionRules = [];

    /** 
     * The protection units (mailboxes) that are  protected under the Exchange protection policy.
     * @var MailboxProtectionUnit[]
     */
    public array $mailboxProtectionUnits = [];

    /** 
     * 
     * @var MailboxProtectionUnitsBulkAdditionJob[]
     */
    public array $mailboxProtectionUnitsBulkAdditionJobs = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = is_array($data['createdBy']) ? new IdentitySet($data['createdBy']) : $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = is_array($data['lastModifiedBy']) ? new IdentitySet($data['lastModifiedBy']) : $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['retentionSettings'])) {
            $this->retentionSettings = $data['retentionSettings'];
        }
        if (isset($data['status'])) {
            $this->status = is_string($data['status']) ? ProtectionPolicyStatus::tryFrom($data['status']) : $data['status'];
        }
        if (isset($data['mailboxInclusionRules'])) {
            $this->mailboxInclusionRules = $data['mailboxInclusionRules'];
        }
        if (isset($data['mailboxProtectionUnits'])) {
            $this->mailboxProtectionUnits = $data['mailboxProtectionUnits'];
        }
        if (isset($data['mailboxProtectionUnitsBulkAdditionJobs'])) {
            $this->mailboxProtectionUnitsBulkAdditionJobs = $data['mailboxProtectionUnitsBulkAdditionJobs'];
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
