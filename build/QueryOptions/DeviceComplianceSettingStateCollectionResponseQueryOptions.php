<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceComplianceSettingStateCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DeviceComplianceSettingStateCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DeviceComplianceSettingStateCollectionResponse properties
     * 
     * @param array<string> $select Use DeviceComplianceSettingStateCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
