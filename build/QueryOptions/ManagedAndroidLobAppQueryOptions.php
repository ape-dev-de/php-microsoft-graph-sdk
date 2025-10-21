<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedAndroidLobApp resources
 *
 * Available select fields:
 * - minimumSupportedOperatingSystem
 * - packageId
 * - versionCode
 * - versionName
 */
class ManagedAndroidLobAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedAndroidLobApp
     */
    public const FIELD_MINIMUM_SUPPORTED_OPERATING_SYSTEM = 'minimumSupportedOperatingSystem';
    public const FIELD_PACKAGE_ID = 'packageId';
    public const FIELD_VERSION_CODE = 'versionCode';
    public const FIELD_VERSION_NAME = 'versionName';

    /**
     * Select specific ManagedAndroidLobApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
