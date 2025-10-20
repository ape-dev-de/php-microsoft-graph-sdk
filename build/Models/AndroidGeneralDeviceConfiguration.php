<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AndroidGeneralDeviceConfiguration
 */
class AndroidGeneralDeviceConfiguration
{
    /**
     * Indicates whether or not to block clipboard sharing to copy and paste between applications.
     */
    private ?bool $appsBlockClipboardSharing;

    /**
     * Indicates whether or not to block copy and paste within applications.
     */
    private ?bool $appsBlockCopyPaste;

    /**
     * Indicates whether or not to block the YouTube app.
     */
    private ?bool $appsBlockYouTube;

    /**
     * List of apps to be hidden on the KNOX device. This collection can contain a maximum of 500 elements.
     */
    private array $appsHideList = [];

    /**
     * List of apps which can be installed on the KNOX device. This collection can contain a maximum of 500 elements.
     */
    private array $appsInstallAllowList = [];

    /**
     * List of apps which are blocked from being launched on the KNOX device. This collection can contain a maximum of 500 elements.
     */
    private array $appsLaunchBlockList = [];

    /**
     * Indicates whether or not to block Bluetooth.
     */
    private ?bool $bluetoothBlocked;

    /**
     * Indicates whether or not to block the use of the camera.
     */
    private ?bool $cameraBlocked;

    /**
     * Indicates whether or not to block data roaming.
     */
    private ?bool $cellularBlockDataRoaming;

    /**
     * Indicates whether or not to block SMS/MMS messaging.
     */
    private ?bool $cellularBlockMessaging;

    /**
     * Indicates whether or not to block voice roaming.
     */
    private ?bool $cellularBlockVoiceRoaming;

    /**
     * Indicates whether or not to block syncing Wi-Fi tethering.
     */
    private ?bool $cellularBlockWiFiTethering;

    /**
     */
    private ?string $compliantAppListType;

    /**
     * List of apps in the compliance (either allow list or block list, controlled by CompliantAppListType). This collection can contain a maximum of 10000 elements.
     */
    private array $compliantAppsList = [];

    /**
     * Indicates whether or not to allow device sharing mode.
     */
    private ?bool $deviceSharingAllowed;

    /**
     * Indicates whether or not to block diagnostic data submission.
     */
    private ?bool $diagnosticDataBlockSubmission;

    /**
     * Indicates whether or not to block user performing a factory reset.
     */
    private ?bool $factoryResetBlocked;

    /**
     * Indicates whether or not to block Google account auto sync.
     */
    private ?bool $googleAccountBlockAutoSync;

    /**
     * Indicates whether or not to block the Google Play store.
     */
    private ?bool $googlePlayStoreBlocked;

    /**
     * A list of apps that will be allowed to run when the device is in Kiosk Mode. This collection can contain a maximum of 500 elements.
     */
    private array $kioskModeApps = [];

    /**
     * Indicates whether or not to block the screen sleep button while in Kiosk Mode.
     */
    private ?bool $kioskModeBlockSleepButton;

    /**
     * Indicates whether or not to block the volume buttons while in Kiosk Mode.
     */
    private ?bool $kioskModeBlockVolumeButtons;

    /**
     * Indicates whether or not to block location services.
     */
    private ?bool $locationServicesBlocked;

    /**
     * Indicates whether or not to block Near-Field Communication.
     */
    private ?bool $nfcBlocked;

    /**
     * Indicates whether or not to block fingerprint unlock.
     */
    private ?bool $passwordBlockFingerprintUnlock;

    /**
     * Indicates whether or not to block Smart Lock and other trust agents.
     */
    private ?bool $passwordBlockTrustAgents;

    /**
     * Number of days before the password expires. Valid values 1 to 365
     */
    private ?float $passwordExpirationDays;

    /**
     * Minimum length of passwords. Valid values 4 to 16
     */
    private ?float $passwordMinimumLength;

    /**
     * Minutes of inactivity before the screen times out.
     */
    private ?float $passwordMinutesOfInactivityBeforeScreenTimeout;

    /**
     * Number of previous passwords to block. Valid values 0 to 24
     */
    private ?float $passwordPreviousPasswordBlockCount;

    /**
     * Indicates whether or not to require a password.
     */
    private ?bool $passwordRequired;

