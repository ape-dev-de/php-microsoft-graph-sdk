<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AndroidWorkProfileGeneralDeviceConfiguration
 */
class AndroidWorkProfileGeneralDeviceConfiguration
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
        /** Indicates whether or not to block fingerprint unlock. */
        public ?bool $passwordBlockFingerprintUnlock = null,
        /** Indicates whether or not to block Smart Lock and other trust agents. */
        public ?bool $passwordBlockTrustAgents = null,
        /** Number of days before the password expires. Valid values 1 to 365 */
        public ?float $passwordExpirationDays = null,
        /** Minimum length of passwords. Valid values 4 to 16 */
        public ?float $passwordMinimumLength = null,
        /** Minutes of inactivity before the screen times out. */
        public ?float $passwordMinutesOfInactivityBeforeScreenTimeout = null,
        /** Number of previous passwords to block. Valid values 0 to 24 */
        public ?float $passwordPreviousPasswordBlockCount = null,
        /**  */
        public ?AndroidWorkProfileRequiredPasswordType $passwordRequiredType = null,
        /** Number of sign in failures allowed before factory reset. Valid values 1 to 16 */
        public ?float $passwordSignInFailureCountBeforeFactoryReset = null,
        /** Require the Android Verify apps feature is turned on. */
        public ?bool $securityRequireVerifyApps = null,
        /** Block users from adding/removing accounts in work profile. */
        public ?bool $workProfileBlockAddingAccounts = null,
        /** Block work profile camera. */
        public ?bool $workProfileBlockCamera = null,
        /** Block display work profile caller ID in personal profile. */
        public ?bool $workProfileBlockCrossProfileCallerId = null,
        /** Block work profile contacts availability in personal profile. */
        public ?bool $workProfileBlockCrossProfileContactsSearch = null,
        /** Boolean that indicates if the setting disallow cross profile copy/paste is enabled. */
        public ?bool $workProfileBlockCrossProfileCopyPaste = null,
        /** Indicates whether or not to block notifications while device locked. */
        public ?bool $workProfileBlockNotificationsWhileDeviceLocked = null,
        /** Block screen capture in work profile. */
        public ?bool $workProfileBlockScreenCapture = null,
        /** Allow bluetooth devices to access enterprise contacts. */
        public ?bool $workProfileBluetoothEnableContactSharing = null,
        /**  */
        public ?AndroidWorkProfileCrossProfileDataSharingType $workProfileDataSharingType = null,
        /**  */
        public ?AndroidWorkProfileDefaultAppPermissionPolicyType $workProfileDefaultAppPermissionPolicy = null,
        /** Indicates whether or not to block fingerprint unlock for work profile. */
        public ?bool $workProfilePasswordBlockFingerprintUnlock = null,
        /** Indicates whether or not to block Smart Lock and other trust agents for work profile. */
        public ?bool $workProfilePasswordBlockTrustAgents = null,
        /** Number of days before the work profile password expires. Valid values 1 to 365 */
        public ?float $workProfilePasswordExpirationDays = null,
        /** Minimum length of work profile password. Valid values 4 to 16 */
        public ?float $workProfilePasswordMinimumLength = null,
        /** Minimum # of letter characters required in work profile password. Valid values 1 to 10 */
        public ?float $workProfilePasswordMinLetterCharacters = null,
        /** Minimum # of lower-case characters required in work profile password. Valid values 1 to 10 */
        public ?float $workProfilePasswordMinLowerCaseCharacters = null,
        /** Minimum # of non-letter characters required in work profile password. Valid values 1 to 10 */
        public ?float $workProfilePasswordMinNonLetterCharacters = null,
        /** Minimum # of numeric characters required in work profile password. Valid values 1 to 10 */
        public ?float $workProfilePasswordMinNumericCharacters = null,
        /** Minimum # of symbols required in work profile password. Valid values 1 to 10 */
        public ?float $workProfilePasswordMinSymbolCharacters = null,
        /** Minimum # of upper-case characters required in work profile password. Valid values 1 to 10 */
        public ?float $workProfilePasswordMinUpperCaseCharacters = null,
        /** Minutes of inactivity before the screen times out. */
        public ?float $workProfilePasswordMinutesOfInactivityBeforeScreenTimeout = null,
        /** Number of previous work profile passwords to block. Valid values 0 to 24 */
        public ?float $workProfilePasswordPreviousPasswordBlockCount = null,
        /**  */
        public ?AndroidWorkProfileRequiredPasswordType $workProfilePasswordRequiredType = null,
        /** Number of sign in failures allowed before work profile is removed and all corporate data deleted. Valid values 1 to 16 */
        public ?float $workProfilePasswordSignInFailureCountBeforeFactoryReset = null,
        /** Password is required or not for work profile */
        public ?bool $workProfileRequirePassword = null
    ) {}
}
