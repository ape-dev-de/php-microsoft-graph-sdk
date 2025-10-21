<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Windows81GeneralConfiguration
 */
class Windows81GeneralConfiguration
{
    /**
     * Indicates whether or not to Block the user from adding email accounts to the device that are not associated with a Microsoft account.
     */
    private ?bool $accountsBlockAddingNonMicrosoftAccountEmail;

    /**
     * Value indicating whether this policy only applies to Windows 8.1. This property is read-only.
     */
    private ?bool $applyOnlyToWindows81;

    /**
     * Indicates whether or not to block auto fill.
     */
    private ?bool $browserBlockAutofill;

    /**
     * Indicates whether or not to block automatic detection of Intranet sites.
     */
    private ?bool $browserBlockAutomaticDetectionOfIntranetSites;

    /**
     * Indicates whether or not to block enterprise mode access.
     */
    private ?bool $browserBlockEnterpriseModeAccess;

    /**
     * Indicates whether or not to Block the user from using JavaScript.
     */
    private ?bool $browserBlockJavaScript;

    /**
     * Indicates whether or not to block plug-ins.
     */
    private ?bool $browserBlockPlugins;

    /**
     * Indicates whether or not to block popups.
     */
    private ?bool $browserBlockPopups;

    /**
     * Indicates whether or not to Block the user from sending the do not track header.
     */
    private ?bool $browserBlockSendingDoNotTrackHeader;

    /**
     * Indicates whether or not to block a single word entry on Intranet sites.
     */
    private ?bool $browserBlockSingleWordEntryOnIntranetSites;

    /**
     * The enterprise mode site list location. Could be a local file, local network or http location.
     */
    private ?string $browserEnterpriseModeSiteListLocation;

    /**
     */
    private ?string $browserInternetSecurityLevel;

    /**
     */
    private ?string $browserIntranetSecurityLevel;

    /**
     * The logging report location.
     */
    private ?string $browserLoggingReportLocation;

    /**
     * Indicates whether or not to require a firewall.
     */
    private ?bool $browserRequireFirewall;

    /**
     * Indicates whether or not to require fraud warning.
     */
    private ?bool $browserRequireFraudWarning;

    /**
     * Indicates whether or not to require high security for restricted sites.
     */
    private ?bool $browserRequireHighSecurityForRestrictedSites;

    /**
     * Indicates whether or not to require the user to use the smart screen filter.
     */
    private ?bool $browserRequireSmartScreen;

    /**
     */
    private ?string $browserTrustedSitesSecurityLevel;

    /**
     * Indicates whether or not to block data roaming.
     */
    private ?bool $cellularBlockDataRoaming;

    /**
     * Indicates whether or not to block diagnostic data submission.
     */
    private ?bool $diagnosticsBlockDataSubmission;

    /**
     * Indicates whether or not to Block the user from using a pictures password and pin.
     */
    private ?bool $passwordBlockPicturePasswordAndPin;

    /**
     * Password expiration in days.
     */
    private ?float $passwordExpirationDays;

    /**
     * The number of character sets required in the password.
     */
    private ?float $passwordMinimumCharacterSetCount;

    /**
     * The minimum password length.
     */
    private ?float $passwordMinimumLength;

    /**
     * The minutes of inactivity before the screen times out.
     */
    private ?float $passwordMinutesOfInactivityBeforeScreenTimeout;

    /**
     * The number of previous passwords to prevent re-use of. Valid values 0 to 24
     */
    private ?float $passwordPreviousPasswordBlockCount;

    /**
     */
    private ?string $passwordRequiredType;

    /**
     * The number of sign in failures before factory reset.
     */
    private ?float $passwordSignInFailureCountBeforeFactoryReset;

    /**
     * Indicates whether or not to require encryption on a mobile device.
     */
    private ?bool $storageRequireDeviceEncryption;

    /**
     * Indicates whether or not to require automatic updates.
     */
    private ?bool $updatesRequireAutomaticUpdates;

    /**
     */
    private ?string $userAccountControlSettings;

    /**
     * This topic provides descriptions of the declared methods, properties and relationships exposed by the windows81GeneralConfiguration resource.
     */
    private ?string $workFoldersUrl;


    public function getAccountsBlockAddingNonMicrosoftAccountEmail(): ?bool
    {
        return $this->accountsBlockAddingNonMicrosoftAccountEmail;
    }

