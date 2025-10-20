<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AndroidStoreApp resources
 *
 * Available select fields:
 * - appStoreUrl
 * - minimumSupportedOperatingSystem
 * - packageId
 */
class AndroidStoreAppQueryOptions extends QueryOptions
{
    public const FIELD_APP_STORE_URL = 'appStoreUrl';
    public const FIELD_MINIMUM_SUPPORTED_OPERATING_SYSTEM = 'minimumSupportedOperatingSystem';
    public const FIELD_PACKAGE_ID = 'packageId';

    /**
     * Select specific AndroidStoreApp properties
     * 
     * @param array<string> $select Use AndroidStoreAppQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
