<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceComplianceUserOverview resources
 *
 * Available select fields:
 */
class DeviceComplianceUserOverviewQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceComplianceUserOverview
     */

    /**
     * Select specific DeviceComplianceUserOverview properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
