<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharedPCConfiguration
 */
class SharedPCConfiguration
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
     * The list of assignments for the device configuration profile.
     * @var DeviceConfigurationAssignment[]
     */
    public array $assignments = [];

    /** 
     * Device Configuration Setting State Device Summary
     * @var SettingStateDeviceSummary[]
     */
    public array $deviceSettingStateSummaries = [];

    /** 
     * Device configuration installation status by device.
     * @var DeviceConfigurationDeviceStatus[]
     */
    public array $deviceStatuses = [];

    /** 
     * Device Configuration devices status overview
     * @var DeviceConfigurationDeviceOverview|\stdClass|null
     */
    public mixed $deviceStatusOverview = null;

    /** 
     * Device configuration installation status by user.
     * @var DeviceConfigurationUserStatus[]
     */
    public array $userStatuses = [];

    /** 
     * Device Configuration users status overview
     * @var DeviceConfigurationUserOverview|\stdClass|null
     */
    public mixed $userStatusOverview = null;

    /** 
     * Specifies how accounts are managed on a shared PC. Only applies when disableAccountManager is false.
     * @var SharedPCAccountManagerPolicy|\stdClass|null
     */
    public mixed $accountManagerPolicy = null;

    /**  */
    public ?SharedPCAllowedAccountType $allowedAccounts = null;

    /** Specifies whether local storage is allowed on a shared PC. */
    public ?bool $allowLocalStorage = null;

    /** Disables the account manager for shared PC mode. */
    public ?bool $disableAccountManager = null;

    /** Specifies whether the default shared PC education environment policies should be disabled. For Windows 10 RS2 and later, this policy will be applied without setting Enabled to true. */
    public ?bool $disableEduPolicies = null;

    /** Specifies whether the default shared PC power policies should be disabled. */
    public ?bool $disablePowerPolicies = null;

    /** Disables the requirement to sign in whenever the device wakes up from sleep mode. */
    public ?bool $disableSignInOnResume = null;

    /** Enables shared PC mode and applies the shared pc policies. */
    public ?bool $enabled = null;

    /** Specifies the time in seconds that a device must sit idle before the PC goes to sleep. Setting this value to 0 prevents the sleep timeout from occurring. */
    public ?float $idleTimeBeforeSleepInSeconds = null;

    /** Specifies the display text for the account shown on the sign-in screen which launches the app specified by SetKioskAppUserModelId. Only applies when KioskAppUserModelId is set. */
    public ?string $kioskAppDisplayName = null;

    /** Specifies the application user model ID of the app to use with assigned access. */
    public ?string $kioskAppUserModelId = null;

    /** Specifies the daily start time of maintenance hour. */
    public ?string $maintenanceStartTime = null;


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
            $this->deviceStatusOverview = is_array($data['deviceStatusOverview']) ? new DeviceConfigurationDeviceOverview($data['deviceStatusOverview']) : $data['deviceStatusOverview'];
        }
        if (isset($data['userStatuses'])) {
            $this->userStatuses = $data['userStatuses'];
        }
        if (isset($data['userStatusOverview'])) {
            $this->userStatusOverview = is_array($data['userStatusOverview']) ? new DeviceConfigurationUserOverview($data['userStatusOverview']) : $data['userStatusOverview'];
        }
        if (isset($data['accountManagerPolicy'])) {
            $this->accountManagerPolicy = is_array($data['accountManagerPolicy']) ? new SharedPCAccountManagerPolicy($data['accountManagerPolicy']) : $data['accountManagerPolicy'];
        }
        if (isset($data['allowedAccounts'])) {
            $this->allowedAccounts = is_array($data['allowedAccounts']) ? new SharedPCAllowedAccountType($data['allowedAccounts']) : $data['allowedAccounts'];
        }
        if (isset($data['allowLocalStorage'])) {
            $this->allowLocalStorage = $data['allowLocalStorage'];
        }
        if (isset($data['disableAccountManager'])) {
            $this->disableAccountManager = $data['disableAccountManager'];
        }
        if (isset($data['disableEduPolicies'])) {
            $this->disableEduPolicies = $data['disableEduPolicies'];
        }
        if (isset($data['disablePowerPolicies'])) {
            $this->disablePowerPolicies = $data['disablePowerPolicies'];
        }
        if (isset($data['disableSignInOnResume'])) {
            $this->disableSignInOnResume = $data['disableSignInOnResume'];
        }
        if (isset($data['enabled'])) {
            $this->enabled = $data['enabled'];
        }
        if (isset($data['idleTimeBeforeSleepInSeconds'])) {
            $this->idleTimeBeforeSleepInSeconds = $data['idleTimeBeforeSleepInSeconds'];
        }
        if (isset($data['kioskAppDisplayName'])) {
            $this->kioskAppDisplayName = $data['kioskAppDisplayName'];
        }
        if (isset($data['kioskAppUserModelId'])) {
            $this->kioskAppUserModelId = $data['kioskAppUserModelId'];
        }
        if (isset($data['maintenanceStartTime'])) {
            $this->maintenanceStartTime = $data['maintenanceStartTime'];
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
