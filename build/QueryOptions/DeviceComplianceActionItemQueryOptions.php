<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceComplianceActionItem resources
 *
 * Available select fields:
 */
class DeviceComplianceActionItemQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceComplianceActionItem
     */

    /**
     * Select specific DeviceComplianceActionItem properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
