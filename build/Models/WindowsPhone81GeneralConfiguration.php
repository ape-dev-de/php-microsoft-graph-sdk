<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsPhone81GeneralConfiguration
 */
class WindowsPhone81GeneralConfiguration
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
    public DeviceConfigurationDeviceOverview|\stdClass|null $deviceStatusOverview = null;

    /** 
     * Device configuration installation status by user.
     * @var DeviceConfigurationUserStatus[]
     */
    public array $userStatuses = [];

    /** 
     * Device Configuration users status overview
     * @var DeviceConfigurationUserOverview|\stdClass|null
     */
    public DeviceConfigurationUserOverview|\stdClass|null $userStatusOverview = null;

    /** Value indicating whether this policy only applies to Windows Phone 8.1. This property is read-only. */
    public ?bool $applyOnlyToWindowsPhone81 = null;

    /** Indicates whether or not to block copy paste. */
    public ?bool $appsBlockCopyPaste = null;

    /** Indicates whether or not to block bluetooth. */
    public ?bool $bluetoothBlocked = null;

    /** Indicates whether or not to block camera. */
    public ?bool $cameraBlocked = null;

    /** Indicates whether or not to block Wi-Fi tethering. Has no impact if Wi-Fi is blocked. */
    public ?bool $cellularBlockWifiTethering = null;

    /**  */
    public ?AppListType $compliantAppListType = null;

    /** 
     * List of apps in the compliance (either allow list or block list, controlled by CompliantAppListType). This collection can contain a maximum of 10000 elements.
     * @var AppListItem[]
     */
    public array $compliantAppsList = [];

    /** Indicates whether or not to block diagnostic data submission. */
    public ?bool $diagnosticDataBlockSubmission = null;

    /** Indicates whether or not to block custom email accounts. */
    public ?bool $emailBlockAddingAccounts = null;

    /** Indicates whether or not to block location services. */
    public ?bool $locationServicesBlocked = null;

    /** Indicates whether or not to block using a Microsoft Account. */
    public ?bool $microsoftAccountBlocked = null;

    /** Indicates whether or not to block Near-Field Communication. */
    public ?bool $nfcBlocked = null;

    /** Indicates whether or not to block syncing the calendar. */
    public ?bool $passwordBlockSimple = null;

    /** Number of days before the password expires. */
    public ?float $passwordExpirationDays = null;

    /** Number of character sets a password must contain. */
    public ?float $passwordMinimumCharacterSetCount = null;

    /** Minimum length of passwords. */
    public ?float $passwordMinimumLength = null;

    /** Minutes of inactivity before screen timeout. */
    public ?float $passwordMinutesOfInactivityBeforeScreenTimeout = null;

    /** Number of previous passwords to block. Valid values 0 to 24 */
    public ?float $passwordPreviousPasswordBlockCount = null;

    /** Indicates whether or not to require a password. */
    public ?bool $passwordRequired = null;

    /**  */
    public ?RequiredPasswordType $passwordRequiredType = null;

    /** Number of sign in failures allowed before factory reset. */
    public ?float $passwordSignInFailureCountBeforeFactoryReset = null;

    /** Indicates whether or not to block screenshots. */
    public ?bool $screenCaptureBlocked = null;

    /** Indicates whether or not to block removable storage. */
    public ?bool $storageBlockRemovableStorage = null;

    /** Indicates whether or not to require encryption. */
    public ?bool $storageRequireEncryption = null;

    /** Indicates whether or not to block the web browser. */
    public ?bool $webBrowserBlocked = null;

    /** Indicates whether or not to block automatically connecting to Wi-Fi hotspots. Has no impact if Wi-Fi is blocked. */
    public ?bool $wifiBlockAutomaticConnectHotspots = null;

    /** Indicates whether or not to block Wi-Fi. */
    public ?bool $wifiBlocked = null;

    /** Indicates whether or not to block Wi-Fi hotspot reporting. Has no impact if Wi-Fi is blocked. */
    public ?bool $wifiBlockHotspotReporting = null;

    /** Indicates whether or not to block the Windows Store. */
    public ?bool $windowsStoreBlocked = null;


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
            $this->deviceStatusOverview = is_array($data['deviceStatusOverview']) ? new DeviceConfigurationDeviceOverview($data['deviceStatusOverview']) : $data['deviceStatusOverview'];
        }
        if (isset($data['userStatuses'])) {
            $this->userStatuses = $data['userStatuses'];
        }
        if (isset($data['userStatusOverview'])) {
            $this->userStatusOverview = is_array($data['userStatusOverview']) ? new DeviceConfigurationUserOverview($data['userStatusOverview']) : $data['userStatusOverview'];
        }
        if (isset($data['applyOnlyToWindowsPhone81'])) {
            $this->applyOnlyToWindowsPhone81 = is_bool($data['applyOnlyToWindowsPhone81']) ? $data['applyOnlyToWindowsPhone81'] : (bool)$data['applyOnlyToWindowsPhone81'];
        }
        if (isset($data['appsBlockCopyPaste'])) {
            $this->appsBlockCopyPaste = is_bool($data['appsBlockCopyPaste']) ? $data['appsBlockCopyPaste'] : (bool)$data['appsBlockCopyPaste'];
        }
        if (isset($data['bluetoothBlocked'])) {
            $this->bluetoothBlocked = is_bool($data['bluetoothBlocked']) ? $data['bluetoothBlocked'] : (bool)$data['bluetoothBlocked'];
        }
        if (isset($data['cameraBlocked'])) {
            $this->cameraBlocked = is_bool($data['cameraBlocked']) ? $data['cameraBlocked'] : (bool)$data['cameraBlocked'];
        }
        if (isset($data['cellularBlockWifiTethering'])) {
            $this->cellularBlockWifiTethering = is_bool($data['cellularBlockWifiTethering']) ? $data['cellularBlockWifiTethering'] : (bool)$data['cellularBlockWifiTethering'];
        }
        if (isset($data['compliantAppListType'])) {
            $this->compliantAppListType = is_string($data['compliantAppListType']) ? AppListType::tryFrom($data['compliantAppListType']) : $data['compliantAppListType'];
        }
        if (isset($data['compliantAppsList'])) {
            $this->compliantAppsList = $data['compliantAppsList'];
        }
        if (isset($data['diagnosticDataBlockSubmission'])) {
            $this->diagnosticDataBlockSubmission = is_bool($data['diagnosticDataBlockSubmission']) ? $data['diagnosticDataBlockSubmission'] : (bool)$data['diagnosticDataBlockSubmission'];
        }
        if (isset($data['emailBlockAddingAccounts'])) {
            $this->emailBlockAddingAccounts = is_bool($data['emailBlockAddingAccounts']) ? $data['emailBlockAddingAccounts'] : (bool)$data['emailBlockAddingAccounts'];
        }
        if (isset($data['locationServicesBlocked'])) {
            $this->locationServicesBlocked = is_bool($data['locationServicesBlocked']) ? $data['locationServicesBlocked'] : (bool)$data['locationServicesBlocked'];
        }
        if (isset($data['microsoftAccountBlocked'])) {
            $this->microsoftAccountBlocked = is_bool($data['microsoftAccountBlocked']) ? $data['microsoftAccountBlocked'] : (bool)$data['microsoftAccountBlocked'];
        }
        if (isset($data['nfcBlocked'])) {
            $this->nfcBlocked = is_bool($data['nfcBlocked']) ? $data['nfcBlocked'] : (bool)$data['nfcBlocked'];
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
        if (isset($data['passwordMinutesOfInactivityBeforeScreenTimeout'])) {
            $this->passwordMinutesOfInactivityBeforeScreenTimeout = is_numeric($data['passwordMinutesOfInactivityBeforeScreenTimeout']) ? (float)$data['passwordMinutesOfInactivityBeforeScreenTimeout'] : $data['passwordMinutesOfInactivityBeforeScreenTimeout'];
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
        if (isset($data['passwordSignInFailureCountBeforeFactoryReset'])) {
            $this->passwordSignInFailureCountBeforeFactoryReset = is_numeric($data['passwordSignInFailureCountBeforeFactoryReset']) ? (float)$data['passwordSignInFailureCountBeforeFactoryReset'] : $data['passwordSignInFailureCountBeforeFactoryReset'];
        }
        if (isset($data['screenCaptureBlocked'])) {
            $this->screenCaptureBlocked = is_bool($data['screenCaptureBlocked']) ? $data['screenCaptureBlocked'] : (bool)$data['screenCaptureBlocked'];
        }
        if (isset($data['storageBlockRemovableStorage'])) {
            $this->storageBlockRemovableStorage = is_bool($data['storageBlockRemovableStorage']) ? $data['storageBlockRemovableStorage'] : (bool)$data['storageBlockRemovableStorage'];
        }
        if (isset($data['storageRequireEncryption'])) {
            $this->storageRequireEncryption = is_bool($data['storageRequireEncryption']) ? $data['storageRequireEncryption'] : (bool)$data['storageRequireEncryption'];
        }
        if (isset($data['webBrowserBlocked'])) {
            $this->webBrowserBlocked = is_bool($data['webBrowserBlocked']) ? $data['webBrowserBlocked'] : (bool)$data['webBrowserBlocked'];
        }
        if (isset($data['wifiBlockAutomaticConnectHotspots'])) {
            $this->wifiBlockAutomaticConnectHotspots = is_bool($data['wifiBlockAutomaticConnectHotspots']) ? $data['wifiBlockAutomaticConnectHotspots'] : (bool)$data['wifiBlockAutomaticConnectHotspots'];
        }
        if (isset($data['wifiBlocked'])) {
            $this->wifiBlocked = is_bool($data['wifiBlocked']) ? $data['wifiBlocked'] : (bool)$data['wifiBlocked'];
        }
        if (isset($data['wifiBlockHotspotReporting'])) {
            $this->wifiBlockHotspotReporting = is_bool($data['wifiBlockHotspotReporting']) ? $data['wifiBlockHotspotReporting'] : (bool)$data['wifiBlockHotspotReporting'];
        }
        if (isset($data['windowsStoreBlocked'])) {
            $this->windowsStoreBlocked = is_bool($data['windowsStoreBlocked']) ? $data['windowsStoreBlocked'] : (bool)$data['windowsStoreBlocked'];
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