    /**
     */
    private ?string $passwordRequiredType;

    /**
     * Number of sign in failures allowed before factory reset. Valid values 1 to 16
     */
    private ?float $passwordSignInFailureCountBeforeFactoryReset;

    /**
     * Indicates whether or not to block powering off the device.
     */
    private ?bool $powerOffBlocked;

    /**
     * Indicates whether or not to block screenshots.
     */
    private ?bool $screenCaptureBlocked;

    /**
     * Require the Android Verify apps feature is turned on.
     */
    private ?bool $securityRequireVerifyApps;

    /**
     * Indicates whether or not to block Google Backup.
     */
    private ?bool $storageBlockGoogleBackup;

    /**
     * Indicates whether or not to block removable storage usage.
     */
    private ?bool $storageBlockRemovableStorage;

    /**
     * Indicates whether or not to require device encryption.
     */
    private ?bool $storageRequireDeviceEncryption;

    /**
     * Indicates whether or not to require removable storage encryption.
     */
    private ?bool $storageRequireRemovableStorageEncryption;

    /**
     * Indicates whether or not to block the use of the Voice Assistant.
     */
    private ?bool $voiceAssistantBlocked;

    /**
     * Indicates whether or not to block voice dialing.
     */
    private ?bool $voiceDialingBlocked;

    /**
     * Indicates whether or not to block the web browser's auto fill feature.
     */
    private ?bool $webBrowserBlockAutofill;

    /**
     * Indicates whether or not to block the web browser.
     */
    private ?bool $webBrowserBlocked;

    /**
     * Indicates whether or not to block JavaScript within the web browser.
     */
    private ?bool $webBrowserBlockJavaScript;

    /**
     * Indicates whether or not to block popups within the web browser.
     */
    private ?bool $webBrowserBlockPopups;

    /**
     */
    private ?string $webBrowserCookieSettings;

    /**
     * This topic provides descriptions of the declared methods, properties and relationships exposed by the androidGeneralDeviceConfiguration resource.
     */
    private ?string $wiFiBlocked;

    public function getAppsBlockClipboardSharing(): ?bool
    {
        return $this->appsBlockClipboardSharing;
    }

    public function setAppsBlockClipboardSharing(?bool $appsBlockClipboardSharing): self
    {
        $this->appsBlockClipboardSharing = $appsBlockClipboardSharing;
        return $this;
    }

    public function getAppsBlockCopyPaste(): ?bool
    {
        return $this->appsBlockCopyPaste;
    }

    public function setAppsBlockCopyPaste(?bool $appsBlockCopyPaste): self
    {
        $this->appsBlockCopyPaste = $appsBlockCopyPaste;
        return $this;
    }

    public function getAppsBlockYouTube(): ?bool
    {
        return $this->appsBlockYouTube;
    }

    public function setAppsBlockYouTube(?bool $appsBlockYouTube): self
    {
        $this->appsBlockYouTube = $appsBlockYouTube;
        return $this;
    }

    public function getAppsHideList(): array
    {
        return $this->appsHideList;
    }

    public function setAppsHideList(array $appsHideList): self
    {
        $this->appsHideList = $appsHideList;
        return $this;
    }

    public function getAppsInstallAllowList(): array
    {
        return $this->appsInstallAllowList;
    }

    public function setAppsInstallAllowList(array $appsInstallAllowList): self
    {
        $this->appsInstallAllowList = $appsInstallAllowList;
        return $this;
    }

    public function getAppsLaunchBlockList(): array
    {
        return $this->appsLaunchBlockList;
    }

    public function setAppsLaunchBlockList(array $appsLaunchBlockList): self
    {
        $this->appsLaunchBlockList = $appsLaunchBlockList;
        return $this;
    }

    public function getBluetoothBlocked(): ?bool
    {
        return $this->bluetoothBlocked;
    }

    public function setBluetoothBlocked(?bool $bluetoothBlocked): self
    {
        $this->bluetoothBlocked = $bluetoothBlocked;
        return $this;
    }

    public function getCameraBlocked(): ?bool
    {
        return $this->cameraBlocked;
    }

    public function setCameraBlocked(?bool $cameraBlocked): self
    {
        $this->cameraBlocked = $cameraBlocked;
        return $this;
    }

