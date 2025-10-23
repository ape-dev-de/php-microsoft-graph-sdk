<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MacOSCompliancePolicy
 */
class MacOSCompliancePolicy
{
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
    public mixed $deviceStatusOverview = null;

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
    public mixed $userStatusOverview = null;

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
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = $data['lastModifiedDateTime'];
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
            $this->deviceStatusOverview = $data['deviceStatusOverview'];
        }
        if (isset($data['scheduledActionsForRule'])) {
            $this->scheduledActionsForRule = $data['scheduledActionsForRule'];
        }
        if (isset($data['userStatuses'])) {
            $this->userStatuses = $data['userStatuses'];
        }
        if (isset($data['userStatusOverview'])) {
            $this->userStatusOverview = $data['userStatusOverview'];
        }
        if (isset($data['deviceThreatProtectionEnabled'])) {
            $this->deviceThreatProtectionEnabled = $data['deviceThreatProtectionEnabled'];
        }
        if (isset($data['deviceThreatProtectionRequiredSecurityLevel'])) {
            $this->deviceThreatProtectionRequiredSecurityLevel = $data['deviceThreatProtectionRequiredSecurityLevel'];
        }
        if (isset($data['firewallBlockAllIncoming'])) {
            $this->firewallBlockAllIncoming = $data['firewallBlockAllIncoming'];
        }
        if (isset($data['firewallEnabled'])) {
            $this->firewallEnabled = $data['firewallEnabled'];
        }
        if (isset($data['firewallEnableStealthMode'])) {
            $this->firewallEnableStealthMode = $data['firewallEnableStealthMode'];
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
            $this->passwordRequiredType = $data['passwordRequiredType'];
        }
        if (isset($data['storageRequireEncryption'])) {
            $this->storageRequireEncryption = $data['storageRequireEncryption'];
        }
        if (isset($data['systemIntegrityProtectionEnabled'])) {
            $this->systemIntegrityProtectionEnabled = $data['systemIntegrityProtectionEnabled'];
        }
    }
}
