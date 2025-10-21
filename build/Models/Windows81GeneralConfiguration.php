<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Windows81GeneralConfiguration
 */
class Windows81GeneralConfiguration
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** DateTime the object was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Admin provided description of the Device Configuration. */
        public ?string $description = null,
        /** Admin provided name of the device configuration. */
        public ?string $displayName = null,
        /** DateTime the object was last modified. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** Version of the device configuration. */
        public ?float $version = null,
        /** The list of assignments for the device configuration profile. */
        public array $assignments = [],
        /** Device Configuration Setting State Device Summary */
        public array $deviceSettingStateSummaries = [],
        /** Device configuration installation status by device. */
        public array $deviceStatuses = [],
        /** Device Configuration devices status overview */
        public ?DeviceConfigurationDeviceOverview $deviceStatusOverview = null,
        /** Device configuration installation status by user. */
        public array $userStatuses = [],
        /** Device Configuration users status overview */
        public ?DeviceConfigurationUserOverview $userStatusOverview = null,
        /** Indicates whether or not to Block the user from adding email accounts to the device that are not associated with a Microsoft account. */
        public ?bool $accountsBlockAddingNonMicrosoftAccountEmail = null,
        /** Value indicating whether this policy only applies to Windows 8.1. This property is read-only. */
        public ?bool $applyOnlyToWindows81 = null,
        /** Indicates whether or not to block auto fill. */
        public ?bool $browserBlockAutofill = null,
        /** Indicates whether or not to block automatic detection of Intranet sites. */
        public ?bool $browserBlockAutomaticDetectionOfIntranetSites = null,
        /** Indicates whether or not to block enterprise mode access. */
        public ?bool $browserBlockEnterpriseModeAccess = null,
        /** Indicates whether or not to Block the user from using JavaScript. */
        public ?bool $browserBlockJavaScript = null,
        /** Indicates whether or not to block plug-ins. */
        public ?bool $browserBlockPlugins = null,
        /** Indicates whether or not to block popups. */
        public ?bool $browserBlockPopups = null,
        /** Indicates whether or not to Block the user from sending the do not track header. */
        public ?bool $browserBlockSendingDoNotTrackHeader = null,
        /** Indicates whether or not to block a single word entry on Intranet sites. */
        public ?bool $browserBlockSingleWordEntryOnIntranetSites = null,
        /** The enterprise mode site list location. Could be a local file, local network or http location. */
        public ?string $browserEnterpriseModeSiteListLocation = null,
        /**  */
        public ?InternetSiteSecurityLevel $browserInternetSecurityLevel = null,
        /**  */
        public ?SiteSecurityLevel $browserIntranetSecurityLevel = null,
        /** The logging report location. */
        public ?string $browserLoggingReportLocation = null,
        /** Indicates whether or not to require a firewall. */
        public ?bool $browserRequireFirewall = null,
        /** Indicates whether or not to require fraud warning. */
        public ?bool $browserRequireFraudWarning = null,
        /** Indicates whether or not to require high security for restricted sites. */
        public ?bool $browserRequireHighSecurityForRestrictedSites = null,
        /** Indicates whether or not to require the user to use the smart screen filter. */
        public ?bool $browserRequireSmartScreen = null,
        /**  */
        public ?SiteSecurityLevel $browserTrustedSitesSecurityLevel = null,
        /** Indicates whether or not to block data roaming. */
        public ?bool $cellularBlockDataRoaming = null,
        /** Indicates whether or not to block diagnostic data submission. */
        public ?bool $diagnosticsBlockDataSubmission = null,
        /** Indicates whether or not to Block the user from using a pictures password and pin. */
        public ?bool $passwordBlockPicturePasswordAndPin = null,
        /** Password expiration in days. */
        public ?float $passwordExpirationDays = null,
        /** The number of character sets required in the password. */
        public ?float $passwordMinimumCharacterSetCount = null,
        /** The minimum password length. */
        public ?float $passwordMinimumLength = null,
        /** The minutes of inactivity before the screen times out. */
        public ?float $passwordMinutesOfInactivityBeforeScreenTimeout = null,
        /** The number of previous passwords to prevent re-use of. Valid values 0 to 24 */
        public ?float $passwordPreviousPasswordBlockCount = null,
        /**  */
        public ?RequiredPasswordType $passwordRequiredType = null,
        /** The number of sign in failures before factory reset. */
        public ?float $passwordSignInFailureCountBeforeFactoryReset = null,
        /** Indicates whether or not to require encryption on a mobile device. */
        public ?bool $storageRequireDeviceEncryption = null,
        /** Indicates whether or not to require automatic updates. */
        public ?bool $updatesRequireAutomaticUpdates = null,
        /**  */
        public ?WindowsUserAccountControlSettings $userAccountControlSettings = null,
        /** The work folders url. */
        public ?string $workFoldersUrl = null
    ) {}
}
