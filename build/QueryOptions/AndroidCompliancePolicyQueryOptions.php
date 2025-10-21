<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AndroidCompliancePolicy resources
 *
 * Available select fields:
 * - deviceThreatProtectionEnabled
 * - deviceThreatProtectionRequiredSecurityLevel
 * - minAndroidSecurityPatchLevel
 * - osMaximumVersion
 * - osMinimumVersion
 * - passwordExpirationDays
 * - passwordMinimumLength
 * - passwordMinutesOfInactivityBeforeLock
 * - passwordPreviousPasswordBlockCount
 * - passwordRequired
 * - passwordRequiredType
 * - securityBlockJailbrokenDevices
 * - securityDisableUsbDebugging
 * - securityPreventInstallAppsFromUnknownSources
 * - securityRequireCompanyPortalAppIntegrity
 * - securityRequireGooglePlayServices
 * - securityRequireSafetyNetAttestationBasicIntegrity
 * - securityRequireSafetyNetAttestationCertifiedDevice
 * - securityRequireUpToDateSecurityProviders
 * - securityRequireVerifyApps
 * - storageRequireEncryption
 */
class AndroidCompliancePolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AndroidCompliancePolicy
     */
    public const FIELD_DEVICE_THREAT_PROTECTION_ENABLED = 'deviceThreatProtectionEnabled';
    public const FIELD_DEVICE_THREAT_PROTECTION_REQUIRED_SECURITY_LEVEL = 'deviceThreatProtectionRequiredSecurityLevel';
    public const FIELD_MIN_ANDROID_SECURITY_PATCH_LEVEL = 'minAndroidSecurityPatchLevel';
    public const FIELD_OS_MAXIMUM_VERSION = 'osMaximumVersion';
    public const FIELD_OS_MINIMUM_VERSION = 'osMinimumVersion';
    public const FIELD_PASSWORD_EXPIRATION_DAYS = 'passwordExpirationDays';
    public const FIELD_PASSWORD_MINIMUM_LENGTH = 'passwordMinimumLength';
    public const FIELD_PASSWORD_MINUTES_OF_INACTIVITY_BEFORE_LOCK = 'passwordMinutesOfInactivityBeforeLock';
    public const FIELD_PASSWORD_PREVIOUS_PASSWORD_BLOCK_COUNT = 'passwordPreviousPasswordBlockCount';
    public const FIELD_PASSWORD_REQUIRED = 'passwordRequired';
    public const FIELD_PASSWORD_REQUIRED_TYPE = 'passwordRequiredType';
    public const FIELD_SECURITY_BLOCK_JAILBROKEN_DEVICES = 'securityBlockJailbrokenDevices';
    public const FIELD_SECURITY_DISABLE_USB_DEBUGGING = 'securityDisableUsbDebugging';
    public const FIELD_SECURITY_PREVENT_INSTALL_APPS_FROM_UNKNOWN_SOURCES = 'securityPreventInstallAppsFromUnknownSources';
    public const FIELD_SECURITY_REQUIRE_COMPANY_PORTAL_APP_INTEGRITY = 'securityRequireCompanyPortalAppIntegrity';
    public const FIELD_SECURITY_REQUIRE_GOOGLE_PLAY_SERVICES = 'securityRequireGooglePlayServices';
    public const FIELD_SECURITY_REQUIRE_SAFETY_NET_ATTESTATION_BASIC_INTEGRITY = 'securityRequireSafetyNetAttestationBasicIntegrity';
    public const FIELD_SECURITY_REQUIRE_SAFETY_NET_ATTESTATION_CERTIFIED_DEVICE = 'securityRequireSafetyNetAttestationCertifiedDevice';
    public const FIELD_SECURITY_REQUIRE_UP_TO_DATE_SECURITY_PROVIDERS = 'securityRequireUpToDateSecurityProviders';
    public const FIELD_SECURITY_REQUIRE_VERIFY_APPS = 'securityRequireVerifyApps';
    public const FIELD_STORAGE_REQUIRE_ENCRYPTION = 'storageRequireEncryption';

    /**
     * Select specific AndroidCompliancePolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