    public function getCellularBlockDataRoaming(): ?bool
    {
        return $this->cellularBlockDataRoaming;
    }

    public function setCellularBlockDataRoaming(?bool $cellularBlockDataRoaming): self
    {
        $this->cellularBlockDataRoaming = $cellularBlockDataRoaming;
        return $this;
    }

    public function getCellularBlockMessaging(): ?bool
    {
        return $this->cellularBlockMessaging;
    }

    public function setCellularBlockMessaging(?bool $cellularBlockMessaging): self
    {
        $this->cellularBlockMessaging = $cellularBlockMessaging;
        return $this;
    }

    public function getCellularBlockVoiceRoaming(): ?bool
    {
        return $this->cellularBlockVoiceRoaming;
    }

    public function setCellularBlockVoiceRoaming(?bool $cellularBlockVoiceRoaming): self
    {
        $this->cellularBlockVoiceRoaming = $cellularBlockVoiceRoaming;
        return $this;
    }

    public function getCellularBlockWiFiTethering(): ?bool
    {
        return $this->cellularBlockWiFiTethering;
    }

    public function setCellularBlockWiFiTethering(?bool $cellularBlockWiFiTethering): self
    {
        $this->cellularBlockWiFiTethering = $cellularBlockWiFiTethering;
        return $this;
    }

    public function getCompliantAppListType(): ?string
    {
        return $this->compliantAppListType;
    }

    public function setCompliantAppListType(?string $compliantAppListType): self
    {
        $this->compliantAppListType = $compliantAppListType;
        return $this;
    }

    public function getCompliantAppsList(): array
    {
        return $this->compliantAppsList;
    }

    public function setCompliantAppsList(array $compliantAppsList): self
    {
        $this->compliantAppsList = $compliantAppsList;
        return $this;
    }

    public function getDeviceSharingAllowed(): ?bool
    {
        return $this->deviceSharingAllowed;
    }

    public function setDeviceSharingAllowed(?bool $deviceSharingAllowed): self
    {
        $this->deviceSharingAllowed = $deviceSharingAllowed;
        return $this;
    }

    public function getDiagnosticDataBlockSubmission(): ?bool
    {
        return $this->diagnosticDataBlockSubmission;
    }

    public function setDiagnosticDataBlockSubmission(?bool $diagnosticDataBlockSubmission): self
    {
        $this->diagnosticDataBlockSubmission = $diagnosticDataBlockSubmission;
        return $this;
    }

    public function getFactoryResetBlocked(): ?bool
    {
        return $this->factoryResetBlocked;
    }

    public function setFactoryResetBlocked(?bool $factoryResetBlocked): self
    {
        $this->factoryResetBlocked = $factoryResetBlocked;
        return $this;
    }

    public function getGoogleAccountBlockAutoSync(): ?bool
    {
        return $this->googleAccountBlockAutoSync;
    }

    public function setGoogleAccountBlockAutoSync(?bool $googleAccountBlockAutoSync): self
    {
        $this->googleAccountBlockAutoSync = $googleAccountBlockAutoSync;
        return $this;
    }

    public function getGooglePlayStoreBlocked(): ?bool
    {
        return $this->googlePlayStoreBlocked;
    }

    public function setGooglePlayStoreBlocked(?bool $googlePlayStoreBlocked): self
    {
        $this->googlePlayStoreBlocked = $googlePlayStoreBlocked;
        return $this;
    }

    public function getKioskModeApps(): array
    {
        return $this->kioskModeApps;
    }

    public function setKioskModeApps(array $kioskModeApps): self
    {
        $this->kioskModeApps = $kioskModeApps;
        return $this;
    }

    public function getKioskModeBlockSleepButton(): ?bool
    {
        return $this->kioskModeBlockSleepButton;
    }

    public function setKioskModeBlockSleepButton(?bool $kioskModeBlockSleepButton): self
    {
        $this->kioskModeBlockSleepButton = $kioskModeBlockSleepButton;
        return $this;
    }

    public function getKioskModeBlockVolumeButtons(): ?bool
    {
        return $this->kioskModeBlockVolumeButtons;
    }

