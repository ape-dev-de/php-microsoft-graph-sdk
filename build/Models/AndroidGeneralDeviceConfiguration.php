<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AndroidGeneralDeviceConfiguration
 */
class AndroidGeneralDeviceConfiguration
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

    /** Indicates whether or not to block clipboard sharing to copy and paste between applications. */
    public ?bool $appsBlockClipboardSharing = null;

    /** Indicates whether or not to block copy and paste within applications. */
    public ?bool $appsBlockCopyPaste = null;

    /** Indicates whether or not to block the YouTube app. */
    public ?bool $appsBlockYouTube = null;

    /** 
     * List of apps to be hidden on the KNOX device. This collection can contain a maximum of 500 elements.
     * @var AppListItem[]
     */
    public array $appsHideList = [];

    /** 
     * List of apps which can be installed on the KNOX device. This collection can contain a maximum of 500 elements.
     * @var AppListItem[]
     */
    public array $appsInstallAllowList = [];

    /** 
     * List of apps which are blocked from being launched on the KNOX device. This collection can contain a maximum of 500 elements.
     * @var AppListItem[]
     */
    public array $appsLaunchBlockList = [];

    /** Indicates whether or not to block Bluetooth. */
    public ?bool $bluetoothBlocked = null;

    /** Indicates whether or not to block the use of the camera. */
    public ?bool $cameraBlocked = null;

    /** Indicates whether or not to block data roaming. */
    public ?bool $cellularBlockDataRoaming = null;

    /** Indicates whether or not to block SMS/MMS messaging. */
    public ?bool $cellularBlockMessaging = null;

    /** Indicates whether or not to block voice roaming. */
    public ?bool $cellularBlockVoiceRoaming = null;

    /** Indicates whether or not to block syncing Wi-Fi tethering. */
    public ?bool $cellularBlockWiFiTethering = null;

    /**  */
    public ?AppListType $compliantAppListType = null;

    /** 
     * List of apps in the compliance (either allow list or block list, controlled by CompliantAppListType). This collection can contain a maximum of 10000 elements.
     * @var AppListItem[]
     */
    public array $compliantAppsList = [];

    /** Indicates whether or not to allow device sharing mode. */
    public ?bool $deviceSharingAllowed = null;

    /** Indicates whether or not to block diagnostic data submission. */
    public ?bool $diagnosticDataBlockSubmission = null;

    /** Indicates whether or not to block user performing a factory reset. */
    public ?bool $factoryResetBlocked = null;

    /** Indicates whether or not to block Google account auto sync. */
    public ?bool $googleAccountBlockAutoSync = null;

    /** Indicates whether or not to block the Google Play store. */
    public ?bool $googlePlayStoreBlocked = null;

    /** 
     * A list of apps that will be allowed to run when the device is in Kiosk Mode. This collection can contain a maximum of 500 elements.
     * @var AppListItem[]
     */
    public array $kioskModeApps = [];

    /** Indicates whether or not to block the screen sleep button while in Kiosk Mode. */
    public ?bool $kioskModeBlockSleepButton = null;

    /** Indicates whether or not to block the volume buttons while in Kiosk Mode. */
    public ?bool $kioskModeBlockVolumeButtons = null;

    /** Indicates whether or not to block location services. */
    public ?bool $locationServicesBlocked = null;

    /** Indicates whether or not to block Near-Field Communication. */
    public ?bool $nfcBlocked = null;

    /** Indicates whether or not to block fingerprint unlock. */
    public ?bool $passwordBlockFingerprintUnlock = null;

    /** Indicates whether or not to block Smart Lock and other trust agents. */
    public ?bool $passwordBlockTrustAgents = null;

    /** Number of days before the password expires. Valid values 1 to 365 */
    public ?float $passwordExpirationDays = null;

    /** Minimum length of passwords. Valid values 4 to 16 */
    public ?float $passwordMinimumLength = null;

    /** Minutes of inactivity before the screen times out. */
    public ?float $passwordMinutesOfInactivityBeforeScreenTimeout = null;

    /** Number of previous passwords to block. Valid values 0 to 24 */
    public ?float $passwordPreviousPasswordBlockCount = null;

    /** Indicates whether or not to require a password. */
    public ?bool $passwordRequired = null;

    /**  */
    public ?AndroidRequiredPasswordType $passwordRequiredType = null;

    /** Number of sign in failures allowed before factory reset. Valid values 1 to 16 */
    public ?float $passwordSignInFailureCountBeforeFactoryReset = null;

    /** Indicates whether or not to block powering off the device. */
    public ?bool $powerOffBlocked = null;

    /** Indicates whether or not to block screenshots. */
    public ?bool $screenCaptureBlocked = null;

    /** Require the Android Verify apps feature is turned on. */
    public ?bool $securityRequireVerifyApps = null;

    /** Indicates whether or not to block Google Backup. */
    public ?bool $storageBlockGoogleBackup = null;

    /** Indicates whether or not to block removable storage usage. */
    public ?bool $storageBlockRemovableStorage = null;

    /** Indicates whether or not to require device encryption. */
    public ?bool $storageRequireDeviceEncryption = null;

    /** Indicates whether or not to require removable storage encryption. */
    public ?bool $storageRequireRemovableStorageEncryption = null;

    /** Indicates whether or not to block the use of the Voice Assistant. */
    public ?bool $voiceAssistantBlocked = null;

    /** Indicates whether or not to block voice dialing. */
    public ?bool $voiceDialingBlocked = null;

    /** Indicates whether or not to block the web browser's auto fill feature. */
    public ?bool $webBrowserBlockAutofill = null;

    /** Indicates whether or not to block the web browser. */
    public ?bool $webBrowserBlocked = null;

    /** Indicates whether or not to block JavaScript within the web browser. */
    public ?bool $webBrowserBlockJavaScript = null;

    /** Indicates whether or not to block popups within the web browser. */
    public ?bool $webBrowserBlockPopups = null;

    /**  */
    public ?WebBrowserCookieSettings $webBrowserCookieSettings = null;

    /** Indicates whether or not to block syncing Wi-Fi. */
    public ?bool $wiFiBlocked = null;


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
        if (isset($data['appsBlockClipboardSharing'])) {
            $this->appsBlockClipboardSharing = $data['appsBlockClipboardSharing'];
        }
        if (isset($data['appsBlockCopyPaste'])) {
            $this->appsBlockCopyPaste = $data['appsBlockCopyPaste'];
        }
        if (isset($data['appsBlockYouTube'])) {
            $this->appsBlockYouTube = $data['appsBlockYouTube'];
        }
        if (isset($data['appsHideList'])) {
            $this->appsHideList = $data['appsHideList'];
        }
        if (isset($data['appsInstallAllowList'])) {
            $this->appsInstallAllowList = $data['appsInstallAllowList'];
        }
        if (isset($data['appsLaunchBlockList'])) {
            $this->appsLaunchBlockList = $data['appsLaunchBlockList'];
        }
        if (isset($data['bluetoothBlocked'])) {
            $this->bluetoothBlocked = $data['bluetoothBlocked'];
        }
        if (isset($data['cameraBlocked'])) {
            $this->cameraBlocked = $data['cameraBlocked'];
        }
        if (isset($data['cellularBlockDataRoaming'])) {
            $this->cellularBlockDataRoaming = $data['cellularBlockDataRoaming'];
        }
        if (isset($data['cellularBlockMessaging'])) {
            $this->cellularBlockMessaging = $data['cellularBlockMessaging'];
        }
        if (isset($data['cellularBlockVoiceRoaming'])) {
            $this->cellularBlockVoiceRoaming = $data['cellularBlockVoiceRoaming'];
        }
        if (isset($data['cellularBlockWiFiTethering'])) {
            $this->cellularBlockWiFiTethering = $data['cellularBlockWiFiTethering'];
        }
        if (isset($data['compliantAppListType'])) {
            $this->compliantAppListType = $data['compliantAppListType'];
        }
        if (isset($data['compliantAppsList'])) {
            $this->compliantAppsList = $data['compliantAppsList'];
        }
        if (isset($data['deviceSharingAllowed'])) {
            $this->deviceSharingAllowed = $data['deviceSharingAllowed'];
        }
        if (isset($data['diagnosticDataBlockSubmission'])) {
            $this->diagnosticDataBlockSubmission = $data['diagnosticDataBlockSubmission'];
        }
        if (isset($data['factoryResetBlocked'])) {
            $this->factoryResetBlocked = $data['factoryResetBlocked'];
        }
        if (isset($data['googleAccountBlockAutoSync'])) {
            $this->googleAccountBlockAutoSync = $data['googleAccountBlockAutoSync'];
        }
        if (isset($data['googlePlayStoreBlocked'])) {
            $this->googlePlayStoreBlocked = $data['googlePlayStoreBlocked'];
        }
        if (isset($data['kioskModeApps'])) {
            $this->kioskModeApps = $data['kioskModeApps'];
        }
        if (isset($data['kioskModeBlockSleepButton'])) {
            $this->kioskModeBlockSleepButton = $data['kioskModeBlockSleepButton'];
        }
        if (isset($data['kioskModeBlockVolumeButtons'])) {
            $this->kioskModeBlockVolumeButtons = $data['kioskModeBlockVolumeButtons'];
        }
        if (isset($data['locationServicesBlocked'])) {
            $this->locationServicesBlocked = $data['locationServicesBlocked'];
        }
        if (isset($data['nfcBlocked'])) {
            $this->nfcBlocked = $data['nfcBlocked'];
        }
        if (isset($data['passwordBlockFingerprintUnlock'])) {
            $this->passwordBlockFingerprintUnlock = $data['passwordBlockFingerprintUnlock'];
        }
        if (isset($data['passwordBlockTrustAgents'])) {
            $this->passwordBlockTrustAgents = $data['passwordBlockTrustAgents'];
        }
        if (isset($data['passwordExpirationDays'])) {
            $this->passwordExpirationDays = $data['passwordExpirationDays'];
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
        if (isset($data['powerOffBlocked'])) {
            $this->powerOffBlocked = $data['powerOffBlocked'];
        }
        if (isset($data['screenCaptureBlocked'])) {
            $this->screenCaptureBlocked = $data['screenCaptureBlocked'];
        }
        if (isset($data['securityRequireVerifyApps'])) {
            $this->securityRequireVerifyApps = $data['securityRequireVerifyApps'];
        }
        if (isset($data['storageBlockGoogleBackup'])) {
            $this->storageBlockGoogleBackup = $data['storageBlockGoogleBackup'];
        }
        if (isset($data['storageBlockRemovableStorage'])) {
            $this->storageBlockRemovableStorage = $data['storageBlockRemovableStorage'];
        }
        if (isset($data['storageRequireDeviceEncryption'])) {
            $this->storageRequireDeviceEncryption = $data['storageRequireDeviceEncryption'];
        }
        if (isset($data['storageRequireRemovableStorageEncryption'])) {
            $this->storageRequireRemovableStorageEncryption = $data['storageRequireRemovableStorageEncryption'];
        }
        if (isset($data['voiceAssistantBlocked'])) {
            $this->voiceAssistantBlocked = $data['voiceAssistantBlocked'];
        }
        if (isset($data['voiceDialingBlocked'])) {
            $this->voiceDialingBlocked = $data['voiceDialingBlocked'];
        }
        if (isset($data['webBrowserBlockAutofill'])) {
            $this->webBrowserBlockAutofill = $data['webBrowserBlockAutofill'];
        }
        if (isset($data['webBrowserBlocked'])) {
            $this->webBrowserBlocked = $data['webBrowserBlocked'];
        }
        if (isset($data['webBrowserBlockJavaScript'])) {
            $this->webBrowserBlockJavaScript = $data['webBrowserBlockJavaScript'];
        }
        if (isset($data['webBrowserBlockPopups'])) {
            $this->webBrowserBlockPopups = $data['webBrowserBlockPopups'];
        }
        if (isset($data['webBrowserCookieSettings'])) {
            $this->webBrowserCookieSettings = $data['webBrowserCookieSettings'];
        }
        if (isset($data['wiFiBlocked'])) {
            $this->wiFiBlocked = $data['wiFiBlocked'];
        }
    }
}
