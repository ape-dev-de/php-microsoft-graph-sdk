<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceConfigurationStateCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DeviceConfigurationStateCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DeviceConfigurationStateCollectionResponse properties
     * 
     * @param array<string> $select Use DeviceConfigurationStateCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