    public function setKioskModeBlockVolumeButtons(?bool $kioskModeBlockVolumeButtons): self
    {
        $this->kioskModeBlockVolumeButtons = $kioskModeBlockVolumeButtons;
        return $this;
    }

    public function getLocationServicesBlocked(): ?bool
    {
        return $this->locationServicesBlocked;
    }

    public function setLocationServicesBlocked(?bool $locationServicesBlocked): self
    {
        $this->locationServicesBlocked = $locationServicesBlocked;
        return $this;
    }

    public function getNfcBlocked(): ?bool
    {
        return $this->nfcBlocked;
    }

    public function setNfcBlocked(?bool $nfcBlocked): self
    {
        $this->nfcBlocked = $nfcBlocked;
        return $this;
    }

    public function getPasswordBlockFingerprintUnlock(): ?bool
    {
        return $this->passwordBlockFingerprintUnlock;
    }

    public function setPasswordBlockFingerprintUnlock(?bool $passwordBlockFingerprintUnlock): self
    {
        $this->passwordBlockFingerprintUnlock = $passwordBlockFingerprintUnlock;
        return $this;
    }

    public function getPasswordBlockTrustAgents(): ?bool
    {
        return $this->passwordBlockTrustAgents;
    }

    public function setPasswordBlockTrustAgents(?bool $passwordBlockTrustAgents): self
    {
        $this->passwordBlockTrustAgents = $passwordBlockTrustAgents;
        return $this;
    }

    public function getPasswordExpirationDays(): ?float
    {
        return $this->passwordExpirationDays;
    }

    public function setPasswordExpirationDays(?float $passwordExpirationDays): self
    {
        $this->passwordExpirationDays = $passwordExpirationDays;
        return $this;
    }

    public function getPasswordMinimumLength(): ?float
    {
        return $this->passwordMinimumLength;
    }

    public function setPasswordMinimumLength(?float $passwordMinimumLength): self
    {
        $this->passwordMinimumLength = $passwordMinimumLength;
        return $this;
    }

    public function getPasswordMinutesOfInactivityBeforeScreenTimeout(): ?float
    {
        return $this->passwordMinutesOfInactivityBeforeScreenTimeout;
    }

    public function setPasswordMinutesOfInactivityBeforeScreenTimeout(?float $passwordMinutesOfInactivityBeforeScreenTimeout): self
    {
        $this->passwordMinutesOfInactivityBeforeScreenTimeout = $passwordMinutesOfInactivityBeforeScreenTimeout;
        return $this;
    }

    public function getPasswordPreviousPasswordBlockCount(): ?float
    {
        return $this->passwordPreviousPasswordBlockCount;
    }

    public function setPasswordPreviousPasswordBlockCount(?float $passwordPreviousPasswordBlockCount): self
    {
        $this->passwordPreviousPasswordBlockCount = $passwordPreviousPasswordBlockCount;
        return $this;
    }

    public function getPasswordRequired(): ?bool
    {
        return $this->passwordRequired;
    }

    public function setPasswordRequired(?bool $passwordRequired): self
    {
        $this->passwordRequired = $passwordRequired;
        return $this;
    }

    public function getPasswordRequiredType(): ?string
    {
        return $this->passwordRequiredType;
    }

    public function setPasswordRequiredType(?string $passwordRequiredType): self
    {
        $this->passwordRequiredType = $passwordRequiredType;
        return $this;
    }

    public function getPasswordSignInFailureCountBeforeFactoryReset(): ?float
    {
        return $this->passwordSignInFailureCountBeforeFactoryReset;
    }

    public function setPasswordSignInFailureCountBeforeFactoryReset(?float $passwordSignInFailureCountBeforeFactoryReset): self
    {
        $this->passwordSignInFailureCountBeforeFactoryReset = $passwordSignInFailureCountBeforeFactoryReset;
        return $this;
    }

    public function getPowerOffBlocked(): ?bool
    {
        return $this->powerOffBlocked;
    }

    public function setPowerOffBlocked(?bool $powerOffBlocked): self
    {
        $this->powerOffBlocked = $powerOffBlocked;
        return $this;
    }

    public function getScreenCaptureBlocked(): ?bool
    {
        return $this->screenCaptureBlocked;
    }

