<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsPhone81GeneralConfiguration resources
 *
 * Available select fields:
 * - applyOnlyToWindowsPhone81
 * - appsBlockCopyPaste
 * - bluetoothBlocked
 * - cameraBlocked
 * - cellularBlockWifiTethering
 * - compliantAppListType
 * - compliantAppsList
 * - diagnosticDataBlockSubmission
 * - emailBlockAddingAccounts
 * - locationServicesBlocked
 * - microsoftAccountBlocked
 * - nfcBlocked
 * - passwordBlockSimple
 * - passwordExpirationDays
 * - passwordMinimumCharacterSetCount
 * - passwordMinimumLength
 * - passwordMinutesOfInactivityBeforeScreenTimeout
 * - passwordPreviousPasswordBlockCount
 * - passwordRequired
 * - passwordRequiredType
 * - passwordSignInFailureCountBeforeFactoryReset
 * - screenCaptureBlocked
 * - storageBlockRemovableStorage
 * - storageRequireEncryption
 * - webBrowserBlocked
 * - wifiBlockAutomaticConnectHotspots
 * - wifiBlocked
 * - wifiBlockHotspotReporting
 * - windowsStoreBlocked
 */
class WindowsPhone81GeneralConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsPhone81GeneralConfiguration
     */
    public const FIELD_APPLY_ONLY_TO_WINDOWS_PHONE81 = 'applyOnlyToWindowsPhone81';
    public const FIELD_APPS_BLOCK_COPY_PASTE = 'appsBlockCopyPaste';
    public const FIELD_BLUETOOTH_BLOCKED = 'bluetoothBlocked';
    public const FIELD_CAMERA_BLOCKED = 'cameraBlocked';
    public const FIELD_CELLULAR_BLOCK_WIFI_TETHERING = 'cellularBlockWifiTethering';
    public const FIELD_COMPLIANT_APP_LIST_TYPE = 'compliantAppListType';
    public const FIELD_COMPLIANT_APPS_LIST = 'compliantAppsList';
    public const FIELD_DIAGNOSTIC_DATA_BLOCK_SUBMISSION = 'diagnosticDataBlockSubmission';
    public const FIELD_EMAIL_BLOCK_ADDING_ACCOUNTS = 'emailBlockAddingAccounts';
    public const FIELD_LOCATION_SERVICES_BLOCKED = 'locationServicesBlocked';
    public const FIELD_MICROSOFT_ACCOUNT_BLOCKED = 'microsoftAccountBlocked';
    public const FIELD_NFC_BLOCKED = 'nfcBlocked';
    public const FIELD_PASSWORD_BLOCK_SIMPLE = 'passwordBlockSimple';
    public const FIELD_PASSWORD_EXPIRATION_DAYS = 'passwordExpirationDays';
    public const FIELD_PASSWORD_MINIMUM_CHARACTER_SET_COUNT = 'passwordMinimumCharacterSetCount';
    public const FIELD_PASSWORD_MINIMUM_LENGTH = 'passwordMinimumLength';
    public const FIELD_PASSWORD_MINUTES_OF_INACTIVITY_BEFORE_SCREEN_TIMEOUT = 'passwordMinutesOfInactivityBeforeScreenTimeout';
    public const FIELD_PASSWORD_PREVIOUS_PASSWORD_BLOCK_COUNT = 'passwordPreviousPasswordBlockCount';
    public const FIELD_PASSWORD_REQUIRED = 'passwordRequired';
    public const FIELD_PASSWORD_REQUIRED_TYPE = 'passwordRequiredType';
    public const FIELD_PASSWORD_SIGN_IN_FAILURE_COUNT_BEFORE_FACTORY_RESET = 'passwordSignInFailureCountBeforeFactoryReset';
    public const FIELD_SCREEN_CAPTURE_BLOCKED = 'screenCaptureBlocked';
    public const FIELD_STORAGE_BLOCK_REMOVABLE_STORAGE = 'storageBlockRemovableStorage';
    public const FIELD_STORAGE_REQUIRE_ENCRYPTION = 'storageRequireEncryption';
    public const FIELD_WEB_BROWSER_BLOCKED = 'webBrowserBlocked';
    public const FIELD_WIFI_BLOCK_AUTOMATIC_CONNECT_HOTSPOTS = 'wifiBlockAutomaticConnectHotspots';
    public const FIELD_WIFI_BLOCKED = 'wifiBlocked';
    public const FIELD_WIFI_BLOCK_HOTSPOT_REPORTING = 'wifiBlockHotspotReporting';
    public const FIELD_WINDOWS_STORE_BLOCKED = 'windowsStoreBlocked';

    /**
     * Select specific WindowsPhone81GeneralConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
