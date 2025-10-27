<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosCompliancePolicy
 */
class IosCompliancePolicy
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

    /** Require that devices have enabled device threat protection . */
    public ?bool $deviceThreatProtectionEnabled = null;

    /**  */
    public ?DeviceThreatProtectionLevel $deviceThreatProtectionRequiredSecurityLevel = null;

    /** Indicates whether or not to require a managed email profile. */
    public ?bool $managedEmailProfileRequired = null;

    /** Maximum IOS version. */
    public ?string $osMaximumVersion = null;

    /** Minimum IOS version. */
    public ?string $osMinimumVersion = null;

    /** Indicates whether or not to block simple passcodes. */
    public ?bool $passcodeBlockSimple = null;

    /** Number of days before the passcode expires. Valid values 1 to 65535 */
    public ?float $passcodeExpirationDays = null;

    /** The number of character sets required in the password. */
    public ?float $passcodeMinimumCharacterSetCount = null;

    /** Minimum length of passcode. Valid values 4 to 14 */
    public ?float $passcodeMinimumLength = null;

    /** Minutes of inactivity before a passcode is required. */
    public ?float $passcodeMinutesOfInactivityBeforeLock = null;

    /** Number of previous passcodes to block. Valid values 1 to 24 */
    public ?float $passcodePreviousPasscodeBlockCount = null;

    /** Indicates whether or not to require a passcode. */
    public ?bool $passcodeRequired = null;

    /**  */
    public ?RequiredPasswordType $passcodeRequiredType = null;

    /** Devices must not be jailbroken or rooted. */
    public ?bool $securityBlockJailbrokenDevices = null;


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
            $this->version = is_numeric($data['version']) ? (float)$data['version'] : $data['version'];
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
        if (isset($data['deviceThreatProtectionEnabled'])) {
            $this->deviceThreatProtectionEnabled = is_bool($data['deviceThreatProtectionEnabled']) ? $data['deviceThreatProtectionEnabled'] : (bool)$data['deviceThreatProtectionEnabled'];
        }
        if (isset($data['deviceThreatProtectionRequiredSecurityLevel'])) {
            $this->deviceThreatProtectionRequiredSecurityLevel = is_string($data['deviceThreatProtectionRequiredSecurityLevel']) ? DeviceThreatProtectionLevel::tryFrom($data['deviceThreatProtectionRequiredSecurityLevel']) : $data['deviceThreatProtectionRequiredSecurityLevel'];
        }
        if (isset($data['managedEmailProfileRequired'])) {
            $this->managedEmailProfileRequired = is_bool($data['managedEmailProfileRequired']) ? $data['managedEmailProfileRequired'] : (bool)$data['managedEmailProfileRequired'];
        }
        if (isset($data['osMaximumVersion'])) {
            $this->osMaximumVersion = $data['osMaximumVersion'];
        }
        if (isset($data['osMinimumVersion'])) {
            $this->osMinimumVersion = $data['osMinimumVersion'];
        }
        if (isset($data['passcodeBlockSimple'])) {
            $this->passcodeBlockSimple = is_bool($data['passcodeBlockSimple']) ? $data['passcodeBlockSimple'] : (bool)$data['passcodeBlockSimple'];
        }
        if (isset($data['passcodeExpirationDays'])) {
            $this->passcodeExpirationDays = is_numeric($data['passcodeExpirationDays']) ? (float)$data['passcodeExpirationDays'] : $data['passcodeExpirationDays'];
        }
        if (isset($data['passcodeMinimumCharacterSetCount'])) {
            $this->passcodeMinimumCharacterSetCount = is_numeric($data['passcodeMinimumCharacterSetCount']) ? (float)$data['passcodeMinimumCharacterSetCount'] : $data['passcodeMinimumCharacterSetCount'];
        }
        if (isset($data['passcodeMinimumLength'])) {
            $this->passcodeMinimumLength = is_numeric($data['passcodeMinimumLength']) ? (float)$data['passcodeMinimumLength'] : $data['passcodeMinimumLength'];
        }
        if (isset($data['passcodeMinutesOfInactivityBeforeLock'])) {
            $this->passcodeMinutesOfInactivityBeforeLock = is_numeric($data['passcodeMinutesOfInactivityBeforeLock']) ? (float)$data['passcodeMinutesOfInactivityBeforeLock'] : $data['passcodeMinutesOfInactivityBeforeLock'];
        }
        if (isset($data['passcodePreviousPasscodeBlockCount'])) {
            $this->passcodePreviousPasscodeBlockCount = is_numeric($data['passcodePreviousPasscodeBlockCount']) ? (float)$data['passcodePreviousPasscodeBlockCount'] : $data['passcodePreviousPasscodeBlockCount'];
        }
        if (isset($data['passcodeRequired'])) {
            $this->passcodeRequired = is_bool($data['passcodeRequired']) ? $data['passcodeRequired'] : (bool)$data['passcodeRequired'];
        }
        if (isset($data['passcodeRequiredType'])) {
            $this->passcodeRequiredType = is_string($data['passcodeRequiredType']) ? RequiredPasswordType::tryFrom($data['passcodeRequiredType']) : $data['passcodeRequiredType'];
        }
        if (isset($data['securityBlockJailbrokenDevices'])) {
            $this->securityBlockJailbrokenDevices = is_bool($data['securityBlockJailbrokenDevices']) ? $data['securityBlockJailbrokenDevices'] : (bool)$data['securityBlockJailbrokenDevices'];
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
