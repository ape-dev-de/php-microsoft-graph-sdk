<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedAndroidStoreApp resources
 *
 * Available select fields:
 * - appStoreUrl
 * - minimumSupportedOperatingSystem
 * - packageId
 */
class ManagedAndroidStoreAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedAndroidStoreApp
     */
    public const FIELD_APP_STORE_URL = 'appStoreUrl';
    public const FIELD_MINIMUM_SUPPORTED_OPERATING_SYSTEM = 'minimumSupportedOperatingSystem';
    public const FIELD_PACKAGE_ID = 'packageId';

    /**
     * Select specific ManagedAndroidStoreApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
