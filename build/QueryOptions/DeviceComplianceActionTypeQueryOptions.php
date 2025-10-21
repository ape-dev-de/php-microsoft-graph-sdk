<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceComplianceActionType resources
 *
 * Available select fields:
 */
class DeviceComplianceActionTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceComplianceActionType
     */

    /**
     * Select specific DeviceComplianceActionType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
