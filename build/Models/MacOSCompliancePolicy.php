<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MacOSCompliancePolicy
 */
class MacOSCompliancePolicy
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

    /** Require that devices have enabled device threat protection. */
    public ?bool $deviceThreatProtectionEnabled = null;

    /**  */
    public ?DeviceThreatProtectionLevel $deviceThreatProtectionRequiredSecurityLevel = null;

    /** Corresponds to the 'Block all incoming connections' option. */
    public ?bool $firewallBlockAllIncoming = null;

    /** Whether the firewall should be enabled or not. */
    public ?bool $firewallEnabled = null;

    /** Corresponds to 'Enable stealth mode.' */
    public ?bool $firewallEnableStealthMode = null;

    /** Maximum MacOS version. */
    public ?string $osMaximumVersion = null;

    /** Minimum MacOS version. */
    public ?string $osMinimumVersion = null;

    /** Indicates whether or not to block simple passwords. */
    public ?bool $passwordBlockSimple = null;

    /** Number of days before the password expires. Valid values 1 to 65535 */
    public ?float $passwordExpirationDays = null;

    /** The number of character sets required in the password. */
    public ?float $passwordMinimumCharacterSetCount = null;

    /** Minimum length of password. Valid values 4 to 14 */
    public ?float $passwordMinimumLength = null;

    /** Minutes of inactivity before a password is required. */
    public ?float $passwordMinutesOfInactivityBeforeLock = null;

    /** Number of previous passwords to block. Valid values 1 to 24 */
    public ?float $passwordPreviousPasswordBlockCount = null;

    /** Whether or not to require a password. */
    public ?bool $passwordRequired = null;

    /**  */
    public ?RequiredPasswordType $passwordRequiredType = null;

    /** Require encryption on Mac OS devices. */
    public ?bool $storageRequireEncryption = null;

    /** Require that devices have enabled system integrity protection. */
    public ?bool $systemIntegrityProtectionEnabled = null;


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
        if (isset($data['firewallBlockAllIncoming'])) {
            $this->firewallBlockAllIncoming = is_bool($data['firewallBlockAllIncoming']) ? $data['firewallBlockAllIncoming'] : (bool)$data['firewallBlockAllIncoming'];
        }
        if (isset($data['firewallEnabled'])) {
            $this->firewallEnabled = is_bool($data['firewallEnabled']) ? $data['firewallEnabled'] : (bool)$data['firewallEnabled'];
        }
        if (isset($data['firewallEnableStealthMode'])) {
            $this->firewallEnableStealthMode = is_bool($data['firewallEnableStealthMode']) ? $data['firewallEnableStealthMode'] : (bool)$data['firewallEnableStealthMode'];
        }
        if (isset($data['osMaximumVersion'])) {
            $this->osMaximumVersion = $data['osMaximumVersion'];
        }
        if (isset($data['osMinimumVersion'])) {
            $this->osMinimumVersion = $data['osMinimumVersion'];
        }
        if (isset($data['passwordBlockSimple'])) {
            $this->passwordBlockSimple = is_bool($data['passwordBlockSimple']) ? $data['passwordBlockSimple'] : (bool)$data['passwordBlockSimple'];
        }
        if (isset($data['passwordExpirationDays'])) {
            $this->passwordExpirationDays = is_numeric($data['passwordExpirationDays']) ? (float)$data['passwordExpirationDays'] : $data['passwordExpirationDays'];
        }
        if (isset($data['passwordMinimumCharacterSetCount'])) {
            $this->passwordMinimumCharacterSetCount = is_numeric($data['passwordMinimumCharacterSetCount']) ? (float)$data['passwordMinimumCharacterSetCount'] : $data['passwordMinimumCharacterSetCount'];
        }
        if (isset($data['passwordMinimumLength'])) {
            $this->passwordMinimumLength = is_numeric($data['passwordMinimumLength']) ? (float)$data['passwordMinimumLength'] : $data['passwordMinimumLength'];
        }
        if (isset($data['passwordMinutesOfInactivityBeforeLock'])) {
            $this->passwordMinutesOfInactivityBeforeLock = is_numeric($data['passwordMinutesOfInactivityBeforeLock']) ? (float)$data['passwordMinutesOfInactivityBeforeLock'] : $data['passwordMinutesOfInactivityBeforeLock'];
        }
        if (isset($data['passwordPreviousPasswordBlockCount'])) {
            $this->passwordPreviousPasswordBlockCount = is_numeric($data['passwordPreviousPasswordBlockCount']) ? (float)$data['passwordPreviousPasswordBlockCount'] : $data['passwordPreviousPasswordBlockCount'];
        }
        if (isset($data['passwordRequired'])) {
            $this->passwordRequired = is_bool($data['passwordRequired']) ? $data['passwordRequired'] : (bool)$data['passwordRequired'];
        }
        if (isset($data['passwordRequiredType'])) {
            $this->passwordRequiredType = is_string($data['passwordRequiredType']) ? RequiredPasswordType::tryFrom($data['passwordRequiredType']) : $data['passwordRequiredType'];
        }
        if (isset($data['storageRequireEncryption'])) {
            $this->storageRequireEncryption = is_bool($data['storageRequireEncryption']) ? $data['storageRequireEncryption'] : (bool)$data['storageRequireEncryption'];
        }
        if (isset($data['systemIntegrityProtectionEnabled'])) {
            $this->systemIntegrityProtectionEnabled = is_bool($data['systemIntegrityProtectionEnabled']) ? $data['systemIntegrityProtectionEnabled'] : (bool)$data['systemIntegrityProtectionEnabled'];
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
