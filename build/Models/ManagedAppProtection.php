<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedAppProtection
 */
class ManagedAppProtection
{
    /**
     * Data storage locations where a user may store managed data.
     */
    private array $allowedDataStorageLocations = [];

    /**
     */
    private ?string $allowedInboundDataTransferSources;

    /**
     */
    private ?string $allowedOutboundClipboardSharingLevel;

    /**
     */
    private ?string $allowedOutboundDataTransferDestinations;

    /**
     * Indicates whether contacts can be synced to the user's device.
     */
    private ?bool $contactSyncBlocked;

    /**
     * Indicates whether the backup of a managed app's data is blocked.
     */
    private ?bool $dataBackupBlocked;

    /**
     * Indicates whether device compliance is required.
     */
    private ?bool $deviceComplianceRequired;

    /**
     * Indicates whether use of the app pin is required if the device pin is set.
     */
    private ?bool $disableAppPinIfDevicePinIsSet;

    /**
     * Indicates whether use of the fingerprint reader is allowed in place of a pin if PinRequired is set to True.
     */
    private ?bool $fingerprintBlocked;

    /**
     */
    private ?string $managedBrowser;

    /**
     * Indicates whether internet links should be opened in the managed browser app, or any custom browser specified by CustomBrowserProtocol (for iOS) or CustomBrowserPackageId/CustomBrowserDisplayName (for Android)
     */
    private ?bool $managedBrowserToOpenLinksRequired;

    /**
     * Maximum number of incorrect pin retry attempts before the managed app is either blocked or wiped.
     */
    private ?float $maximumPinRetries;

    /**
     * Minimum pin length required for an app-level pin if PinRequired is set to True
     */
    private ?float $minimumPinLength;

    /**
     * Versions less than the specified version will block the managed app from accessing company data.
     */
    private ?string $minimumRequiredAppVersion;

    /**
     * Versions less than the specified version will block the managed app from accessing company data.
     */
    private ?string $minimumRequiredOsVersion;

    /**
     * Versions less than the specified version will result in warning message on the managed app.
     */
    private ?string $minimumWarningAppVersion;

    /**
     * Versions less than the specified version will result in warning message on the managed app from accessing company data.
     */
    private ?string $minimumWarningOsVersion;

    /**
     * Indicates whether organizational credentials are required for app use.
     */
    private ?bool $organizationalCredentialsRequired;

    /**
     * TimePeriod before the all-level pin must be reset if PinRequired is set to True.
     */
    private ?string $periodBeforePinReset;

    /**
     * The period after which access is checked when the device is not connected to the internet.
     */
    private ?string $periodOfflineBeforeAccessCheck;

    /**
     * The amount of time an app is allowed to remain disconnected from the internet before all managed data it is wiped.
     */
    private ?string $periodOfflineBeforeWipeIsEnforced;

    /**
     * The period after which access is checked when the device is connected to the internet.
     */
    private ?string $periodOnlineBeforeAccessCheck;

    /**
     */
    private ?string $pinCharacterSet;

    /**
     * Indicates whether an app-level pin is required.
     */
    private ?bool $pinRequired;

    /**
     * Indicates whether printing is allowed from managed apps.
     */
    private ?bool $printBlocked;

    /**
     * Indicates whether users may use the 'Save As' menu item to save a copy of protected files.
     */
    private ?bool $saveAsBlocked;

    /**
     * Policy used to configure detailed management settings for a specified set of apps
     */
    private ?string $simplePinBlocked;


    public function getAllowedDataStorageLocations(): array
    {
        return $this->allowedDataStorageLocations;
    }

    public function setAllowedDataStorageLocations(array $allowedDataStorageLocations): self
    {
        $this->allowedDataStorageLocations = $allowedDataStorageLocations;
        return $this;
    }

    public function getAllowedInboundDataTransferSources(): ?string
    {
        return $this->allowedInboundDataTransferSources;
    }

