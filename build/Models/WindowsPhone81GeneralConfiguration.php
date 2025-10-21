<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsPhone81GeneralConfiguration
 */
class WindowsPhone81GeneralConfiguration
{
    /**
     * Value indicating whether this policy only applies to Windows Phone 8.1. This property is read-only.
     */
    private ?bool $applyOnlyToWindowsPhone81;

    /**
     * Indicates whether or not to block copy paste.
     */
    private ?bool $appsBlockCopyPaste;

    /**
     * Indicates whether or not to block bluetooth.
     */
    private ?bool $bluetoothBlocked;

    /**
     * Indicates whether or not to block camera.
     */
    private ?bool $cameraBlocked;

    /**
     * Indicates whether or not to block Wi-Fi tethering. Has no impact if Wi-Fi is blocked.
     */
    private ?bool $cellularBlockWifiTethering;

    /**
     */
    private ?string $compliantAppListType;

    /**
     * List of apps in the compliance (either allow list or block list, controlled by CompliantAppListType). This collection can contain a maximum of 10000 elements.
     */
    private array $compliantAppsList = [];

    /**
     * Indicates whether or not to block diagnostic data submission.
     */
    private ?bool $diagnosticDataBlockSubmission;

    /**
     * Indicates whether or not to block custom email accounts.
     */
    private ?bool $emailBlockAddingAccounts;

    /**
     * Indicates whether or not to block location services.
     */
    private ?bool $locationServicesBlocked;

    /**
     * Indicates whether or not to block using a Microsoft Account.
     */
    private ?bool $microsoftAccountBlocked;

    /**
     * Indicates whether or not to block Near-Field Communication.
     */
    private ?bool $nfcBlocked;

    /**
     * Indicates whether or not to block syncing the calendar.
     */
    private ?bool $passwordBlockSimple;

    /**
     * Number of days before the password expires.
     */
    private ?float $passwordExpirationDays;

    /**
     * Number of character sets a password must contain.
     */
    private ?float $passwordMinimumCharacterSetCount;

    /**
     * Minimum length of passwords.
     */
    private ?float $passwordMinimumLength;

    /**
     * Minutes of inactivity before screen timeout.
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
     * Number of sign in failures allowed before factory reset.
     */
    private ?float $passwordSignInFailureCountBeforeFactoryReset;

    /**
     * Indicates whether or not to block screenshots.
     */
    private ?bool $screenCaptureBlocked;

    /**
     * Indicates whether or not to block removable storage.
     */
    private ?bool $storageBlockRemovableStorage;

    /**
     * Indicates whether or not to require encryption.
     */
    private ?bool $storageRequireEncryption;

    /**
     * Indicates whether or not to block the web browser.
     */
    private ?bool $webBrowserBlocked;

    /**
     * Indicates whether or not to block automatically connecting to Wi-Fi hotspots. Has no impact if Wi-Fi is blocked.
     */
    private ?bool $wifiBlockAutomaticConnectHotspots;

    /**
     * Indicates whether or not to block Wi-Fi.
     */
    private ?bool $wifiBlocked;

    /**
     * Indicates whether or not to block Wi-Fi hotspot reporting. Has no impact if Wi-Fi is blocked.
     */
    private ?bool $wifiBlockHotspotReporting;

    /**
     * This topic provides descriptions of the declared methods, properties and relationships exposed by the windowsPhone81GeneralConfiguration resource.
     */
    private ?string $windowsStoreBlocked;


    public function getApplyOnlyToWindowsPhone81(): ?bool
    {
        return $this->applyOnlyToWindowsPhone81;
    }

    public function setApplyOnlyToWindowsPhone81(?bool $applyOnlyToWindowsPhone81): self
    {
        $this->applyOnlyToWindowsPhone81 = $applyOnlyToWindowsPhone81;
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

    public function getCellularBlockWifiTethering(): ?bool
    {
        return $this->cellularBlockWifiTethering;
    }

    public function setCellularBlockWifiTethering(?bool $cellularBlockWifiTethering): self
    {
        $this->cellularBlockWifiTethering = $cellularBlockWifiTethering;
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

    public function getDiagnosticDataBlockSubmission(): ?bool
    {
        return $this->diagnosticDataBlockSubmission;
    }

    public function setDiagnosticDataBlockSubmission(?bool $diagnosticDataBlockSubmission): self
    {
        $this->diagnosticDataBlockSubmission = $diagnosticDataBlockSubmission;
        return $this;
    }

    public function getEmailBlockAddingAccounts(): ?bool
    {
        return $this->emailBlockAddingAccounts;
    }

    public function setEmailBlockAddingAccounts(?bool $emailBlockAddingAccounts): self
    {
        $this->emailBlockAddingAccounts = $emailBlockAddingAccounts;
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

    public function getMicrosoftAccountBlocked(): ?bool
    {
        return $this->microsoftAccountBlocked;
    }

    public function setMicrosoftAccountBlocked(?bool $microsoftAccountBlocked): self
    {
        $this->microsoftAccountBlocked = $microsoftAccountBlocked;
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

    public function getPasswordBlockSimple(): ?bool
    {
        return $this->passwordBlockSimple;
    }

    public function setPasswordBlockSimple(?bool $passwordBlockSimple): self
    {
        $this->passwordBlockSimple = $passwordBlockSimple;
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

    public function getPasswordMinimumCharacterSetCount(): ?float
    {
        return $this->passwordMinimumCharacterSetCount;
    }

    public function setPasswordMinimumCharacterSetCount(?float $passwordMinimumCharacterSetCount): self
    {
        $this->passwordMinimumCharacterSetCount = $passwordMinimumCharacterSetCount;
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

    public function getScreenCaptureBlocked(): ?bool
    {
        return $this->screenCaptureBlocked;
    }

    public function setScreenCaptureBlocked(?bool $screenCaptureBlocked): self
    {
        $this->screenCaptureBlocked = $screenCaptureBlocked;
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

    public function getStorageRequireEncryption(): ?bool
    {
        return $this->storageRequireEncryption;
    }

    public function setStorageRequireEncryption(?bool $storageRequireEncryption): self
    {
        $this->storageRequireEncryption = $storageRequireEncryption;
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

    public function getWifiBlockAutomaticConnectHotspots(): ?bool
    {
        return $this->wifiBlockAutomaticConnectHotspots;
    }

    public function setWifiBlockAutomaticConnectHotspots(?bool $wifiBlockAutomaticConnectHotspots): self
    {
        $this->wifiBlockAutomaticConnectHotspots = $wifiBlockAutomaticConnectHotspots;
        return $this;
    }

    public function getWifiBlocked(): ?bool
    {
        return $this->wifiBlocked;
    }

    public function setWifiBlocked(?bool $wifiBlocked): self
    {
        $this->wifiBlocked = $wifiBlocked;
        return $this;
    }

    public function getWifiBlockHotspotReporting(): ?bool
    {
        return $this->wifiBlockHotspotReporting;
    }

    public function setWifiBlockHotspotReporting(?bool $wifiBlockHotspotReporting): self
    {
        $this->wifiBlockHotspotReporting = $wifiBlockHotspotReporting;
        return $this;
    }

    public function getWindowsStoreBlocked(): ?string
    {
        return $this->windowsStoreBlocked;
    }

    public function setWindowsStoreBlocked(?string $windowsStoreBlocked): self
    {
        $this->windowsStoreBlocked = $windowsStoreBlocked;
        return $this;
    }

}
