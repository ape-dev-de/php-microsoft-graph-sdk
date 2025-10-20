<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceConfigurationSettingStateCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DeviceConfigurationSettingStateCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DeviceConfigurationSettingStateCollectionResponse properties
     * 
     * @param array<string> $select Use DeviceConfigurationSettingStateCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
