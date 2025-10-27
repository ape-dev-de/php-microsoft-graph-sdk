<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Windows81GeneralConfiguration
 */
class Windows81GeneralConfiguration
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
        if (isset($data['accountsBlockAddingNonMicrosoftAccountEmail'])) {
            $this->accountsBlockAddingNonMicrosoftAccountEmail = is_bool($data['accountsBlockAddingNonMicrosoftAccountEmail']) ? $data['accountsBlockAddingNonMicrosoftAccountEmail'] : (bool)$data['accountsBlockAddingNonMicrosoftAccountEmail'];
        }
        if (isset($data['applyOnlyToWindows81'])) {
            $this->applyOnlyToWindows81 = is_bool($data['applyOnlyToWindows81']) ? $data['applyOnlyToWindows81'] : (bool)$data['applyOnlyToWindows81'];
        }
        if (isset($data['browserBlockAutofill'])) {
            $this->browserBlockAutofill = is_bool($data['browserBlockAutofill']) ? $data['browserBlockAutofill'] : (bool)$data['browserBlockAutofill'];
        }
        if (isset($data['browserBlockAutomaticDetectionOfIntranetSites'])) {
            $this->browserBlockAutomaticDetectionOfIntranetSites = is_bool($data['browserBlockAutomaticDetectionOfIntranetSites']) ? $data['browserBlockAutomaticDetectionOfIntranetSites'] : (bool)$data['browserBlockAutomaticDetectionOfIntranetSites'];
        }
        if (isset($data['browserBlockEnterpriseModeAccess'])) {
            $this->browserBlockEnterpriseModeAccess = is_bool($data['browserBlockEnterpriseModeAccess']) ? $data['browserBlockEnterpriseModeAccess'] : (bool)$data['browserBlockEnterpriseModeAccess'];
        }
        if (isset($data['browserBlockJavaScript'])) {
            $this->browserBlockJavaScript = is_bool($data['browserBlockJavaScript']) ? $data['browserBlockJavaScript'] : (bool)$data['browserBlockJavaScript'];
        }
        if (isset($data['browserBlockPlugins'])) {
            $this->browserBlockPlugins = is_bool($data['browserBlockPlugins']) ? $data['browserBlockPlugins'] : (bool)$data['browserBlockPlugins'];
        }
        if (isset($data['browserBlockPopups'])) {
            $this->browserBlockPopups = is_bool($data['browserBlockPopups']) ? $data['browserBlockPopups'] : (bool)$data['browserBlockPopups'];
        }
        if (isset($data['browserBlockSendingDoNotTrackHeader'])) {
            $this->browserBlockSendingDoNotTrackHeader = is_bool($data['browserBlockSendingDoNotTrackHeader']) ? $data['browserBlockSendingDoNotTrackHeader'] : (bool)$data['browserBlockSendingDoNotTrackHeader'];
        }
        if (isset($data['browserBlockSingleWordEntryOnIntranetSites'])) {
            $this->browserBlockSingleWordEntryOnIntranetSites = is_bool($data['browserBlockSingleWordEntryOnIntranetSites']) ? $data['browserBlockSingleWordEntryOnIntranetSites'] : (bool)$data['browserBlockSingleWordEntryOnIntranetSites'];
        }
        if (isset($data['browserEnterpriseModeSiteListLocation'])) {
            $this->browserEnterpriseModeSiteListLocation = $data['browserEnterpriseModeSiteListLocation'];
        }
        if (isset($data['browserInternetSecurityLevel'])) {
            $this->browserInternetSecurityLevel = is_array($data['browserInternetSecurityLevel']) ? new InternetSiteSecurityLevel($data['browserInternetSecurityLevel']) : $data['browserInternetSecurityLevel'];
        }
        if (isset($data['browserIntranetSecurityLevel'])) {
            $this->browserIntranetSecurityLevel = is_array($data['browserIntranetSecurityLevel']) ? new SiteSecurityLevel($data['browserIntranetSecurityLevel']) : $data['browserIntranetSecurityLevel'];
        }
        if (isset($data['browserLoggingReportLocation'])) {
            $this->browserLoggingReportLocation = $data['browserLoggingReportLocation'];
        }
        if (isset($data['browserRequireFirewall'])) {
            $this->browserRequireFirewall = is_bool($data['browserRequireFirewall']) ? $data['browserRequireFirewall'] : (bool)$data['browserRequireFirewall'];
        }
        if (isset($data['browserRequireFraudWarning'])) {
            $this->browserRequireFraudWarning = is_bool($data['browserRequireFraudWarning']) ? $data['browserRequireFraudWarning'] : (bool)$data['browserRequireFraudWarning'];
        }
        if (isset($data['browserRequireHighSecurityForRestrictedSites'])) {
            $this->browserRequireHighSecurityForRestrictedSites = is_bool($data['browserRequireHighSecurityForRestrictedSites']) ? $data['browserRequireHighSecurityForRestrictedSites'] : (bool)$data['browserRequireHighSecurityForRestrictedSites'];
        }
        if (isset($data['browserRequireSmartScreen'])) {
            $this->browserRequireSmartScreen = is_bool($data['browserRequireSmartScreen']) ? $data['browserRequireSmartScreen'] : (bool)$data['browserRequireSmartScreen'];
        }
        if (isset($data['browserTrustedSitesSecurityLevel'])) {
            $this->browserTrustedSitesSecurityLevel = is_array($data['browserTrustedSitesSecurityLevel']) ? new SiteSecurityLevel($data['browserTrustedSitesSecurityLevel']) : $data['browserTrustedSitesSecurityLevel'];
        }
        if (isset($data['cellularBlockDataRoaming'])) {
            $this->cellularBlockDataRoaming = is_bool($data['cellularBlockDataRoaming']) ? $data['cellularBlockDataRoaming'] : (bool)$data['cellularBlockDataRoaming'];
        }
        if (isset($data['diagnosticsBlockDataSubmission'])) {
            $this->diagnosticsBlockDataSubmission = is_bool($data['diagnosticsBlockDataSubmission']) ? $data['diagnosticsBlockDataSubmission'] : (bool)$data['diagnosticsBlockDataSubmission'];
        }
        if (isset($data['passwordBlockPicturePasswordAndPin'])) {
            $this->passwordBlockPicturePasswordAndPin = is_bool($data['passwordBlockPicturePasswordAndPin']) ? $data['passwordBlockPicturePasswordAndPin'] : (bool)$data['passwordBlockPicturePasswordAndPin'];
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
        if (isset($data['passwordRequiredType'])) {
            $this->passwordRequiredType = is_array($data['passwordRequiredType']) ? new RequiredPasswordType($data['passwordRequiredType']) : $data['passwordRequiredType'];
        }
        if (isset($data['passwordSignInFailureCountBeforeFactoryReset'])) {
            $this->passwordSignInFailureCountBeforeFactoryReset = is_numeric($data['passwordSignInFailureCountBeforeFactoryReset']) ? (float)$data['passwordSignInFailureCountBeforeFactoryReset'] : $data['passwordSignInFailureCountBeforeFactoryReset'];
        }
        if (isset($data['storageRequireDeviceEncryption'])) {
            $this->storageRequireDeviceEncryption = is_bool($data['storageRequireDeviceEncryption']) ? $data['storageRequireDeviceEncryption'] : (bool)$data['storageRequireDeviceEncryption'];
        }
        if (isset($data['updatesRequireAutomaticUpdates'])) {
            $this->updatesRequireAutomaticUpdates = is_bool($data['updatesRequireAutomaticUpdates']) ? $data['updatesRequireAutomaticUpdates'] : (bool)$data['updatesRequireAutomaticUpdates'];
        }
        if (isset($data['userAccountControlSettings'])) {
            $this->userAccountControlSettings = is_array($data['userAccountControlSettings']) ? new WindowsUserAccountControlSettings($data['userAccountControlSettings']) : $data['userAccountControlSettings'];
        }
        if (isset($data['workFoldersUrl'])) {
            $this->workFoldersUrl = $data['workFoldersUrl'];
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
