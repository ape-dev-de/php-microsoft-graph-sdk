<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AndroidWorkProfileGeneralDeviceConfiguration
 */
class AndroidWorkProfileGeneralDeviceConfiguration
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
        if (isset($data['passwordBlockFingerprintUnlock'])) {
            $this->passwordBlockFingerprintUnlock = is_bool($data['passwordBlockFingerprintUnlock']) ? $data['passwordBlockFingerprintUnlock'] : (bool)$data['passwordBlockFingerprintUnlock'];
        }
        if (isset($data['passwordBlockTrustAgents'])) {
            $this->passwordBlockTrustAgents = is_bool($data['passwordBlockTrustAgents']) ? $data['passwordBlockTrustAgents'] : (bool)$data['passwordBlockTrustAgents'];
        }
        if (isset($data['passwordExpirationDays'])) {
            $this->passwordExpirationDays = is_numeric($data['passwordExpirationDays']) ? (float)$data['passwordExpirationDays'] : $data['passwordExpirationDays'];
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
            $this->passwordRequiredType = is_array($data['passwordRequiredType']) ? new AndroidWorkProfileRequiredPasswordType($data['passwordRequiredType']) : $data['passwordRequiredType'];
        }
        if (isset($data['passwordSignInFailureCountBeforeFactoryReset'])) {
            $this->passwordSignInFailureCountBeforeFactoryReset = is_numeric($data['passwordSignInFailureCountBeforeFactoryReset']) ? (float)$data['passwordSignInFailureCountBeforeFactoryReset'] : $data['passwordSignInFailureCountBeforeFactoryReset'];
        }
        if (isset($data['securityRequireVerifyApps'])) {
            $this->securityRequireVerifyApps = is_bool($data['securityRequireVerifyApps']) ? $data['securityRequireVerifyApps'] : (bool)$data['securityRequireVerifyApps'];
        }
        if (isset($data['workProfileBlockAddingAccounts'])) {
            $this->workProfileBlockAddingAccounts = is_bool($data['workProfileBlockAddingAccounts']) ? $data['workProfileBlockAddingAccounts'] : (bool)$data['workProfileBlockAddingAccounts'];
        }
        if (isset($data['workProfileBlockCamera'])) {
            $this->workProfileBlockCamera = is_bool($data['workProfileBlockCamera']) ? $data['workProfileBlockCamera'] : (bool)$data['workProfileBlockCamera'];
        }
        if (isset($data['workProfileBlockCrossProfileCallerId'])) {
            $this->workProfileBlockCrossProfileCallerId = is_bool($data['workProfileBlockCrossProfileCallerId']) ? $data['workProfileBlockCrossProfileCallerId'] : (bool)$data['workProfileBlockCrossProfileCallerId'];
        }
        if (isset($data['workProfileBlockCrossProfileContactsSearch'])) {
            $this->workProfileBlockCrossProfileContactsSearch = is_bool($data['workProfileBlockCrossProfileContactsSearch']) ? $data['workProfileBlockCrossProfileContactsSearch'] : (bool)$data['workProfileBlockCrossProfileContactsSearch'];
        }
        if (isset($data['workProfileBlockCrossProfileCopyPaste'])) {
            $this->workProfileBlockCrossProfileCopyPaste = is_bool($data['workProfileBlockCrossProfileCopyPaste']) ? $data['workProfileBlockCrossProfileCopyPaste'] : (bool)$data['workProfileBlockCrossProfileCopyPaste'];
        }
        if (isset($data['workProfileBlockNotificationsWhileDeviceLocked'])) {
            $this->workProfileBlockNotificationsWhileDeviceLocked = is_bool($data['workProfileBlockNotificationsWhileDeviceLocked']) ? $data['workProfileBlockNotificationsWhileDeviceLocked'] : (bool)$data['workProfileBlockNotificationsWhileDeviceLocked'];
        }
        if (isset($data['workProfileBlockScreenCapture'])) {
            $this->workProfileBlockScreenCapture = is_bool($data['workProfileBlockScreenCapture']) ? $data['workProfileBlockScreenCapture'] : (bool)$data['workProfileBlockScreenCapture'];
        }
        if (isset($data['workProfileBluetoothEnableContactSharing'])) {
            $this->workProfileBluetoothEnableContactSharing = is_bool($data['workProfileBluetoothEnableContactSharing']) ? $data['workProfileBluetoothEnableContactSharing'] : (bool)$data['workProfileBluetoothEnableContactSharing'];
        }
        if (isset($data['workProfileDataSharingType'])) {
            $this->workProfileDataSharingType = is_array($data['workProfileDataSharingType']) ? new AndroidWorkProfileCrossProfileDataSharingType($data['workProfileDataSharingType']) : $data['workProfileDataSharingType'];
        }
        if (isset($data['workProfileDefaultAppPermissionPolicy'])) {
            $this->workProfileDefaultAppPermissionPolicy = is_array($data['workProfileDefaultAppPermissionPolicy']) ? new AndroidWorkProfileDefaultAppPermissionPolicyType($data['workProfileDefaultAppPermissionPolicy']) : $data['workProfileDefaultAppPermissionPolicy'];
        }
        if (isset($data['workProfilePasswordBlockFingerprintUnlock'])) {
            $this->workProfilePasswordBlockFingerprintUnlock = is_bool($data['workProfilePasswordBlockFingerprintUnlock']) ? $data['workProfilePasswordBlockFingerprintUnlock'] : (bool)$data['workProfilePasswordBlockFingerprintUnlock'];
        }
        if (isset($data['workProfilePasswordBlockTrustAgents'])) {
            $this->workProfilePasswordBlockTrustAgents = is_bool($data['workProfilePasswordBlockTrustAgents']) ? $data['workProfilePasswordBlockTrustAgents'] : (bool)$data['workProfilePasswordBlockTrustAgents'];
        }
        if (isset($data['workProfilePasswordExpirationDays'])) {
            $this->workProfilePasswordExpirationDays = is_numeric($data['workProfilePasswordExpirationDays']) ? (float)$data['workProfilePasswordExpirationDays'] : $data['workProfilePasswordExpirationDays'];
        }
        if (isset($data['workProfilePasswordMinimumLength'])) {
            $this->workProfilePasswordMinimumLength = is_numeric($data['workProfilePasswordMinimumLength']) ? (float)$data['workProfilePasswordMinimumLength'] : $data['workProfilePasswordMinimumLength'];
        }
        if (isset($data['workProfilePasswordMinLetterCharacters'])) {
            $this->workProfilePasswordMinLetterCharacters = is_numeric($data['workProfilePasswordMinLetterCharacters']) ? (float)$data['workProfilePasswordMinLetterCharacters'] : $data['workProfilePasswordMinLetterCharacters'];
        }
        if (isset($data['workProfilePasswordMinLowerCaseCharacters'])) {
            $this->workProfilePasswordMinLowerCaseCharacters = is_numeric($data['workProfilePasswordMinLowerCaseCharacters']) ? (float)$data['workProfilePasswordMinLowerCaseCharacters'] : $data['workProfilePasswordMinLowerCaseCharacters'];
        }
        if (isset($data['workProfilePasswordMinNonLetterCharacters'])) {
            $this->workProfilePasswordMinNonLetterCharacters = is_numeric($data['workProfilePasswordMinNonLetterCharacters']) ? (float)$data['workProfilePasswordMinNonLetterCharacters'] : $data['workProfilePasswordMinNonLetterCharacters'];
        }
        if (isset($data['workProfilePasswordMinNumericCharacters'])) {
            $this->workProfilePasswordMinNumericCharacters = is_numeric($data['workProfilePasswordMinNumericCharacters']) ? (float)$data['workProfilePasswordMinNumericCharacters'] : $data['workProfilePasswordMinNumericCharacters'];
        }
        if (isset($data['workProfilePasswordMinSymbolCharacters'])) {
            $this->workProfilePasswordMinSymbolCharacters = is_numeric($data['workProfilePasswordMinSymbolCharacters']) ? (float)$data['workProfilePasswordMinSymbolCharacters'] : $data['workProfilePasswordMinSymbolCharacters'];
        }
        if (isset($data['workProfilePasswordMinUpperCaseCharacters'])) {
            $this->workProfilePasswordMinUpperCaseCharacters = is_numeric($data['workProfilePasswordMinUpperCaseCharacters']) ? (float)$data['workProfilePasswordMinUpperCaseCharacters'] : $data['workProfilePasswordMinUpperCaseCharacters'];
        }
        if (isset($data['workProfilePasswordMinutesOfInactivityBeforeScreenTimeout'])) {
            $this->workProfilePasswordMinutesOfInactivityBeforeScreenTimeout = is_numeric($data['workProfilePasswordMinutesOfInactivityBeforeScreenTimeout']) ? (float)$data['workProfilePasswordMinutesOfInactivityBeforeScreenTimeout'] : $data['workProfilePasswordMinutesOfInactivityBeforeScreenTimeout'];
        }
        if (isset($data['workProfilePasswordPreviousPasswordBlockCount'])) {
            $this->workProfilePasswordPreviousPasswordBlockCount = is_numeric($data['workProfilePasswordPreviousPasswordBlockCount']) ? (float)$data['workProfilePasswordPreviousPasswordBlockCount'] : $data['workProfilePasswordPreviousPasswordBlockCount'];
        }
        if (isset($data['workProfilePasswordRequiredType'])) {
            $this->workProfilePasswordRequiredType = is_array($data['workProfilePasswordRequiredType']) ? new AndroidWorkProfileRequiredPasswordType($data['workProfilePasswordRequiredType']) : $data['workProfilePasswordRequiredType'];
        }
        if (isset($data['workProfilePasswordSignInFailureCountBeforeFactoryReset'])) {
            $this->workProfilePasswordSignInFailureCountBeforeFactoryReset = is_numeric($data['workProfilePasswordSignInFailureCountBeforeFactoryReset']) ? (float)$data['workProfilePasswordSignInFailureCountBeforeFactoryReset'] : $data['workProfilePasswordSignInFailureCountBeforeFactoryReset'];
        }
        if (isset($data['workProfileRequirePassword'])) {
            $this->workProfileRequirePassword = is_bool($data['workProfileRequirePassword']) ? $data['workProfileRequirePassword'] : (bool)$data['workProfileRequirePassword'];
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
