<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Windows81CompliancePolicy
 */
class Windows81CompliancePolicy
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** DateTime the object was created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Admin provided description of the Device Configuration. */
    public ?string $description = null;

    /** Admin provided name of the device configuration. */
    public ?string $displayName = null;

    /** DateTime the object was last modified. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** Version of the device configuration. */
    public ?float $version = null;

    /** 
     * The collection of assignments for this compliance policy.
     * @var DeviceCompliancePolicyAssignment[]
     */
    public array $assignments = [];

    /** 
     * Compliance Setting State Device Summary
     * @var SettingStateDeviceSummary[]
     */
    public array $deviceSettingStateSummaries = [];

    /** 
     * List of DeviceComplianceDeviceStatus.
     * @var DeviceComplianceDeviceStatus[]
     */
    public array $deviceStatuses = [];

    /** 
     * Device compliance devices status overview
     * @var DeviceComplianceDeviceOverview|\stdClass|null
     */
    public DeviceComplianceDeviceOverview|\stdClass|null $deviceStatusOverview = null;

    /** 
     * The list of scheduled action per rule for this compliance policy. This is a required property when creating any individual per-platform compliance policies.
     * @var DeviceComplianceScheduledActionForRule[]
     */
    public array $scheduledActionsForRule = [];

    /** 
     * List of DeviceComplianceUserStatus.
     * @var DeviceComplianceUserStatus[]
     */
    public array $userStatuses = [];

    /** 
     * Device compliance users status overview
     * @var DeviceComplianceUserOverview|\stdClass|null
     */
    public DeviceComplianceUserOverview|\stdClass|null $userStatusOverview = null;

    /** Maximum Windows 8.1 version. */
    public ?string $osMaximumVersion = null;

    /** Minimum Windows 8.1 version. */
    public ?string $osMinimumVersion = null;

    /** Indicates whether or not to block simple password. */
    public ?bool $passwordBlockSimple = null;

    /** Password expiration in days. */
    public ?float $passwordExpirationDays = null;

    /** The number of character sets required in the password. */
    public ?float $passwordMinimumCharacterSetCount = null;

    /** The minimum password length. */
    public ?float $passwordMinimumLength = null;

    /** Minutes of inactivity before a password is required. */
    public ?float $passwordMinutesOfInactivityBeforeLock = null;

    /** The number of previous passwords to prevent re-use of. Valid values 0 to 24 */
    public ?float $passwordPreviousPasswordBlockCount = null;

    /** Require a password to unlock Windows device. */
    public ?bool $passwordRequired = null;

    /**  */
    public ?RequiredPasswordType $passwordRequiredType = null;

    /** Indicates whether or not to require encryption on a windows 8.1 device. */
    public ?bool $storageRequireEncryption = null;


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
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['version'])) {
            $this->version = $data['version'];
        }
        if (isset($data['assignments'])) {
            $this->assignments = $data['assignments'];
        }
        if (isset($data['deviceSettingStateSummaries'])) {
            $this->deviceSettingStateSummaries = $data['deviceSettingStateSummaries'];
        }
        if (isset($data['deviceStatuses'])) {
            $this->deviceStatuses = $data['deviceStatuses'];
        }
        if (isset($data['deviceStatusOverview'])) {
            $this->deviceStatusOverview = is_array($data['deviceStatusOverview']) ? new DeviceComplianceDeviceOverview($data['deviceStatusOverview']) : $data['deviceStatusOverview'];
        }
        if (isset($data['scheduledActionsForRule'])) {
            $this->scheduledActionsForRule = $data['scheduledActionsForRule'];
        }
        if (isset($data['userStatuses'])) {
            $this->userStatuses = $data['userStatuses'];
        }
        if (isset($data['userStatusOverview'])) {
            $this->userStatusOverview = is_array($data['userStatusOverview']) ? new DeviceComplianceUserOverview($data['userStatusOverview']) : $data['userStatusOverview'];
        }
        if (isset($data['osMaximumVersion'])) {
            $this->osMaximumVersion = $data['osMaximumVersion'];
        }
        if (isset($data['osMinimumVersion'])) {
            $this->osMinimumVersion = $data['osMinimumVersion'];
        }
        if (isset($data['passwordBlockSimple'])) {
            $this->passwordBlockSimple = $data['passwordBlockSimple'];
        }
        if (isset($data['passwordExpirationDays'])) {
            $this->passwordExpirationDays = $data['passwordExpirationDays'];
        }
        if (isset($data['passwordMinimumCharacterSetCount'])) {
            $this->passwordMinimumCharacterSetCount = $data['passwordMinimumCharacterSetCount'];
        }
        if (isset($data['passwordMinimumLength'])) {
            $this->passwordMinimumLength = $data['passwordMinimumLength'];
        }
        if (isset($data['passwordMinutesOfInactivityBeforeLock'])) {
            $this->passwordMinutesOfInactivityBeforeLock = $data['passwordMinutesOfInactivityBeforeLock'];
        }
        if (isset($data['passwordPreviousPasswordBlockCount'])) {
            $this->passwordPreviousPasswordBlockCount = $data['passwordPreviousPasswordBlockCount'];
        }
        if (isset($data['passwordRequired'])) {
            $this->passwordRequired = $data['passwordRequired'];
        }
        if (isset($data['passwordRequiredType'])) {
            $this->passwordRequiredType = is_array($data['passwordRequiredType']) ? new RequiredPasswordType($data['passwordRequiredType']) : $data['passwordRequiredType'];
        }
        if (isset($data['storageRequireEncryption'])) {
            $this->storageRequireEncryption = $data['storageRequireEncryption'];
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
