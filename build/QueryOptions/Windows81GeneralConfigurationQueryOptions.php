<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Windows81GeneralConfiguration resources
 *
 * Available select fields:
 * - accountsBlockAddingNonMicrosoftAccountEmail
 * - applyOnlyToWindows81
 * - browserBlockAutofill
 * - browserBlockAutomaticDetectionOfIntranetSites
 * - browserBlockEnterpriseModeAccess
 * - browserBlockJavaScript
 * - browserBlockPlugins
 * - browserBlockPopups
 * - browserBlockSendingDoNotTrackHeader
 * - browserBlockSingleWordEntryOnIntranetSites
 * - browserEnterpriseModeSiteListLocation
 * - browserInternetSecurityLevel
 * - browserIntranetSecurityLevel
 * - browserLoggingReportLocation
 * - browserRequireFirewall
 * - browserRequireFraudWarning
 * - browserRequireHighSecurityForRestrictedSites
 * - browserRequireSmartScreen
 * - browserTrustedSitesSecurityLevel
 * - cellularBlockDataRoaming
 * - diagnosticsBlockDataSubmission
 * - passwordBlockPicturePasswordAndPin
 * - passwordExpirationDays
 * - passwordMinimumCharacterSetCount
 * - passwordMinimumLength
 * - passwordMinutesOfInactivityBeforeScreenTimeout
 * - passwordPreviousPasswordBlockCount
 * - passwordRequiredType
 * - passwordSignInFailureCountBeforeFactoryReset
 * - storageRequireDeviceEncryption
 * - updatesRequireAutomaticUpdates
 * - userAccountControlSettings
 * - workFoldersUrl
 */
class Windows81GeneralConfigurationQueryOptions extends QueryOptions
{
    public const FIELD_ACCOUNTS_BLOCK_ADDING_NON_MICROSOFT_ACCOUNT_EMAIL = 'accountsBlockAddingNonMicrosoftAccountEmail';
    public const FIELD_APPLY_ONLY_TO_WINDOWS81 = 'applyOnlyToWindows81';
    public const FIELD_BROWSER_BLOCK_AUTOFILL = 'browserBlockAutofill';
    public const FIELD_BROWSER_BLOCK_AUTOMATIC_DETECTION_OF_INTRANET_SITES = 'browserBlockAutomaticDetectionOfIntranetSites';
    public const FIELD_BROWSER_BLOCK_ENTERPRISE_MODE_ACCESS = 'browserBlockEnterpriseModeAccess';
    public const FIELD_BROWSER_BLOCK_JAVA_SCRIPT = 'browserBlockJavaScript';
    public const FIELD_BROWSER_BLOCK_PLUGINS = 'browserBlockPlugins';
    public const FIELD_BROWSER_BLOCK_POPUPS = 'browserBlockPopups';
    public const FIELD_BROWSER_BLOCK_SENDING_DO_NOT_TRACK_HEADER = 'browserBlockSendingDoNotTrackHeader';
    public const FIELD_BROWSER_BLOCK_SINGLE_WORD_ENTRY_ON_INTRANET_SITES = 'browserBlockSingleWordEntryOnIntranetSites';
    public const FIELD_BROWSER_ENTERPRISE_MODE_SITE_LIST_LOCATION = 'browserEnterpriseModeSiteListLocation';
    public const FIELD_BROWSER_INTERNET_SECURITY_LEVEL = 'browserInternetSecurityLevel';
    public const FIELD_BROWSER_INTRANET_SECURITY_LEVEL = 'browserIntranetSecurityLevel';
    public const FIELD_BROWSER_LOGGING_REPORT_LOCATION = 'browserLoggingReportLocation';
    public const FIELD_BROWSER_REQUIRE_FIREWALL = 'browserRequireFirewall';
    public const FIELD_BROWSER_REQUIRE_FRAUD_WARNING = 'browserRequireFraudWarning';
    public const FIELD_BROWSER_REQUIRE_HIGH_SECURITY_FOR_RESTRICTED_SITES = 'browserRequireHighSecurityForRestrictedSites';
    public const FIELD_BROWSER_REQUIRE_SMART_SCREEN = 'browserRequireSmartScreen';
    public const FIELD_BROWSER_TRUSTED_SITES_SECURITY_LEVEL = 'browserTrustedSitesSecurityLevel';
    public const FIELD_CELLULAR_BLOCK_DATA_ROAMING = 'cellularBlockDataRoaming';
    public const FIELD_DIAGNOSTICS_BLOCK_DATA_SUBMISSION = 'diagnosticsBlockDataSubmission';
    public const FIELD_PASSWORD_BLOCK_PICTURE_PASSWORD_AND_PIN = 'passwordBlockPicturePasswordAndPin';
    public const FIELD_PASSWORD_EXPIRATION_DAYS = 'passwordExpirationDays';
    public const FIELD_PASSWORD_MINIMUM_CHARACTER_SET_COUNT = 'passwordMinimumCharacterSetCount';
    public const FIELD_PASSWORD_MINIMUM_LENGTH = 'passwordMinimumLength';
    public const FIELD_PASSWORD_MINUTES_OF_INACTIVITY_BEFORE_SCREEN_TIMEOUT = 'passwordMinutesOfInactivityBeforeScreenTimeout';
    public const FIELD_PASSWORD_PREVIOUS_PASSWORD_BLOCK_COUNT = 'passwordPreviousPasswordBlockCount';
    public const FIELD_PASSWORD_REQUIRED_TYPE = 'passwordRequiredType';
    public const FIELD_PASSWORD_SIGN_IN_FAILURE_COUNT_BEFORE_FACTORY_RESET = 'passwordSignInFailureCountBeforeFactoryReset';
    public const FIELD_STORAGE_REQUIRE_DEVICE_ENCRYPTION = 'storageRequireDeviceEncryption';
    public const FIELD_UPDATES_REQUIRE_AUTOMATIC_UPDATES = 'updatesRequireAutomaticUpdates';
    public const FIELD_USER_ACCOUNT_CONTROL_SETTINGS = 'userAccountControlSettings';
    public const FIELD_WORK_FOLDERS_URL = 'workFoldersUrl';

    /**
     * Select specific Windows81GeneralConfiguration properties
     * 
     * @param array<string> $select Use Windows81GeneralConfigurationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
