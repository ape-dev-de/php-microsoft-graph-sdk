<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceCompliancePolicyStateCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DeviceCompliancePolicyStateCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DeviceCompliancePolicyStateCollectionResponse properties
     * 
     * @param array<string> $select Use DeviceCompliancePolicyStateCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
