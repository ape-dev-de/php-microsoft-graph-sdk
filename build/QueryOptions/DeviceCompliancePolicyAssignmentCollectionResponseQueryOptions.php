<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceCompliancePolicyAssignmentCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DeviceCompliancePolicyAssignmentCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DeviceCompliancePolicyAssignmentCollectionResponse properties
     * 
     * @param array<string> $select Use DeviceCompliancePolicyAssignmentCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