    public function setAllowedInboundDataTransferSources(?string $allowedInboundDataTransferSources): self
    {
        $this->allowedInboundDataTransferSources = $allowedInboundDataTransferSources;
        return $this;
    }

    public function getAllowedOutboundClipboardSharingLevel(): ?string
    {
        return $this->allowedOutboundClipboardSharingLevel;
    }

    public function setAllowedOutboundClipboardSharingLevel(?string $allowedOutboundClipboardSharingLevel): self
    {
        $this->allowedOutboundClipboardSharingLevel = $allowedOutboundClipboardSharingLevel;
        return $this;
    }

    public function getAllowedOutboundDataTransferDestinations(): ?string
    {
        return $this->allowedOutboundDataTransferDestinations;
    }

    public function setAllowedOutboundDataTransferDestinations(?string $allowedOutboundDataTransferDestinations): self
    {
        $this->allowedOutboundDataTransferDestinations = $allowedOutboundDataTransferDestinations;
        return $this;
    }

    public function getContactSyncBlocked(): ?bool
    {
        return $this->contactSyncBlocked;
    }

    public function setContactSyncBlocked(?bool $contactSyncBlocked): self
    {
        $this->contactSyncBlocked = $contactSyncBlocked;
        return $this;
    }

    public function getDataBackupBlocked(): ?bool
    {
        return $this->dataBackupBlocked;
    }

    public function setDataBackupBlocked(?bool $dataBackupBlocked): self
    {
        $this->dataBackupBlocked = $dataBackupBlocked;
        return $this;
    }

    public function getDeviceComplianceRequired(): ?bool
    {
        return $this->deviceComplianceRequired;
    }

    public function setDeviceComplianceRequired(?bool $deviceComplianceRequired): self
    {
        $this->deviceComplianceRequired = $deviceComplianceRequired;
        return $this;
    }

    public function getDisableAppPinIfDevicePinIsSet(): ?bool
    {
        return $this->disableAppPinIfDevicePinIsSet;
    }

    public function setDisableAppPinIfDevicePinIsSet(?bool $disableAppPinIfDevicePinIsSet): self
    {
        $this->disableAppPinIfDevicePinIsSet = $disableAppPinIfDevicePinIsSet;
        return $this;
    }

    public function getFingerprintBlocked(): ?bool
    {
        return $this->fingerprintBlocked;
    }

    public function setFingerprintBlocked(?bool $fingerprintBlocked): self
    {
        $this->fingerprintBlocked = $fingerprintBlocked;
        return $this;
    }

    public function getManagedBrowser(): ?string
    {
        return $this->managedBrowser;
    }

    public function setManagedBrowser(?string $managedBrowser): self
    {
        $this->managedBrowser = $managedBrowser;
        return $this;
    }

    public function getManagedBrowserToOpenLinksRequired(): ?bool
    {
        return $this->managedBrowserToOpenLinksRequired;
    }

    public function setManagedBrowserToOpenLinksRequired(?bool $managedBrowserToOpenLinksRequired): self
    {
        $this->managedBrowserToOpenLinksRequired = $managedBrowserToOpenLinksRequired;
        return $this;
    }

    public function getMaximumPinRetries(): ?float
    {
        return $this->maximumPinRetries;
    }

    public function setMaximumPinRetries(?float $maximumPinRetries): self
    {
        $this->maximumPinRetries = $maximumPinRetries;
        return $this;
    }

    public function getMinimumPinLength(): ?float
    {
        return $this->minimumPinLength;
    }

    public function setMinimumPinLength(?float $minimumPinLength): self
    {
        $this->minimumPinLength = $minimumPinLength;
        return $this;
    }

    public function getMinimumRequiredAppVersion(): ?string
    {
        return $this->minimumRequiredAppVersion;
    }

    public function setMinimumRequiredAppVersion(?string $minimumRequiredAppVersion): self
    {
        $this->minimumRequiredAppVersion = $minimumRequiredAppVersion;
        return $this;
    }

