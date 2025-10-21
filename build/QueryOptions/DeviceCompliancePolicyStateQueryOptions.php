<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceCompliancePolicyState resources
 *
 * Available select fields:
 */
class DeviceCompliancePolicyStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceCompliancePolicyState
     */

    /**
     * Select specific DeviceCompliancePolicyState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
