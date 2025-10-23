<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Windows81GeneralConfiguration
 */
class Windows81GeneralConfiguration
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

    /** Indicates whether or not to Block the user from adding email accounts to the device that are not associated with a Microsoft account. */
    public ?bool $accountsBlockAddingNonMicrosoftAccountEmail = null;

    /** Value indicating whether this policy only applies to Windows 8.1. This property is read-only. */
    public ?bool $applyOnlyToWindows81 = null;

    /** Indicates whether or not to block auto fill. */
    public ?bool $browserBlockAutofill = null;

    /** Indicates whether or not to block automatic detection of Intranet sites. */
    public ?bool $browserBlockAutomaticDetectionOfIntranetSites = null;

    /** Indicates whether or not to block enterprise mode access. */
    public ?bool $browserBlockEnterpriseModeAccess = null;

    /** Indicates whether or not to Block the user from using JavaScript. */
    public ?bool $browserBlockJavaScript = null;

    /** Indicates whether or not to block plug-ins. */
    public ?bool $browserBlockPlugins = null;

    /** Indicates whether or not to block popups. */
    public ?bool $browserBlockPopups = null;

    /** Indicates whether or not to Block the user from sending the do not track header. */
    public ?bool $browserBlockSendingDoNotTrackHeader = null;

    /** Indicates whether or not to block a single word entry on Intranet sites. */
    public ?bool $browserBlockSingleWordEntryOnIntranetSites = null;

    /** The enterprise mode site list location. Could be a local file, local network or http location. */
    public ?string $browserEnterpriseModeSiteListLocation = null;

    /**  */
    public ?InternetSiteSecurityLevel $browserInternetSecurityLevel = null;

    /**  */
    public ?SiteSecurityLevel $browserIntranetSecurityLevel = null;

    /** The logging report location. */
    public ?string $browserLoggingReportLocation = null;

    /** Indicates whether or not to require a firewall. */
    public ?bool $browserRequireFirewall = null;

    /** Indicates whether or not to require fraud warning. */
    public ?bool $browserRequireFraudWarning = null;

    /** Indicates whether or not to require high security for restricted sites. */
    public ?bool $browserRequireHighSecurityForRestrictedSites = null;

    /** Indicates whether or not to require the user to use the smart screen filter. */
    public ?bool $browserRequireSmartScreen = null;

    /**  */
    public ?SiteSecurityLevel $browserTrustedSitesSecurityLevel = null;

    /** Indicates whether or not to block data roaming. */
    public ?bool $cellularBlockDataRoaming = null;

    /** Indicates whether or not to block diagnostic data submission. */
    public ?bool $diagnosticsBlockDataSubmission = null;

    /** Indicates whether or not to Block the user from using a pictures password and pin. */
    public ?bool $passwordBlockPicturePasswordAndPin = null;

    /** Password expiration in days. */
    public ?float $passwordExpirationDays = null;

    /** The number of character sets required in the password. */
    public ?float $passwordMinimumCharacterSetCount = null;

    /** The minimum password length. */
    public ?float $passwordMinimumLength = null;

    /** The minutes of inactivity before the screen times out. */
    public ?float $passwordMinutesOfInactivityBeforeScreenTimeout = null;

    /** The number of previous passwords to prevent re-use of. Valid values 0 to 24 */
    public ?float $passwordPreviousPasswordBlockCount = null;

    /**  */
    public ?RequiredPasswordType $passwordRequiredType = null;

    /** The number of sign in failures before factory reset. */
    public ?float $passwordSignInFailureCountBeforeFactoryReset = null;

    /** Indicates whether or not to require encryption on a mobile device. */
    public ?bool $storageRequireDeviceEncryption = null;

    /** Indicates whether or not to require automatic updates. */
    public ?bool $updatesRequireAutomaticUpdates = null;

    /**  */
    public ?WindowsUserAccountControlSettings $userAccountControlSettings = null;

    /** The work folders url. */
    public ?string $workFoldersUrl = null;


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
            $this->deviceStatusOverview = $data['deviceStatusOverview'];
        }
        if (isset($data['userStatuses'])) {
            $this->userStatuses = $data['userStatuses'];
        }
        if (isset($data['userStatusOverview'])) {
            $this->userStatusOverview = $data['userStatusOverview'];
        }
        if (isset($data['accountsBlockAddingNonMicrosoftAccountEmail'])) {
            $this->accountsBlockAddingNonMicrosoftAccountEmail = $data['accountsBlockAddingNonMicrosoftAccountEmail'];
        }
        if (isset($data['applyOnlyToWindows81'])) {
            $this->applyOnlyToWindows81 = $data['applyOnlyToWindows81'];
        }
        if (isset($data['browserBlockAutofill'])) {
            $this->browserBlockAutofill = $data['browserBlockAutofill'];
        }
        if (isset($data['browserBlockAutomaticDetectionOfIntranetSites'])) {
            $this->browserBlockAutomaticDetectionOfIntranetSites = $data['browserBlockAutomaticDetectionOfIntranetSites'];
        }
        if (isset($data['browserBlockEnterpriseModeAccess'])) {
            $this->browserBlockEnterpriseModeAccess = $data['browserBlockEnterpriseModeAccess'];
        }
        if (isset($data['browserBlockJavaScript'])) {
            $this->browserBlockJavaScript = $data['browserBlockJavaScript'];
        }
        if (isset($data['browserBlockPlugins'])) {
            $this->browserBlockPlugins = $data['browserBlockPlugins'];
        }
        if (isset($data['browserBlockPopups'])) {
            $this->browserBlockPopups = $data['browserBlockPopups'];
        }
        if (isset($data['browserBlockSendingDoNotTrackHeader'])) {
            $this->browserBlockSendingDoNotTrackHeader = $data['browserBlockSendingDoNotTrackHeader'];
        }
        if (isset($data['browserBlockSingleWordEntryOnIntranetSites'])) {
            $this->browserBlockSingleWordEntryOnIntranetSites = $data['browserBlockSingleWordEntryOnIntranetSites'];
        }
        if (isset($data['browserEnterpriseModeSiteListLocation'])) {
            $this->browserEnterpriseModeSiteListLocation = $data['browserEnterpriseModeSiteListLocation'];
        }
        if (isset($data['browserInternetSecurityLevel'])) {
            $this->browserInternetSecurityLevel = $data['browserInternetSecurityLevel'];
        }
        if (isset($data['browserIntranetSecurityLevel'])) {
            $this->browserIntranetSecurityLevel = $data['browserIntranetSecurityLevel'];
        }
        if (isset($data['browserLoggingReportLocation'])) {
            $this->browserLoggingReportLocation = $data['browserLoggingReportLocation'];
        }
        if (isset($data['browserRequireFirewall'])) {
            $this->browserRequireFirewall = $data['browserRequireFirewall'];
        }
        if (isset($data['browserRequireFraudWarning'])) {
            $this->browserRequireFraudWarning = $data['browserRequireFraudWarning'];
        }
        if (isset($data['browserRequireHighSecurityForRestrictedSites'])) {
            $this->browserRequireHighSecurityForRestrictedSites = $data['browserRequireHighSecurityForRestrictedSites'];
        }
        if (isset($data['browserRequireSmartScreen'])) {
            $this->browserRequireSmartScreen = $data['browserRequireSmartScreen'];
        }
        if (isset($data['browserTrustedSitesSecurityLevel'])) {
            $this->browserTrustedSitesSecurityLevel = $data['browserTrustedSitesSecurityLevel'];
        }
        if (isset($data['cellularBlockDataRoaming'])) {
            $this->cellularBlockDataRoaming = $data['cellularBlockDataRoaming'];
        }
        if (isset($data['diagnosticsBlockDataSubmission'])) {
            $this->diagnosticsBlockDataSubmission = $data['diagnosticsBlockDataSubmission'];
        }
        if (isset($data['passwordBlockPicturePasswordAndPin'])) {
            $this->passwordBlockPicturePasswordAndPin = $data['passwordBlockPicturePasswordAndPin'];
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
        if (isset($data['passwordRequiredType'])) {
            $this->passwordRequiredType = $data['passwordRequiredType'];
        }
        if (isset($data['passwordSignInFailureCountBeforeFactoryReset'])) {
            $this->passwordSignInFailureCountBeforeFactoryReset = $data['passwordSignInFailureCountBeforeFactoryReset'];
        }
        if (isset($data['storageRequireDeviceEncryption'])) {
            $this->storageRequireDeviceEncryption = $data['storageRequireDeviceEncryption'];
        }
        if (isset($data['updatesRequireAutomaticUpdates'])) {
            $this->updatesRequireAutomaticUpdates = $data['updatesRequireAutomaticUpdates'];
        }
        if (isset($data['userAccountControlSettings'])) {
            $this->userAccountControlSettings = $data['userAccountControlSettings'];
        }
        if (isset($data['workFoldersUrl'])) {
            $this->workFoldersUrl = $data['workFoldersUrl'];
        }
    }
}