    public function getMinimumRequiredOsVersion(): ?string
    {
        return $this->minimumRequiredOsVersion;
    }

    public function setMinimumRequiredOsVersion(?string $minimumRequiredOsVersion): self
    {
        $this->minimumRequiredOsVersion = $minimumRequiredOsVersion;
        return $this;
    }

    public function getMinimumWarningAppVersion(): ?string
    {
        return $this->minimumWarningAppVersion;
    }

    public function setMinimumWarningAppVersion(?string $minimumWarningAppVersion): self
    {
        $this->minimumWarningAppVersion = $minimumWarningAppVersion;
        return $this;
    }

    public function getMinimumWarningOsVersion(): ?string
    {
        return $this->minimumWarningOsVersion;
    }

    public function setMinimumWarningOsVersion(?string $minimumWarningOsVersion): self
    {
        $this->minimumWarningOsVersion = $minimumWarningOsVersion;
        return $this;
    }

    public function getOrganizationalCredentialsRequired(): ?bool
    {
        return $this->organizationalCredentialsRequired;
    }

    public function setOrganizationalCredentialsRequired(?bool $organizationalCredentialsRequired): self
    {
        $this->organizationalCredentialsRequired = $organizationalCredentialsRequired;
        return $this;
    }

    public function getPeriodBeforePinReset(): ?string
    {
        return $this->periodBeforePinReset;
    }

    public function setPeriodBeforePinReset(?string $periodBeforePinReset): self
    {
        $this->periodBeforePinReset = $periodBeforePinReset;
        return $this;
    }

    public function getPeriodOfflineBeforeAccessCheck(): ?string
    {
        return $this->periodOfflineBeforeAccessCheck;
    }

    public function setPeriodOfflineBeforeAccessCheck(?string $periodOfflineBeforeAccessCheck): self
    {
        $this->periodOfflineBeforeAccessCheck = $periodOfflineBeforeAccessCheck;
        return $this;
    }

    public function getPeriodOfflineBeforeWipeIsEnforced(): ?string
    {
        return $this->periodOfflineBeforeWipeIsEnforced;
    }

    public function setPeriodOfflineBeforeWipeIsEnforced(?string $periodOfflineBeforeWipeIsEnforced): self
    {
        $this->periodOfflineBeforeWipeIsEnforced = $periodOfflineBeforeWipeIsEnforced;
        return $this;
    }

    public function getPeriodOnlineBeforeAccessCheck(): ?string
    {
        return $this->periodOnlineBeforeAccessCheck;
    }

    public function setPeriodOnlineBeforeAccessCheck(?string $periodOnlineBeforeAccessCheck): self
    {
        $this->periodOnlineBeforeAccessCheck = $periodOnlineBeforeAccessCheck;
        return $this;
    }

    public function getPinCharacterSet(): ?string
    {
        return $this->pinCharacterSet;
    }

    public function setPinCharacterSet(?string $pinCharacterSet): self
    {
        $this->pinCharacterSet = $pinCharacterSet;
        return $this;
    }

    public function getPinRequired(): ?bool
    {
        return $this->pinRequired;
    }

    public function setPinRequired(?bool $pinRequired): self
    {
        $this->pinRequired = $pinRequired;
        return $this;
    }

    public function getPrintBlocked(): ?bool
    {
        return $this->printBlocked;
    }

    public function setPrintBlocked(?bool $printBlocked): self
    {
        $this->printBlocked = $printBlocked;
        return $this;
    }

    public function getSaveAsBlocked(): ?bool
    {
        return $this->saveAsBlocked;
    }

    public function setSaveAsBlocked(?bool $saveAsBlocked): self
    {
        $this->saveAsBlocked = $saveAsBlocked;
        return $this;
    }

    public function getSimplePinBlocked(): ?string
    {
        return $this->simplePinBlocked;
    }

    public function setSimplePinBlocked(?string $simplePinBlocked): self
    {
        $this->simplePinBlocked = $simplePinBlocked;
        return $this;
    }

}
