<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceCompliancePolicyAssignment resources
 *
 * Available select fields:
 * - target
 */
class DeviceCompliancePolicyAssignmentQueryOptions extends QueryOptions
{
    public const FIELD_TARGET = 'target';

    /**
     * Select specific DeviceCompliancePolicyAssignment properties
     * 
     * @param array<string> $select Use DeviceCompliancePolicyAssignmentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