    public function setAccountsBlockAddingNonMicrosoftAccountEmail(?bool $accountsBlockAddingNonMicrosoftAccountEmail): self
    {
        $this->accountsBlockAddingNonMicrosoftAccountEmail = $accountsBlockAddingNonMicrosoftAccountEmail;
        return $this;
    }

    public function getApplyOnlyToWindows81(): ?bool
    {
        return $this->applyOnlyToWindows81;
    }

    public function setApplyOnlyToWindows81(?bool $applyOnlyToWindows81): self
    {
        $this->applyOnlyToWindows81 = $applyOnlyToWindows81;
        return $this;
    }

    public function getBrowserBlockAutofill(): ?bool
    {
        return $this->browserBlockAutofill;
    }

    public function setBrowserBlockAutofill(?bool $browserBlockAutofill): self
    {
        $this->browserBlockAutofill = $browserBlockAutofill;
        return $this;
    }

    public function getBrowserBlockAutomaticDetectionOfIntranetSites(): ?bool
    {
        return $this->browserBlockAutomaticDetectionOfIntranetSites;
    }

    public function setBrowserBlockAutomaticDetectionOfIntranetSites(?bool $browserBlockAutomaticDetectionOfIntranetSites): self
    {
        $this->browserBlockAutomaticDetectionOfIntranetSites = $browserBlockAutomaticDetectionOfIntranetSites;
        return $this;
    }

    public function getBrowserBlockEnterpriseModeAccess(): ?bool
    {
        return $this->browserBlockEnterpriseModeAccess;
    }

    public function setBrowserBlockEnterpriseModeAccess(?bool $browserBlockEnterpriseModeAccess): self
    {
        $this->browserBlockEnterpriseModeAccess = $browserBlockEnterpriseModeAccess;
        return $this;
    }

    public function getBrowserBlockJavaScript(): ?bool
    {
        return $this->browserBlockJavaScript;
    }

    public function setBrowserBlockJavaScript(?bool $browserBlockJavaScript): self
    {
        $this->browserBlockJavaScript = $browserBlockJavaScript;
        return $this;
    }

    public function getBrowserBlockPlugins(): ?bool
    {
        return $this->browserBlockPlugins;
    }

    public function setBrowserBlockPlugins(?bool $browserBlockPlugins): self
    {
        $this->browserBlockPlugins = $browserBlockPlugins;
        return $this;
    }

    public function getBrowserBlockPopups(): ?bool
    {
        return $this->browserBlockPopups;
    }

    public function setBrowserBlockPopups(?bool $browserBlockPopups): self
    {
        $this->browserBlockPopups = $browserBlockPopups;
        return $this;
    }

    public function getBrowserBlockSendingDoNotTrackHeader(): ?bool
    {
        return $this->browserBlockSendingDoNotTrackHeader;
    }

    public function setBrowserBlockSendingDoNotTrackHeader(?bool $browserBlockSendingDoNotTrackHeader): self
    {
        $this->browserBlockSendingDoNotTrackHeader = $browserBlockSendingDoNotTrackHeader;
        return $this;
    }

    public function getBrowserBlockSingleWordEntryOnIntranetSites(): ?bool
    {
        return $this->browserBlockSingleWordEntryOnIntranetSites;
    }

    public function setBrowserBlockSingleWordEntryOnIntranetSites(?bool $browserBlockSingleWordEntryOnIntranetSites): self
    {
        $this->browserBlockSingleWordEntryOnIntranetSites = $browserBlockSingleWordEntryOnIntranetSites;
        return $this;
    }

    public function getBrowserEnterpriseModeSiteListLocation(): ?string
    {
        return $this->browserEnterpriseModeSiteListLocation;
    }

    public function setBrowserEnterpriseModeSiteListLocation(?string $browserEnterpriseModeSiteListLocation): self
    {
        $this->browserEnterpriseModeSiteListLocation = $browserEnterpriseModeSiteListLocation;
        return $this;
    }

    public function getBrowserInternetSecurityLevel(): ?string
    {
        return $this->browserInternetSecurityLevel;
    }

    public function setBrowserInternetSecurityLevel(?string $browserInternetSecurityLevel): self
    {
        $this->browserInternetSecurityLevel = $browserInternetSecurityLevel;
        return $this;
    }