    public function setScreenCaptureBlocked(?bool $screenCaptureBlocked): self
    {
        $this->screenCaptureBlocked = $screenCaptureBlocked;
        return $this;
    }

    public function getSecurityRequireVerifyApps(): ?bool
    {
        return $this->securityRequireVerifyApps;
    }

    public function setSecurityRequireVerifyApps(?bool $securityRequireVerifyApps): self
    {
        $this->securityRequireVerifyApps = $securityRequireVerifyApps;
        return $this;
    }

    public function getStorageBlockGoogleBackup(): ?bool
    {
        return $this->storageBlockGoogleBackup;
    }

    public function setStorageBlockGoogleBackup(?bool $storageBlockGoogleBackup): self
    {
        $this->storageBlockGoogleBackup = $storageBlockGoogleBackup;
        return $this;
    }

    public function getStorageBlockRemovableStorage(): ?bool
    {
        return $this->storageBlockRemovableStorage;
    }

    public function setStorageBlockRemovableStorage(?bool $storageBlockRemovableStorage): self
    {
        $this->storageBlockRemovableStorage = $storageBlockRemovableStorage;
        return $this;
    }

    public function getStorageRequireDeviceEncryption(): ?bool
    {
        return $this->storageRequireDeviceEncryption;
    }

    public function setStorageRequireDeviceEncryption(?bool $storageRequireDeviceEncryption): self
    {
        $this->storageRequireDeviceEncryption = $storageRequireDeviceEncryption;
        return $this;
    }

    public function getStorageRequireRemovableStorageEncryption(): ?bool
    {
        return $this->storageRequireRemovableStorageEncryption;
    }

    public function setStorageRequireRemovableStorageEncryption(?bool $storageRequireRemovableStorageEncryption): self
    {
        $this->storageRequireRemovableStorageEncryption = $storageRequireRemovableStorageEncryption;
        return $this;
    }

    public function getVoiceAssistantBlocked(): ?bool
    {
        return $this->voiceAssistantBlocked;
    }

    public function setVoiceAssistantBlocked(?bool $voiceAssistantBlocked): self
    {
        $this->voiceAssistantBlocked = $voiceAssistantBlocked;
        return $this;
    }

    public function getVoiceDialingBlocked(): ?bool
    {
        return $this->voiceDialingBlocked;
    }

    public function setVoiceDialingBlocked(?bool $voiceDialingBlocked): self
    {
        $this->voiceDialingBlocked = $voiceDialingBlocked;
        return $this;
    }

    public function getWebBrowserBlockAutofill(): ?bool
    {
        return $this->webBrowserBlockAutofill;
    }

    public function setWebBrowserBlockAutofill(?bool $webBrowserBlockAutofill): self
    {
        $this->webBrowserBlockAutofill = $webBrowserBlockAutofill;
        return $this;
    }

    public function getWebBrowserBlocked(): ?bool
    {
        return $this->webBrowserBlocked;
    }

    public function setWebBrowserBlocked(?bool $webBrowserBlocked): self
    {
        $this->webBrowserBlocked = $webBrowserBlocked;
        return $this;
    }

    public function getWebBrowserBlockJavaScript(): ?bool
    {
        return $this->webBrowserBlockJavaScript;
    }

    public function setWebBrowserBlockJavaScript(?bool $webBrowserBlockJavaScript): self
    {
        $this->webBrowserBlockJavaScript = $webBrowserBlockJavaScript;
        return $this;
    }

    public function getWebBrowserBlockPopups(): ?bool
    {
        return $this->webBrowserBlockPopups;
    }

    public function setWebBrowserBlockPopups(?bool $webBrowserBlockPopups): self
    {
        $this->webBrowserBlockPopups = $webBrowserBlockPopups;
        return $this;
    }

    public function getWebBrowserCookieSettings(): ?string
    {
        return $this->webBrowserCookieSettings;
    }

    public function setWebBrowserCookieSettings(?string $webBrowserCookieSettings): self
    {
        $this->webBrowserCookieSettings = $webBrowserCookieSettings;
        return $this;
    }

    public function getWiFiBlocked(): ?string
    {
        return $this->wiFiBlocked;
    }

    public function setWiFiBlocked(?string $wiFiBlocked): self
    {
        $this->wiFiBlocked = $wiFiBlocked;
        return $this;
    }

}
