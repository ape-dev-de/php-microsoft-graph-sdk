<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceConfigurationDeviceStatusCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DeviceConfigurationDeviceStatusCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DeviceConfigurationDeviceStatusCollectionResponse properties
     * 
     * @param array<string> $select Use DeviceConfigurationDeviceStatusCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
