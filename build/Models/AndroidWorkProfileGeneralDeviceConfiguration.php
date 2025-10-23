<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AndroidWorkProfileGeneralDeviceConfiguration
 */
class AndroidWorkProfileGeneralDeviceConfiguration
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

    /**  */
    public ?AndroidWorkProfileRequiredPasswordType $passwordRequiredType = null;

    /** Number of sign in failures allowed before factory reset. Valid values 1 to 16 */
    public ?float $passwordSignInFailureCountBeforeFactoryReset = null;

    /** Require the Android Verify apps feature is turned on. */
    public ?bool $securityRequireVerifyApps = null;

    /** Block users from adding/removing accounts in work profile. */
    public ?bool $workProfileBlockAddingAccounts = null;

    /** Block work profile camera. */
    public ?bool $workProfileBlockCamera = null;

    /** Block display work profile caller ID in personal profile. */
    public ?bool $workProfileBlockCrossProfileCallerId = null;

    /** Block work profile contacts availability in personal profile. */
    public ?bool $workProfileBlockCrossProfileContactsSearch = null;

    /** Boolean that indicates if the setting disallow cross profile copy/paste is enabled. */
    public ?bool $workProfileBlockCrossProfileCopyPaste = null;

    /** Indicates whether or not to block notifications while device locked. */
    public ?bool $workProfileBlockNotificationsWhileDeviceLocked = null;

    /** Block screen capture in work profile. */
    public ?bool $workProfileBlockScreenCapture = null;

    /** Allow bluetooth devices to access enterprise contacts. */
    public ?bool $workProfileBluetoothEnableContactSharing = null;

    /**  */
    public ?AndroidWorkProfileCrossProfileDataSharingType $workProfileDataSharingType = null;

    /**  */
    public ?AndroidWorkProfileDefaultAppPermissionPolicyType $workProfileDefaultAppPermissionPolicy = null;

    /** Indicates whether or not to block fingerprint unlock for work profile. */
    public ?bool $workProfilePasswordBlockFingerprintUnlock = null;

    /** Indicates whether or not to block Smart Lock and other trust agents for work profile. */
    public ?bool $workProfilePasswordBlockTrustAgents = null;

    /** Number of days before the work profile password expires. Valid values 1 to 365 */
    public ?float $workProfilePasswordExpirationDays = null;

    /** Minimum length of work profile password. Valid values 4 to 16 */
    public ?float $workProfilePasswordMinimumLength = null;

    /** Minimum # of letter characters required in work profile password. Valid values 1 to 10 */
    public ?float $workProfilePasswordMinLetterCharacters = null;

    /** Minimum # of lower-case characters required in work profile password. Valid values 1 to 10 */
    public ?float $workProfilePasswordMinLowerCaseCharacters = null;

    /** Minimum # of non-letter characters required in work profile password. Valid values 1 to 10 */
    public ?float $workProfilePasswordMinNonLetterCharacters = null;

    /** Minimum # of numeric characters required in work profile password. Valid values 1 to 10 */
    public ?float $workProfilePasswordMinNumericCharacters = null;

    /** Minimum # of symbols required in work profile password. Valid values 1 to 10 */
    public ?float $workProfilePasswordMinSymbolCharacters = null;

    /** Minimum # of upper-case characters required in work profile password. Valid values 1 to 10 */
    public ?float $workProfilePasswordMinUpperCaseCharacters = null;

    /** Minutes of inactivity before the screen times out. */
    public ?float $workProfilePasswordMinutesOfInactivityBeforeScreenTimeout = null;

    /** Number of previous work profile passwords to block. Valid values 0 to 24 */
    public ?float $workProfilePasswordPreviousPasswordBlockCount = null;

    /**  */
    public ?AndroidWorkProfileRequiredPasswordType $workProfilePasswordRequiredType = null;

    /** Number of sign in failures allowed before work profile is removed and all corporate data deleted. Valid values 1 to 16 */
    public ?float $workProfilePasswordSignInFailureCountBeforeFactoryReset = null;

    /** Password is required or not for work profile */
    public ?bool $workProfileRequirePassword = null;


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
        if (isset($data['passwordRequiredType'])) {
            $this->passwordRequiredType = $data['passwordRequiredType'];
        }
        if (isset($data['passwordSignInFailureCountBeforeFactoryReset'])) {
            $this->passwordSignInFailureCountBeforeFactoryReset = $data['passwordSignInFailureCountBeforeFactoryReset'];
        }
        if (isset($data['securityRequireVerifyApps'])) {
            $this->securityRequireVerifyApps = $data['securityRequireVerifyApps'];
        }
        if (isset($data['workProfileBlockAddingAccounts'])) {
            $this->workProfileBlockAddingAccounts = $data['workProfileBlockAddingAccounts'];
        }
        if (isset($data['workProfileBlockCamera'])) {
            $this->workProfileBlockCamera = $data['workProfileBlockCamera'];
        }
        if (isset($data['workProfileBlockCrossProfileCallerId'])) {
            $this->workProfileBlockCrossProfileCallerId = $data['workProfileBlockCrossProfileCallerId'];
        }
        if (isset($data['workProfileBlockCrossProfileContactsSearch'])) {
            $this->workProfileBlockCrossProfileContactsSearch = $data['workProfileBlockCrossProfileContactsSearch'];
        }
        if (isset($data['workProfileBlockCrossProfileCopyPaste'])) {
            $this->workProfileBlockCrossProfileCopyPaste = $data['workProfileBlockCrossProfileCopyPaste'];
        }
        if (isset($data['workProfileBlockNotificationsWhileDeviceLocked'])) {
            $this->workProfileBlockNotificationsWhileDeviceLocked = $data['workProfileBlockNotificationsWhileDeviceLocked'];
        }
        if (isset($data['workProfileBlockScreenCapture'])) {
            $this->workProfileBlockScreenCapture = $data['workProfileBlockScreenCapture'];
        }
        if (isset($data['workProfileBluetoothEnableContactSharing'])) {
            $this->workProfileBluetoothEnableContactSharing = $data['workProfileBluetoothEnableContactSharing'];
        }
        if (isset($data['workProfileDataSharingType'])) {
            $this->workProfileDataSharingType = $data['workProfileDataSharingType'];
        }
        if (isset($data['workProfileDefaultAppPermissionPolicy'])) {
            $this->workProfileDefaultAppPermissionPolicy = $data['workProfileDefaultAppPermissionPolicy'];
        }
        if (isset($data['workProfilePasswordBlockFingerprintUnlock'])) {
            $this->workProfilePasswordBlockFingerprintUnlock = $data['workProfilePasswordBlockFingerprintUnlock'];
        }
        if (isset($data['workProfilePasswordBlockTrustAgents'])) {
            $this->workProfilePasswordBlockTrustAgents = $data['workProfilePasswordBlockTrustAgents'];
        }
        if (isset($data['workProfilePasswordExpirationDays'])) {
            $this->workProfilePasswordExpirationDays = $data['workProfilePasswordExpirationDays'];
        }
        if (isset($data['workProfilePasswordMinimumLength'])) {
            $this->workProfilePasswordMinimumLength = $data['workProfilePasswordMinimumLength'];
        }
        if (isset($data['workProfilePasswordMinLetterCharacters'])) {
            $this->workProfilePasswordMinLetterCharacters = $data['workProfilePasswordMinLetterCharacters'];
        }
        if (isset($data['workProfilePasswordMinLowerCaseCharacters'])) {
            $this->workProfilePasswordMinLowerCaseCharacters = $data['workProfilePasswordMinLowerCaseCharacters'];
        }
        if (isset($data['workProfilePasswordMinNonLetterCharacters'])) {
            $this->workProfilePasswordMinNonLetterCharacters = $data['workProfilePasswordMinNonLetterCharacters'];
        }
        if (isset($data['workProfilePasswordMinNumericCharacters'])) {
            $this->workProfilePasswordMinNumericCharacters = $data['workProfilePasswordMinNumericCharacters'];
        }
        if (isset($data['workProfilePasswordMinSymbolCharacters'])) {
            $this->workProfilePasswordMinSymbolCharacters = $data['workProfilePasswordMinSymbolCharacters'];
        }
        if (isset($data['workProfilePasswordMinUpperCaseCharacters'])) {
            $this->workProfilePasswordMinUpperCaseCharacters = $data['workProfilePasswordMinUpperCaseCharacters'];
        }
        if (isset($data['workProfilePasswordMinutesOfInactivityBeforeScreenTimeout'])) {
            $this->workProfilePasswordMinutesOfInactivityBeforeScreenTimeout = $data['workProfilePasswordMinutesOfInactivityBeforeScreenTimeout'];
        }
        if (isset($data['workProfilePasswordPreviousPasswordBlockCount'])) {
            $this->workProfilePasswordPreviousPasswordBlockCount = $data['workProfilePasswordPreviousPasswordBlockCount'];
        }
        if (isset($data['workProfilePasswordRequiredType'])) {
            $this->workProfilePasswordRequiredType = $data['workProfilePasswordRequiredType'];
        }
        if (isset($data['workProfilePasswordSignInFailureCountBeforeFactoryReset'])) {
            $this->workProfilePasswordSignInFailureCountBeforeFactoryReset = $data['workProfilePasswordSignInFailureCountBeforeFactoryReset'];
        }
        if (isset($data['workProfileRequirePassword'])) {
            $this->workProfileRequirePassword = $data['workProfileRequirePassword'];
        }
    }
}
