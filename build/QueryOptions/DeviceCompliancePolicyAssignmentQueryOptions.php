<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceCompliancePolicyAssignment resources
 *
 * Available select fields:
 */
class DeviceCompliancePolicyAssignmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceCompliancePolicyAssignment
     */

    /**
     * Select specific DeviceCompliancePolicyAssignment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
