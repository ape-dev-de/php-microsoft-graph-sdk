<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AndroidGeneralDeviceConfiguration resources
 *
 * Available select fields:
 * - appsBlockClipboardSharing
 * - appsBlockCopyPaste
 * - appsBlockYouTube
 * - appsHideList
 * - appsInstallAllowList
 * - appsLaunchBlockList
 * - bluetoothBlocked
 * - cameraBlocked
 * - cellularBlockDataRoaming
 * - cellularBlockMessaging
 * - cellularBlockVoiceRoaming
 * - cellularBlockWiFiTethering
 * - compliantAppListType
 * - compliantAppsList
 * - deviceSharingAllowed
 * - diagnosticDataBlockSubmission
 * - factoryResetBlocked
 * - googleAccountBlockAutoSync
 * - googlePlayStoreBlocked
 * - kioskModeApps
 * - kioskModeBlockSleepButton
 * - kioskModeBlockVolumeButtons
 * - locationServicesBlocked
 * - nfcBlocked
 * - passwordBlockFingerprintUnlock
 * - passwordBlockTrustAgents
 * - passwordExpirationDays
 * - passwordMinimumLength
 * - passwordMinutesOfInactivityBeforeScreenTimeout
 * - passwordPreviousPasswordBlockCount
 * - passwordRequired
 * - passwordRequiredType
 * - passwordSignInFailureCountBeforeFactoryReset
 * - powerOffBlocked
 * - screenCaptureBlocked
 * - securityRequireVerifyApps
 * - storageBlockGoogleBackup
 * - storageBlockRemovableStorage
 * - storageRequireDeviceEncryption
 * - storageRequireRemovableStorageEncryption
 * - voiceAssistantBlocked
 * - voiceDialingBlocked
 * - webBrowserBlockAutofill
 * - webBrowserBlocked
 * - webBrowserBlockJavaScript
 * - webBrowserBlockPopups
 * - webBrowserCookieSettings
 * - wiFiBlocked
 */
class AndroidGeneralDeviceConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AndroidGeneralDeviceConfiguration
     */
    public const FIELD_APPS_BLOCK_CLIPBOARD_SHARING = 'appsBlockClipboardSharing';
    public const FIELD_APPS_BLOCK_COPY_PASTE = 'appsBlockCopyPaste';
    public const FIELD_APPS_BLOCK_YOU_TUBE = 'appsBlockYouTube';
    public const FIELD_APPS_HIDE_LIST = 'appsHideList';
    public const FIELD_APPS_INSTALL_ALLOW_LIST = 'appsInstallAllowList';
    public const FIELD_APPS_LAUNCH_BLOCK_LIST = 'appsLaunchBlockList';
    public const FIELD_BLUETOOTH_BLOCKED = 'bluetoothBlocked';
    public const FIELD_CAMERA_BLOCKED = 'cameraBlocked';
    public const FIELD_CELLULAR_BLOCK_DATA_ROAMING = 'cellularBlockDataRoaming';
    public const FIELD_CELLULAR_BLOCK_MESSAGING = 'cellularBlockMessaging';
    public const FIELD_CELLULAR_BLOCK_VOICE_ROAMING = 'cellularBlockVoiceRoaming';
    public const FIELD_CELLULAR_BLOCK_WI_FI_TETHERING = 'cellularBlockWiFiTethering';
    public const FIELD_COMPLIANT_APP_LIST_TYPE = 'compliantAppListType';
    public const FIELD_COMPLIANT_APPS_LIST = 'compliantAppsList';
    public const FIELD_DEVICE_SHARING_ALLOWED = 'deviceSharingAllowed';
    public const FIELD_DIAGNOSTIC_DATA_BLOCK_SUBMISSION = 'diagnosticDataBlockSubmission';
    public const FIELD_FACTORY_RESET_BLOCKED = 'factoryResetBlocked';
    public const FIELD_GOOGLE_ACCOUNT_BLOCK_AUTO_SYNC = 'googleAccountBlockAutoSync';
    public const FIELD_GOOGLE_PLAY_STORE_BLOCKED = 'googlePlayStoreBlocked';
    public const FIELD_KIOSK_MODE_APPS = 'kioskModeApps';
    public const FIELD_KIOSK_MODE_BLOCK_SLEEP_BUTTON = 'kioskModeBlockSleepButton';
    public const FIELD_KIOSK_MODE_BLOCK_VOLUME_BUTTONS = 'kioskModeBlockVolumeButtons';
    public const FIELD_LOCATION_SERVICES_BLOCKED = 'locationServicesBlocked';
    public const FIELD_NFC_BLOCKED = 'nfcBlocked';
    public const FIELD_PASSWORD_BLOCK_FINGERPRINT_UNLOCK = 'passwordBlockFingerprintUnlock';
    public const FIELD_PASSWORD_BLOCK_TRUST_AGENTS = 'passwordBlockTrustAgents';
    public const FIELD_PASSWORD_EXPIRATION_DAYS = 'passwordExpirationDays';
    public const FIELD_PASSWORD_MINIMUM_LENGTH = 'passwordMinimumLength';
    public const FIELD_PASSWORD_MINUTES_OF_INACTIVITY_BEFORE_SCREEN_TIMEOUT = 'passwordMinutesOfInactivityBeforeScreenTimeout';
    public const FIELD_PASSWORD_PREVIOUS_PASSWORD_BLOCK_COUNT = 'passwordPreviousPasswordBlockCount';
    public const FIELD_PASSWORD_REQUIRED = 'passwordRequired';
    public const FIELD_PASSWORD_REQUIRED_TYPE = 'passwordRequiredType';
    public const FIELD_PASSWORD_SIGN_IN_FAILURE_COUNT_BEFORE_FACTORY_RESET = 'passwordSignInFailureCountBeforeFactoryReset';
    public const FIELD_POWER_OFF_BLOCKED = 'powerOffBlocked';
    public const FIELD_SCREEN_CAPTURE_BLOCKED = 'screenCaptureBlocked';
    public const FIELD_SECURITY_REQUIRE_VERIFY_APPS = 'securityRequireVerifyApps';
    public const FIELD_STORAGE_BLOCK_GOOGLE_BACKUP = 'storageBlockGoogleBackup';
    public const FIELD_STORAGE_BLOCK_REMOVABLE_STORAGE = 'storageBlockRemovableStorage';
    public const FIELD_STORAGE_REQUIRE_DEVICE_ENCRYPTION = 'storageRequireDeviceEncryption';
    public const FIELD_STORAGE_REQUIRE_REMOVABLE_STORAGE_ENCRYPTION = 'storageRequireRemovableStorageEncryption';
    public const FIELD_VOICE_ASSISTANT_BLOCKED = 'voiceAssistantBlocked';
    public const FIELD_VOICE_DIALING_BLOCKED = 'voiceDialingBlocked';
    public const FIELD_WEB_BROWSER_BLOCK_AUTOFILL = 'webBrowserBlockAutofill';
    public const FIELD_WEB_BROWSER_BLOCKED = 'webBrowserBlocked';
    public const FIELD_WEB_BROWSER_BLOCK_JAVA_SCRIPT = 'webBrowserBlockJavaScript';
    public const FIELD_WEB_BROWSER_BLOCK_POPUPS = 'webBrowserBlockPopups';
    public const FIELD_WEB_BROWSER_COOKIE_SETTINGS = 'webBrowserCookieSettings';
    public const FIELD_WI_FI_BLOCKED = 'wiFiBlocked';

    /**
     * Select specific AndroidGeneralDeviceConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
