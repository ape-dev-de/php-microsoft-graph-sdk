<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceComplianceActionItemCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DeviceComplianceActionItemCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DeviceComplianceActionItemCollectionResponse properties
     * 
     * @param array<string> $select Use DeviceComplianceActionItemCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