    public function getBrowserIntranetSecurityLevel(): ?string
    {
        return $this->browserIntranetSecurityLevel;
    }

    public function setBrowserIntranetSecurityLevel(?string $browserIntranetSecurityLevel): self
    {
        $this->browserIntranetSecurityLevel = $browserIntranetSecurityLevel;
        return $this;
    }

    public function getBrowserLoggingReportLocation(): ?string
    {
        return $this->browserLoggingReportLocation;
    }

    public function setBrowserLoggingReportLocation(?string $browserLoggingReportLocation): self
    {
        $this->browserLoggingReportLocation = $browserLoggingReportLocation;
        return $this;
    }

    public function getBrowserRequireFirewall(): ?bool
    {
        return $this->browserRequireFirewall;
    }

    public function setBrowserRequireFirewall(?bool $browserRequireFirewall): self
    {
        $this->browserRequireFirewall = $browserRequireFirewall;
        return $this;
    }

    public function getBrowserRequireFraudWarning(): ?bool
    {
        return $this->browserRequireFraudWarning;
    }

    public function setBrowserRequireFraudWarning(?bool $browserRequireFraudWarning): self
    {
        $this->browserRequireFraudWarning = $browserRequireFraudWarning;
        return $this;
    }

    public function getBrowserRequireHighSecurityForRestrictedSites(): ?bool
    {
        return $this->browserRequireHighSecurityForRestrictedSites;
    }

    public function setBrowserRequireHighSecurityForRestrictedSites(?bool $browserRequireHighSecurityForRestrictedSites): self
    {
        $this->browserRequireHighSecurityForRestrictedSites = $browserRequireHighSecurityForRestrictedSites;
        return $this;
    }

    public function getBrowserRequireSmartScreen(): ?bool
    {
        return $this->browserRequireSmartScreen;
    }

    public function setBrowserRequireSmartScreen(?bool $browserRequireSmartScreen): self
    {
        $this->browserRequireSmartScreen = $browserRequireSmartScreen;
        return $this;
    }

    public function getBrowserTrustedSitesSecurityLevel(): ?string
    {
        return $this->browserTrustedSitesSecurityLevel;
    }

    public function setBrowserTrustedSitesSecurityLevel(?string $browserTrustedSitesSecurityLevel): self
    {
        $this->browserTrustedSitesSecurityLevel = $browserTrustedSitesSecurityLevel;
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

    public function getDiagnosticsBlockDataSubmission(): ?bool
    {
        return $this->diagnosticsBlockDataSubmission;
    }

    public function setDiagnosticsBlockDataSubmission(?bool $diagnosticsBlockDataSubmission): self
    {
        $this->diagnosticsBlockDataSubmission = $diagnosticsBlockDataSubmission;
        return $this;
    }

    public function getPasswordBlockPicturePasswordAndPin(): ?bool
    {
        return $this->passwordBlockPicturePasswordAndPin;
    }

    public function setPasswordBlockPicturePasswordAndPin(?bool $passwordBlockPicturePasswordAndPin): self
    {
        $this->passwordBlockPicturePasswordAndPin = $passwordBlockPicturePasswordAndPin;
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

    public function getStorageRequireDeviceEncryption(): ?bool
    {
        return $this->storageRequireDeviceEncryption;
    }

    public function setStorageRequireDeviceEncryption(?bool $storageRequireDeviceEncryption): self
    {
        $this->storageRequireDeviceEncryption = $storageRequireDeviceEncryption;
        return $this;
    }

    public function getUpdatesRequireAutomaticUpdates(): ?bool
    {
        return $this->updatesRequireAutomaticUpdates;
    }

    public function setUpdatesRequireAutomaticUpdates(?bool $updatesRequireAutomaticUpdates): self
    {
        $this->updatesRequireAutomaticUpdates = $updatesRequireAutomaticUpdates;
        return $this;
    }

    public function getUserAccountControlSettings(): ?string
    {
        return $this->userAccountControlSettings;
    }

    public function setUserAccountControlSettings(?string $userAccountControlSettings): self
    {
        $this->userAccountControlSettings = $userAccountControlSettings;
        return $this;
    }

    public function getWorkFoldersUrl(): ?string
    {
        return $this->workFoldersUrl;
    }

    public function setWorkFoldersUrl(?string $workFoldersUrl): self
    {
        $this->workFoldersUrl = $workFoldersUrl;
        return $this;
    }

}
