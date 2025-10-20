<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedDeviceMobileAppConfigurationDeviceStatusCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ManagedDeviceMobileAppConfigurationDeviceStatusCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ManagedDeviceMobileAppConfigurationDeviceStatusCollectionResponse properties
     * 
     * @param array<string> $select Use ManagedDeviceMobileAppConfigurationDeviceStatusCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
