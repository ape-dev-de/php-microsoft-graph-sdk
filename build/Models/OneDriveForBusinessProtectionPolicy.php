<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OneDriveForBusinessProtectionPolicy
 */
class OneDriveForBusinessProtectionPolicy
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The identity of person who created the policy.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $createdBy = null;

    /** The time of creation of the policy. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The name of the policy to be created. */
    public ?string $displayName = null;

    /** 
     * The identity of the person who last modified the policy.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $lastModifiedBy = null;

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
    public mixed $status = null;

    /** 
     * Contains the details of the Onedrive for Business protection rule.
     * @var DriveProtectionRule[]
     */
    public array $driveInclusionRules = [];

    /** 
     * Contains the protection units associated with a  OneDrive for Business protection policy.
     * @var DriveProtectionUnit[]
     */
    public array $driveProtectionUnits = [];

    /** 
     * 
     * @var DriveProtectionUnitsBulkAdditionJob[]
     */
    public array $driveProtectionUnitsBulkAdditionJobs = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = $data['lastModifiedDateTime'];
        }
        if (isset($data['retentionSettings'])) {
            $this->retentionSettings = $data['retentionSettings'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
        if (isset($data['driveInclusionRules'])) {
            $this->driveInclusionRules = $data['driveInclusionRules'];
        }
        if (isset($data['driveProtectionUnits'])) {
            $this->driveProtectionUnits = $data['driveProtectionUnits'];
        }
        if (isset($data['driveProtectionUnitsBulkAdditionJobs'])) {
            $this->driveProtectionUnitsBulkAdditionJobs = $data['driveProtectionUnitsBulkAdditionJobs'];
        }
    }
}
