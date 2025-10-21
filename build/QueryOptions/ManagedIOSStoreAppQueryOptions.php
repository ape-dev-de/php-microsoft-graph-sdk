<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedIOSStoreApp resources
 *
 * Available select fields:
 * - applicableDeviceType
 * - appStoreUrl
 * - bundleId
 * - minimumSupportedOperatingSystem
 */
class ManagedIOSStoreAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedIOSStoreApp
     */
    public const FIELD_APPLICABLE_DEVICE_TYPE = 'applicableDeviceType';
    public const FIELD_APP_STORE_URL = 'appStoreUrl';
    public const FIELD_BUNDLE_ID = 'bundleId';
    public const FIELD_MINIMUM_SUPPORTED_OPERATING_SYSTEM = 'minimumSupportedOperatingSystem';

    /**
     * Select specific ManagedIOSStoreApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
