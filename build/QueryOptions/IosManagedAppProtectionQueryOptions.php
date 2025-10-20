<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosManagedAppProtection resources
 *
 * Available select fields:
 * - appDataEncryptionType
 * - customBrowserProtocol
 * - deployedAppCount
 * - faceIdBlocked
 * - minimumRequiredSdkVersion
 * - apps
 * - deploymentSummary
 */
class IosManagedAppProtectionQueryOptions extends QueryOptions
{
    public const FIELD_APP_DATA_ENCRYPTION_TYPE = 'appDataEncryptionType';
    public const FIELD_CUSTOM_BROWSER_PROTOCOL = 'customBrowserProtocol';
    public const FIELD_DEPLOYED_APP_COUNT = 'deployedAppCount';
    public const FIELD_FACE_ID_BLOCKED = 'faceIdBlocked';
    public const FIELD_MINIMUM_REQUIRED_SDK_VERSION = 'minimumRequiredSdkVersion';
    public const FIELD_APPS = 'apps';
    public const FIELD_DEPLOYMENT_SUMMARY = 'deploymentSummary';

    /**
     * Select specific IosManagedAppProtection properties
     * 
     * @param array<string> $select Use IosManagedAppProtectionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
