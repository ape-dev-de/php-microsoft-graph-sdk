<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceCompliancePolicy resources
 *
 * Available select fields:
 */
class DeviceCompliancePolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceCompliancePolicy
     */

    /**
     * Select specific DeviceCompliancePolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
