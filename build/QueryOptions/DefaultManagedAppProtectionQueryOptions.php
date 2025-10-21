<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DefaultManagedAppProtection resources
 *
 * Available select fields:
 * - appDataEncryptionType
 * - customSettings
 * - deployedAppCount
 * - disableAppEncryptionIfDeviceEncryptionIsEnabled
 * - encryptAppData
 * - faceIdBlocked
 * - minimumRequiredPatchVersion
 * - minimumRequiredSdkVersion
 * - minimumWarningPatchVersion
 * - screenCaptureBlocked
 * - apps
 * - deploymentSummary
 */
class DefaultManagedAppProtectionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DefaultManagedAppProtection
     */
    public const FIELD_APP_DATA_ENCRYPTION_TYPE = 'appDataEncryptionType';
    public const FIELD_CUSTOM_SETTINGS = 'customSettings';
    public const FIELD_DEPLOYED_APP_COUNT = 'deployedAppCount';
    public const FIELD_DISABLE_APP_ENCRYPTION_IF_DEVICE_ENCRYPTION_IS_ENABLED = 'disableAppEncryptionIfDeviceEncryptionIsEnabled';
    public const FIELD_ENCRYPT_APP_DATA = 'encryptAppData';
    public const FIELD_FACE_ID_BLOCKED = 'faceIdBlocked';
    public const FIELD_MINIMUM_REQUIRED_PATCH_VERSION = 'minimumRequiredPatchVersion';
    public const FIELD_MINIMUM_REQUIRED_SDK_VERSION = 'minimumRequiredSdkVersion';
    public const FIELD_MINIMUM_WARNING_PATCH_VERSION = 'minimumWarningPatchVersion';
    public const FIELD_SCREEN_CAPTURE_BLOCKED = 'screenCaptureBlocked';
    public const FIELD_APPS = 'apps';
    public const FIELD_DEPLOYMENT_SUMMARY = 'deploymentSummary';

    /**
     * Select specific DefaultManagedAppProtection properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
