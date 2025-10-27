<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Windows10MobileCompliancePolicy
 */
class Windows10MobileCompliancePolicy
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

    /** Require devices to be reported healthy by Windows Device Health Attestation - bit locker is enabled */
    public ?bool $bitLockerEnabled = null;

    /** Require devices to be reported as healthy by Windows Device Health Attestation. */
    public ?bool $codeIntegrityEnabled = null;

    /** Require devices to be reported as healthy by Windows Device Health Attestation - early launch antimalware driver is enabled. */
    public ?bool $earlyLaunchAntiMalwareDriverEnabled = null;

    /** Maximum Windows Phone version. */
    public ?string $osMaximumVersion = null;

    /** Minimum Windows Phone version. */
    public ?string $osMinimumVersion = null;

    /** Whether or not to block syncing the calendar. */
    public ?bool $passwordBlockSimple = null;

    /** Number of days before password expiration. Valid values 1 to 255 */
    public ?float $passwordExpirationDays = null;

    /** The number of character sets required in the password. */
    public ?float $passwordMinimumCharacterSetCount = null;

    /** Minimum password length. Valid values 4 to 16 */
    public ?float $passwordMinimumLength = null;

    /** Minutes of inactivity before a password is required. */
    public ?float $passwordMinutesOfInactivityBeforeLock = null;

    /** The number of previous passwords to prevent re-use of. */
    public ?float $passwordPreviousPasswordBlockCount = null;

    /** Require a password to unlock Windows Phone device. */
    public ?bool $passwordRequired = null;

    /**  */
    public ?RequiredPasswordType $passwordRequiredType = null;

    /** Require a password to unlock an idle device. */
    public ?bool $passwordRequireToUnlockFromIdle = null;

    /** Require devices to be reported as healthy by Windows Device Health Attestation - secure boot is enabled. */
    public ?bool $secureBootEnabled = null;

    /** Require encryption on windows devices. */
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
        if (isset($data['bitLockerEnabled'])) {
            $this->bitLockerEnabled = is_bool($data['bitLockerEnabled']) ? $data['bitLockerEnabled'] : (bool)$data['bitLockerEnabled'];
        }
        if (isset($data['codeIntegrityEnabled'])) {
            $this->codeIntegrityEnabled = is_bool($data['codeIntegrityEnabled']) ? $data['codeIntegrityEnabled'] : (bool)$data['codeIntegrityEnabled'];
        }
        if (isset($data['earlyLaunchAntiMalwareDriverEnabled'])) {
            $this->earlyLaunchAntiMalwareDriverEnabled = is_bool($data['earlyLaunchAntiMalwareDriverEnabled']) ? $data['earlyLaunchAntiMalwareDriverEnabled'] : (bool)$data['earlyLaunchAntiMalwareDriverEnabled'];
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
        if (isset($data['passwordRequireToUnlockFromIdle'])) {
            $this->passwordRequireToUnlockFromIdle = is_bool($data['passwordRequireToUnlockFromIdle']) ? $data['passwordRequireToUnlockFromIdle'] : (bool)$data['passwordRequireToUnlockFromIdle'];
        }
        if (isset($data['secureBootEnabled'])) {
            $this->secureBootEnabled = is_bool($data['secureBootEnabled']) ? $data['secureBootEnabled'] : (bool)$data['secureBootEnabled'];
        }
        if (isset($data['storageRequireEncryption'])) {
            $this->storageRequireEncryption = is_bool($data['storageRequireEncryption']) ? $data['storageRequireEncryption'] : (bool)$data['storageRequireEncryption'];
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
