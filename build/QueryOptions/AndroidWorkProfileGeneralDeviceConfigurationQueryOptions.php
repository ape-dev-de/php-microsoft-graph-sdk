<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AndroidWorkProfileGeneralDeviceConfiguration resources
 *
 * Available select fields:
 * - passwordBlockFingerprintUnlock
 * - passwordBlockTrustAgents
 * - passwordExpirationDays
 * - passwordMinimumLength
 * - passwordMinutesOfInactivityBeforeScreenTimeout
 * - passwordPreviousPasswordBlockCount
 * - passwordRequiredType
 * - passwordSignInFailureCountBeforeFactoryReset
 * - securityRequireVerifyApps
 * - workProfileBlockAddingAccounts
 * - workProfileBlockCamera
 * - workProfileBlockCrossProfileCallerId
 * - workProfileBlockCrossProfileContactsSearch
 * - workProfileBlockCrossProfileCopyPaste
 * - workProfileBlockNotificationsWhileDeviceLocked
 * - workProfileBlockScreenCapture
 * - workProfileBluetoothEnableContactSharing
 * - workProfileDataSharingType
 * - workProfileDefaultAppPermissionPolicy
 * - workProfilePasswordBlockFingerprintUnlock
 * - workProfilePasswordBlockTrustAgents
 * - workProfilePasswordExpirationDays
 * - workProfilePasswordMinimumLength
 * - workProfilePasswordMinLetterCharacters
 * - workProfilePasswordMinLowerCaseCharacters
 * - workProfilePasswordMinNonLetterCharacters
 * - workProfilePasswordMinNumericCharacters
 * - workProfilePasswordMinSymbolCharacters
 * - workProfilePasswordMinUpperCaseCharacters
 * - workProfilePasswordMinutesOfInactivityBeforeScreenTimeout
 * - workProfilePasswordPreviousPasswordBlockCount
 * - workProfilePasswordRequiredType
 * - workProfilePasswordSignInFailureCountBeforeFactoryReset
 * - workProfileRequirePassword
 */
class AndroidWorkProfileGeneralDeviceConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AndroidWorkProfileGeneralDeviceConfiguration
     */
    public const FIELD_PASSWORD_BLOCK_FINGERPRINT_UNLOCK = 'passwordBlockFingerprintUnlock';
    public const FIELD_PASSWORD_BLOCK_TRUST_AGENTS = 'passwordBlockTrustAgents';
    public const FIELD_PASSWORD_EXPIRATION_DAYS = 'passwordExpirationDays';
    public const FIELD_PASSWORD_MINIMUM_LENGTH = 'passwordMinimumLength';
    public const FIELD_PASSWORD_MINUTES_OF_INACTIVITY_BEFORE_SCREEN_TIMEOUT = 'passwordMinutesOfInactivityBeforeScreenTimeout';
    public const FIELD_PASSWORD_PREVIOUS_PASSWORD_BLOCK_COUNT = 'passwordPreviousPasswordBlockCount';
    public const FIELD_PASSWORD_REQUIRED_TYPE = 'passwordRequiredType';
    public const FIELD_PASSWORD_SIGN_IN_FAILURE_COUNT_BEFORE_FACTORY_RESET = 'passwordSignInFailureCountBeforeFactoryReset';
    public const FIELD_SECURITY_REQUIRE_VERIFY_APPS = 'securityRequireVerifyApps';
    public const FIELD_WORK_PROFILE_BLOCK_ADDING_ACCOUNTS = 'workProfileBlockAddingAccounts';
    public const FIELD_WORK_PROFILE_BLOCK_CAMERA = 'workProfileBlockCamera';
    public const FIELD_WORK_PROFILE_BLOCK_CROSS_PROFILE_CALLER_ID = 'workProfileBlockCrossProfileCallerId';
    public const FIELD_WORK_PROFILE_BLOCK_CROSS_PROFILE_CONTACTS_SEARCH = 'workProfileBlockCrossProfileContactsSearch';
    public const FIELD_WORK_PROFILE_BLOCK_CROSS_PROFILE_COPY_PASTE = 'workProfileBlockCrossProfileCopyPaste';
    public const FIELD_WORK_PROFILE_BLOCK_NOTIFICATIONS_WHILE_DEVICE_LOCKED = 'workProfileBlockNotificationsWhileDeviceLocked';
    public const FIELD_WORK_PROFILE_BLOCK_SCREEN_CAPTURE = 'workProfileBlockScreenCapture';
    public const FIELD_WORK_PROFILE_BLUETOOTH_ENABLE_CONTACT_SHARING = 'workProfileBluetoothEnableContactSharing';
    public const FIELD_WORK_PROFILE_DATA_SHARING_TYPE = 'workProfileDataSharingType';
    public const FIELD_WORK_PROFILE_DEFAULT_APP_PERMISSION_POLICY = 'workProfileDefaultAppPermissionPolicy';
    public const FIELD_WORK_PROFILE_PASSWORD_BLOCK_FINGERPRINT_UNLOCK = 'workProfilePasswordBlockFingerprintUnlock';
    public const FIELD_WORK_PROFILE_PASSWORD_BLOCK_TRUST_AGENTS = 'workProfilePasswordBlockTrustAgents';
    public const FIELD_WORK_PROFILE_PASSWORD_EXPIRATION_DAYS = 'workProfilePasswordExpirationDays';
    public const FIELD_WORK_PROFILE_PASSWORD_MINIMUM_LENGTH = 'workProfilePasswordMinimumLength';
    public const FIELD_WORK_PROFILE_PASSWORD_MIN_LETTER_CHARACTERS = 'workProfilePasswordMinLetterCharacters';
    public const FIELD_WORK_PROFILE_PASSWORD_MIN_LOWER_CASE_CHARACTERS = 'workProfilePasswordMinLowerCaseCharacters';
    public const FIELD_WORK_PROFILE_PASSWORD_MIN_NON_LETTER_CHARACTERS = 'workProfilePasswordMinNonLetterCharacters';
    public const FIELD_WORK_PROFILE_PASSWORD_MIN_NUMERIC_CHARACTERS = 'workProfilePasswordMinNumericCharacters';
    public const FIELD_WORK_PROFILE_PASSWORD_MIN_SYMBOL_CHARACTERS = 'workProfilePasswordMinSymbolCharacters';
    public const FIELD_WORK_PROFILE_PASSWORD_MIN_UPPER_CASE_CHARACTERS = 'workProfilePasswordMinUpperCaseCharacters';
    public const FIELD_WORK_PROFILE_PASSWORD_MINUTES_OF_INACTIVITY_BEFORE_SCREEN_TIMEOUT = 'workProfilePasswordMinutesOfInactivityBeforeScreenTimeout';
    public const FIELD_WORK_PROFILE_PASSWORD_PREVIOUS_PASSWORD_BLOCK_COUNT = 'workProfilePasswordPreviousPasswordBlockCount';
    public const FIELD_WORK_PROFILE_PASSWORD_REQUIRED_TYPE = 'workProfilePasswordRequiredType';
    public const FIELD_WORK_PROFILE_PASSWORD_SIGN_IN_FAILURE_COUNT_BEFORE_FACTORY_RESET = 'workProfilePasswordSignInFailureCountBeforeFactoryReset';
    public const FIELD_WORK_PROFILE_REQUIRE_PASSWORD = 'workProfileRequirePassword';

    /**
     * Select specific AndroidWorkProfileGeneralDeviceConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
