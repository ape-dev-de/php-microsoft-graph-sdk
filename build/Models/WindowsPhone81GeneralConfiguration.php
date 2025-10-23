<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsPhone81GeneralConfiguration
 */
class WindowsPhone81GeneralConfiguration
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
        if (isset($data['userStatuses'])) {
            $this->userStatuses = $data['userStatuses'];
        }
        if (isset($data['userStatusOverview'])) {
            $this->userStatusOverview = $data['userStatusOverview'];
        }
        if (isset($data['applyOnlyToWindowsPhone81'])) {
            $this->applyOnlyToWindowsPhone81 = $data['applyOnlyToWindowsPhone81'];
        }
        if (isset($data['appsBlockCopyPaste'])) {
            $this->appsBlockCopyPaste = $data['appsBlockCopyPaste'];
        }
        if (isset($data['bluetoothBlocked'])) {
            $this->bluetoothBlocked = $data['bluetoothBlocked'];
        }
        if (isset($data['cameraBlocked'])) {
            $this->cameraBlocked = $data['cameraBlocked'];
        }
        if (isset($data['cellularBlockWifiTethering'])) {
            $this->cellularBlockWifiTethering = $data['cellularBlockWifiTethering'];
        }
        if (isset($data['compliantAppListType'])) {
            $this->compliantAppListType = $data['compliantAppListType'];
        }
        if (isset($data['compliantAppsList'])) {
            $this->compliantAppsList = $data['compliantAppsList'];
        }
        if (isset($data['diagnosticDataBlockSubmission'])) {
            $this->diagnosticDataBlockSubmission = $data['diagnosticDataBlockSubmission'];
        }
        if (isset($data['emailBlockAddingAccounts'])) {
            $this->emailBlockAddingAccounts = $data['emailBlockAddingAccounts'];
        }
        if (isset($data['locationServicesBlocked'])) {
            $this->locationServicesBlocked = $data['locationServicesBlocked'];
        }
        if (isset($data['microsoftAccountBlocked'])) {
            $this->microsoftAccountBlocked = $data['microsoftAccountBlocked'];
        }
        if (isset($data['nfcBlocked'])) {
            $this->nfcBlocked = $data['nfcBlocked'];
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
        if (isset($data['passwordMinutesOfInactivityBeforeScreenTimeout'])) {
            $this->passwordMinutesOfInactivityBeforeScreenTimeout = $data['passwordMinutesOfInactivityBeforeScreenTimeout'];
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
        if (isset($data['passwordSignInFailureCountBeforeFactoryReset'])) {
            $this->passwordSignInFailureCountBeforeFactoryReset = $data['passwordSignInFailureCountBeforeFactoryReset'];
        }
        if (isset($data['screenCaptureBlocked'])) {
            $this->screenCaptureBlocked = $data['screenCaptureBlocked'];
        }
        if (isset($data['storageBlockRemovableStorage'])) {
            $this->storageBlockRemovableStorage = $data['storageBlockRemovableStorage'];
        }
        if (isset($data['storageRequireEncryption'])) {
            $this->storageRequireEncryption = $data['storageRequireEncryption'];
        }
        if (isset($data['webBrowserBlocked'])) {
            $this->webBrowserBlocked = $data['webBrowserBlocked'];
        }
        if (isset($data['wifiBlockAutomaticConnectHotspots'])) {
            $this->wifiBlockAutomaticConnectHotspots = $data['wifiBlockAutomaticConnectHotspots'];
        }
        if (isset($data['wifiBlocked'])) {
            $this->wifiBlocked = $data['wifiBlocked'];
        }
        if (isset($data['wifiBlockHotspotReporting'])) {
            $this->wifiBlockHotspotReporting = $data['wifiBlockHotspotReporting'];
        }
        if (isset($data['windowsStoreBlocked'])) {
            $this->windowsStoreBlocked = $data['windowsStoreBlocked'];
        }
    }
}
