<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AndroidManagedAppProtection resources
 *
 * Available select fields:
 * - customBrowserDisplayName
 * - customBrowserPackageId
 * - deployedAppCount
 * - disableAppEncryptionIfDeviceEncryptionIsEnabled
 * - encryptAppData
 * - minimumRequiredPatchVersion
 * - minimumWarningPatchVersion
 * - screenCaptureBlocked
 * - apps
 * - deploymentSummary
 */
class AndroidManagedAppProtectionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AndroidManagedAppProtection
     */
    public const FIELD_CUSTOM_BROWSER_DISPLAY_NAME = 'customBrowserDisplayName';
    public const FIELD_CUSTOM_BROWSER_PACKAGE_ID = 'customBrowserPackageId';
    public const FIELD_DEPLOYED_APP_COUNT = 'deployedAppCount';
    public const FIELD_DISABLE_APP_ENCRYPTION_IF_DEVICE_ENCRYPTION_IS_ENABLED = 'disableAppEncryptionIfDeviceEncryptionIsEnabled';
    public const FIELD_ENCRYPT_APP_DATA = 'encryptAppData';
    public const FIELD_MINIMUM_REQUIRED_PATCH_VERSION = 'minimumRequiredPatchVersion';
    public const FIELD_MINIMUM_WARNING_PATCH_VERSION = 'minimumWarningPatchVersion';
    public const FIELD_SCREEN_CAPTURE_BLOCKED = 'screenCaptureBlocked';
    public const FIELD_APPS = 'apps';
    public const FIELD_DEPLOYMENT_SUMMARY = 'deploymentSummary';

    /**
     * Select specific AndroidManagedAppProtection properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
