<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosGeneralDeviceConfiguration resources
 *
 * Available select fields:
 * - accountBlockModification
 * - activationLockAllowWhenSupervised
 * - airDropBlocked
 * - airDropForceUnmanagedDropTarget
 * - airPlayForcePairingPasswordForOutgoingRequests
 * - appleNewsBlocked
 * - appleWatchBlockPairing
 * - appleWatchForceWristDetection
 * - appsSingleAppModeList
 * - appStoreBlockAutomaticDownloads
 * - appStoreBlocked
 * - appStoreBlockInAppPurchases
 * - appStoreBlockUIAppInstallation
 * - appStoreRequirePassword
 * - appsVisibilityList
 * - appsVisibilityListType
 * - bluetoothBlockModification
 * - cameraBlocked
 * - cellularBlockDataRoaming
 * - cellularBlockGlobalBackgroundFetchWhileRoaming
 * - cellularBlockPerAppDataModification
 * - cellularBlockPersonalHotspot
 * - cellularBlockVoiceRoaming
 * - certificatesBlockUntrustedTlsCertificates
 * - classroomAppBlockRemoteScreenObservation
 * - classroomAppForceUnpromptedScreenObservation
 * - compliantAppListType
 * - compliantAppsList
 * - configurationProfileBlockChanges
 * - definitionLookupBlocked
 * - deviceBlockEnableRestrictions
 * - deviceBlockEraseContentAndSettings
 * - deviceBlockNameModification
 * - diagnosticDataBlockSubmission
 * - diagnosticDataBlockSubmissionModification
 * - documentsBlockManagedDocumentsInUnmanagedApps
 * - documentsBlockUnmanagedDocumentsInManagedApps
 * - emailInDomainSuffixes
 * - enterpriseAppBlockTrust
 * - enterpriseAppBlockTrustModification
 * - faceTimeBlocked
 * - findMyFriendsBlocked
 * - gameCenterBlocked
 * - gamingBlockGameCenterFriends
 * - gamingBlockMultiplayer
 * - hostPairingBlocked
 * - iBooksStoreBlocked
 * - iBooksStoreBlockErotica
 * - iCloudBlockActivityContinuation
 * - iCloudBlockBackup
 * - iCloudBlockDocumentSync
 * - iCloudBlockManagedAppsSync
 * - iCloudBlockPhotoLibrary
 * - iCloudBlockPhotoStreamSync
 * - iCloudBlockSharedPhotoStream
 * - iCloudRequireEncryptedBackup
 * - iTunesBlockExplicitContent
 * - iTunesBlockMusicService
 * - iTunesBlockRadio
 * - keyboardBlockAutoCorrect
 * - keyboardBlockDictation
 * - keyboardBlockPredictive
 * - keyboardBlockShortcuts
 * - keyboardBlockSpellCheck
 * - kioskModeAllowAssistiveSpeak
 * - kioskModeAllowAssistiveTouchSettings
 * - kioskModeAllowAutoLock
 * - kioskModeAllowColorInversionSettings
 * - kioskModeAllowRingerSwitch
 * - kioskModeAllowScreenRotation
 * - kioskModeAllowSleepButton
 * - kioskModeAllowTouchscreen
 * - kioskModeAllowVoiceOverSettings
 * - kioskModeAllowVolumeButtons
 * - kioskModeAllowZoomSettings
 * - kioskModeAppStoreUrl
 * - kioskModeBuiltInAppId
 * - kioskModeManagedAppId
 * - kioskModeRequireAssistiveTouch
 * - kioskModeRequireColorInversion
 * - kioskModeRequireMonoAudio
 * - kioskModeRequireVoiceOver
 * - kioskModeRequireZoom
 * - lockScreenBlockControlCenter
 * - lockScreenBlockNotificationView
 * - lockScreenBlockPassbook
 * - lockScreenBlockTodayView
 * - mediaContentRatingApps
 * - mediaContentRatingAustralia
 * - mediaContentRatingCanada
 * - mediaContentRatingFrance
 * - mediaContentRatingGermany
 * - mediaContentRatingIreland
 * - mediaContentRatingJapan
 * - mediaContentRatingNewZealand
 * - mediaContentRatingUnitedKingdom
 * - mediaContentRatingUnitedStates
 * - messagesBlocked
 * - networkUsageRules
 * - notificationsBlockSettingsModification
 * - passcodeBlockFingerprintModification
 * - passcodeBlockFingerprintUnlock
 * - passcodeBlockModification
 * - passcodeBlockSimple
 * - passcodeExpirationDays
 * - passcodeMinimumCharacterSetCount
 * - passcodeMinimumLength
 * - passcodeMinutesOfInactivityBeforeLock
 * - passcodeMinutesOfInactivityBeforeScreenTimeout
 * - passcodePreviousPasscodeBlockCount
 * - passcodeRequired
 * - passcodeRequiredType
 * - passcodeSignInFailureCountBeforeWipe
 * - podcastsBlocked
 * - safariBlockAutofill
 * - safariBlocked
 * - safariBlockJavaScript
 * - safariBlockPopups
 * - safariCookieSettings
 * - safariManagedDomains
 * - safariPasswordAutoFillDomains
 * - safariRequireFraudWarning
 * - screenCaptureBlocked
 * - siriBlocked
 * - siriBlockedWhenLocked
 * - siriBlockUserGeneratedContent
 * - siriRequireProfanityFilter
 * - spotlightBlockInternetResults
 * - voiceDialingBlocked
 * - wallpaperBlockModification
 * - wiFiConnectOnlyToConfiguredNetworks
 */
class IosGeneralDeviceConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IosGeneralDeviceConfiguration
     */
    public const FIELD_ACCOUNT_BLOCK_MODIFICATION = 'accountBlockModification';
    public const FIELD_ACTIVATION_LOCK_ALLOW_WHEN_SUPERVISED = 'activationLockAllowWhenSupervised';
    public const FIELD_AIR_DROP_BLOCKED = 'airDropBlocked';
    public const FIELD_AIR_DROP_FORCE_UNMANAGED_DROP_TARGET = 'airDropForceUnmanagedDropTarget';
    public const FIELD_AIR_PLAY_FORCE_PAIRING_PASSWORD_FOR_OUTGOING_REQUESTS = 'airPlayForcePairingPasswordForOutgoingRequests';
    public const FIELD_APPLE_NEWS_BLOCKED = 'appleNewsBlocked';
    public const FIELD_APPLE_WATCH_BLOCK_PAIRING = 'appleWatchBlockPairing';
    public const FIELD_APPLE_WATCH_FORCE_WRIST_DETECTION = 'appleWatchForceWristDetection';
    public const FIELD_APPS_SINGLE_APP_MODE_LIST = 'appsSingleAppModeList';
    public const FIELD_APP_STORE_BLOCK_AUTOMATIC_DOWNLOADS = 'appStoreBlockAutomaticDownloads';
    public const FIELD_APP_STORE_BLOCKED = 'appStoreBlocked';
    public const FIELD_APP_STORE_BLOCK_IN_APP_PURCHASES = 'appStoreBlockInAppPurchases';
    public const FIELD_APP_STORE_BLOCK_UIAPP_INSTALLATION = 'appStoreBlockUIAppInstallation';
    public const FIELD_APP_STORE_REQUIRE_PASSWORD = 'appStoreRequirePassword';
    public const FIELD_APPS_VISIBILITY_LIST = 'appsVisibilityList';
    public const FIELD_APPS_VISIBILITY_LIST_TYPE = 'appsVisibilityListType';
    public const FIELD_BLUETOOTH_BLOCK_MODIFICATION = 'bluetoothBlockModification';
    public const FIELD_CAMERA_BLOCKED = 'cameraBlocked';
    public const FIELD_CELLULAR_BLOCK_DATA_ROAMING = 'cellularBlockDataRoaming';
    public const FIELD_CELLULAR_BLOCK_GLOBAL_BACKGROUND_FETCH_WHILE_ROAMING = 'cellularBlockGlobalBackgroundFetchWhileRoaming';
    public const FIELD_CELLULAR_BLOCK_PER_APP_DATA_MODIFICATION = 'cellularBlockPerAppDataModification';
    public const FIELD_CELLULAR_BLOCK_PERSONAL_HOTSPOT = 'cellularBlockPersonalHotspot';
    public const FIELD_CELLULAR_BLOCK_VOICE_ROAMING = 'cellularBlockVoiceRoaming';
    public const FIELD_CERTIFICATES_BLOCK_UNTRUSTED_TLS_CERTIFICATES = 'certificatesBlockUntrustedTlsCertificates';
    public const FIELD_CLASSROOM_APP_BLOCK_REMOTE_SCREEN_OBSERVATION = 'classroomAppBlockRemoteScreenObservation';
    public const FIELD_CLASSROOM_APP_FORCE_UNPROMPTED_SCREEN_OBSERVATION = 'classroomAppForceUnpromptedScreenObservation';
    public const FIELD_COMPLIANT_APP_LIST_TYPE = 'compliantAppListType';
    public const FIELD_COMPLIANT_APPS_LIST = 'compliantAppsList';
    public const FIELD_CONFIGURATION_PROFILE_BLOCK_CHANGES = 'configurationProfileBlockChanges';
    public const FIELD_DEFINITION_LOOKUP_BLOCKED = 'definitionLookupBlocked';
    public const FIELD_DEVICE_BLOCK_ENABLE_RESTRICTIONS = 'deviceBlockEnableRestrictions';
    public const FIELD_DEVICE_BLOCK_ERASE_CONTENT_AND_SETTINGS = 'deviceBlockEraseContentAndSettings';
    public const FIELD_DEVICE_BLOCK_NAME_MODIFICATION = 'deviceBlockNameModification';
    public const FIELD_DIAGNOSTIC_DATA_BLOCK_SUBMISSION = 'diagnosticDataBlockSubmission';
    public const FIELD_DIAGNOSTIC_DATA_BLOCK_SUBMISSION_MODIFICATION = 'diagnosticDataBlockSubmissionModification';
    public const FIELD_DOCUMENTS_BLOCK_MANAGED_DOCUMENTS_IN_UNMANAGED_APPS = 'documentsBlockManagedDocumentsInUnmanagedApps';
    public const FIELD_DOCUMENTS_BLOCK_UNMANAGED_DOCUMENTS_IN_MANAGED_APPS = 'documentsBlockUnmanagedDocumentsInManagedApps';
    public const FIELD_EMAIL_IN_DOMAIN_SUFFIXES = 'emailInDomainSuffixes';
    public const FIELD_ENTERPRISE_APP_BLOCK_TRUST = 'enterpriseAppBlockTrust';
    public const FIELD_ENTERPRISE_APP_BLOCK_TRUST_MODIFICATION = 'enterpriseAppBlockTrustModification';
    public const FIELD_FACE_TIME_BLOCKED = 'faceTimeBlocked';
    public const FIELD_FIND_MY_FRIENDS_BLOCKED = 'findMyFriendsBlocked';
    public const FIELD_GAME_CENTER_BLOCKED = 'gameCenterBlocked';
    public const FIELD_GAMING_BLOCK_GAME_CENTER_FRIENDS = 'gamingBlockGameCenterFriends';
    public const FIELD_GAMING_BLOCK_MULTIPLAYER = 'gamingBlockMultiplayer';
    public const FIELD_HOST_PAIRING_BLOCKED = 'hostPairingBlocked';
    public const FIELD_I_BOOKS_STORE_BLOCKED = 'iBooksStoreBlocked';
    public const FIELD_I_BOOKS_STORE_BLOCK_EROTICA = 'iBooksStoreBlockErotica';
    public const FIELD_I_CLOUD_BLOCK_ACTIVITY_CONTINUATION = 'iCloudBlockActivityContinuation';
    public const FIELD_I_CLOUD_BLOCK_BACKUP = 'iCloudBlockBackup';
    public const FIELD_I_CLOUD_BLOCK_DOCUMENT_SYNC = 'iCloudBlockDocumentSync';
    public const FIELD_I_CLOUD_BLOCK_MANAGED_APPS_SYNC = 'iCloudBlockManagedAppsSync';
    public const FIELD_I_CLOUD_BLOCK_PHOTO_LIBRARY = 'iCloudBlockPhotoLibrary';
    public const FIELD_I_CLOUD_BLOCK_PHOTO_STREAM_SYNC = 'iCloudBlockPhotoStreamSync';
    public const FIELD_I_CLOUD_BLOCK_SHARED_PHOTO_STREAM = 'iCloudBlockSharedPhotoStream';
    public const FIELD_I_CLOUD_REQUIRE_ENCRYPTED_BACKUP = 'iCloudRequireEncryptedBackup';
    public const FIELD_I_TUNES_BLOCK_EXPLICIT_CONTENT = 'iTunesBlockExplicitContent';
    public const FIELD_I_TUNES_BLOCK_MUSIC_SERVICE = 'iTunesBlockMusicService';
    public const FIELD_I_TUNES_BLOCK_RADIO = 'iTunesBlockRadio';
    public const FIELD_KEYBOARD_BLOCK_AUTO_CORRECT = 'keyboardBlockAutoCorrect';
    public const FIELD_KEYBOARD_BLOCK_DICTATION = 'keyboardBlockDictation';
    public const FIELD_KEYBOARD_BLOCK_PREDICTIVE = 'keyboardBlockPredictive';
    public const FIELD_KEYBOARD_BLOCK_SHORTCUTS = 'keyboardBlockShortcuts';
    public const FIELD_KEYBOARD_BLOCK_SPELL_CHECK = 'keyboardBlockSpellCheck';
    public const FIELD_KIOSK_MODE_ALLOW_ASSISTIVE_SPEAK = 'kioskModeAllowAssistiveSpeak';
    public const FIELD_KIOSK_MODE_ALLOW_ASSISTIVE_TOUCH_SETTINGS = 'kioskModeAllowAssistiveTouchSettings';
    public const FIELD_KIOSK_MODE_ALLOW_AUTO_LOCK = 'kioskModeAllowAutoLock';
    public const FIELD_KIOSK_MODE_ALLOW_COLOR_INVERSION_SETTINGS = 'kioskModeAllowColorInversionSettings';
    public const FIELD_KIOSK_MODE_ALLOW_RINGER_SWITCH = 'kioskModeAllowRingerSwitch';
    public const FIELD_KIOSK_MODE_ALLOW_SCREEN_ROTATION = 'kioskModeAllowScreenRotation';
    public const FIELD_KIOSK_MODE_ALLOW_SLEEP_BUTTON = 'kioskModeAllowSleepButton';
    public const FIELD_KIOSK_MODE_ALLOW_TOUCHSCREEN = 'kioskModeAllowTouchscreen';
    public const FIELD_KIOSK_MODE_ALLOW_VOICE_OVER_SETTINGS = 'kioskModeAllowVoiceOverSettings';
    public const FIELD_KIOSK_MODE_ALLOW_VOLUME_BUTTONS = 'kioskModeAllowVolumeButtons';
    public const FIELD_KIOSK_MODE_ALLOW_ZOOM_SETTINGS = 'kioskModeAllowZoomSettings';
    public const FIELD_KIOSK_MODE_APP_STORE_URL = 'kioskModeAppStoreUrl';
    public const FIELD_KIOSK_MODE_BUILT_IN_APP_ID = 'kioskModeBuiltInAppId';
    public const FIELD_KIOSK_MODE_MANAGED_APP_ID = 'kioskModeManagedAppId';
    public const FIELD_KIOSK_MODE_REQUIRE_ASSISTIVE_TOUCH = 'kioskModeRequireAssistiveTouch';
    public const FIELD_KIOSK_MODE_REQUIRE_COLOR_INVERSION = 'kioskModeRequireColorInversion';
    public const FIELD_KIOSK_MODE_REQUIRE_MONO_AUDIO = 'kioskModeRequireMonoAudio';
    public const FIELD_KIOSK_MODE_REQUIRE_VOICE_OVER = 'kioskModeRequireVoiceOver';
    public const FIELD_KIOSK_MODE_REQUIRE_ZOOM = 'kioskModeRequireZoom';
    public const FIELD_LOCK_SCREEN_BLOCK_CONTROL_CENTER = 'lockScreenBlockControlCenter';
    public const FIELD_LOCK_SCREEN_BLOCK_NOTIFICATION_VIEW = 'lockScreenBlockNotificationView';
    public const FIELD_LOCK_SCREEN_BLOCK_PASSBOOK = 'lockScreenBlockPassbook';
    public const FIELD_LOCK_SCREEN_BLOCK_TODAY_VIEW = 'lockScreenBlockTodayView';
    public const FIELD_MEDIA_CONTENT_RATING_APPS = 'mediaContentRatingApps';
    public const FIELD_MEDIA_CONTENT_RATING_AUSTRALIA = 'mediaContentRatingAustralia';
    public const FIELD_MEDIA_CONTENT_RATING_CANADA = 'mediaContentRatingCanada';
    public const FIELD_MEDIA_CONTENT_RATING_FRANCE = 'mediaContentRatingFrance';
    public const FIELD_MEDIA_CONTENT_RATING_GERMANY = 'mediaContentRatingGermany';
    public const FIELD_MEDIA_CONTENT_RATING_IRELAND = 'mediaContentRatingIreland';
    public const FIELD_MEDIA_CONTENT_RATING_JAPAN = 'mediaContentRatingJapan';
    public const FIELD_MEDIA_CONTENT_RATING_NEW_ZEALAND = 'mediaContentRatingNewZealand';
    public const FIELD_MEDIA_CONTENT_RATING_UNITED_KINGDOM = 'mediaContentRatingUnitedKingdom';
    public const FIELD_MEDIA_CONTENT_RATING_UNITED_STATES = 'mediaContentRatingUnitedStates';
    public const FIELD_MESSAGES_BLOCKED = 'messagesBlocked';
    public const FIELD_NETWORK_USAGE_RULES = 'networkUsageRules';
    public const FIELD_NOTIFICATIONS_BLOCK_SETTINGS_MODIFICATION = 'notificationsBlockSettingsModification';
    public const FIELD_PASSCODE_BLOCK_FINGERPRINT_MODIFICATION = 'passcodeBlockFingerprintModification';
    public const FIELD_PASSCODE_BLOCK_FINGERPRINT_UNLOCK = 'passcodeBlockFingerprintUnlock';
    public const FIELD_PASSCODE_BLOCK_MODIFICATION = 'passcodeBlockModification';
    public const FIELD_PASSCODE_BLOCK_SIMPLE = 'passcodeBlockSimple';
    public const FIELD_PASSCODE_EXPIRATION_DAYS = 'passcodeExpirationDays';
    public const FIELD_PASSCODE_MINIMUM_CHARACTER_SET_COUNT = 'passcodeMinimumCharacterSetCount';
    public const FIELD_PASSCODE_MINIMUM_LENGTH = 'passcodeMinimumLength';
    public const FIELD_PASSCODE_MINUTES_OF_INACTIVITY_BEFORE_LOCK = 'passcodeMinutesOfInactivityBeforeLock';
    public const FIELD_PASSCODE_MINUTES_OF_INACTIVITY_BEFORE_SCREEN_TIMEOUT = 'passcodeMinutesOfInactivityBeforeScreenTimeout';
    public const FIELD_PASSCODE_PREVIOUS_PASSCODE_BLOCK_COUNT = 'passcodePreviousPasscodeBlockCount';
    public const FIELD_PASSCODE_REQUIRED = 'passcodeRequired';
    public const FIELD_PASSCODE_REQUIRED_TYPE = 'passcodeRequiredType';
    public const FIELD_PASSCODE_SIGN_IN_FAILURE_COUNT_BEFORE_WIPE = 'passcodeSignInFailureCountBeforeWipe';
    public const FIELD_PODCASTS_BLOCKED = 'podcastsBlocked';
    public const FIELD_SAFARI_BLOCK_AUTOFILL = 'safariBlockAutofill';
    public const FIELD_SAFARI_BLOCKED = 'safariBlocked';
    public const FIELD_SAFARI_BLOCK_JAVA_SCRIPT = 'safariBlockJavaScript';
    public const FIELD_SAFARI_BLOCK_POPUPS = 'safariBlockPopups';
    public const FIELD_SAFARI_COOKIE_SETTINGS = 'safariCookieSettings';
    public const FIELD_SAFARI_MANAGED_DOMAINS = 'safariManagedDomains';
    public const FIELD_SAFARI_PASSWORD_AUTO_FILL_DOMAINS = 'safariPasswordAutoFillDomains';
    public const FIELD_SAFARI_REQUIRE_FRAUD_WARNING = 'safariRequireFraudWarning';
    public const FIELD_SCREEN_CAPTURE_BLOCKED = 'screenCaptureBlocked';
    public const FIELD_SIRI_BLOCKED = 'siriBlocked';
    public const FIELD_SIRI_BLOCKED_WHEN_LOCKED = 'siriBlockedWhenLocked';
    public const FIELD_SIRI_BLOCK_USER_GENERATED_CONTENT = 'siriBlockUserGeneratedContent';
    public const FIELD_SIRI_REQUIRE_PROFANITY_FILTER = 'siriRequireProfanityFilter';
    public const FIELD_SPOTLIGHT_BLOCK_INTERNET_RESULTS = 'spotlightBlockInternetResults';
    public const FIELD_VOICE_DIALING_BLOCKED = 'voiceDialingBlocked';
    public const FIELD_WALLPAPER_BLOCK_MODIFICATION = 'wallpaperBlockModification';
    public const FIELD_WI_FI_CONNECT_ONLY_TO_CONFIGURED_NETWORKS = 'wiFiConnectOnlyToConfiguredNetworks';

    /**
     * Select specific IosGeneralDeviceConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
