<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceComplianceDeviceOverview resources
 *
 * Available select fields:
 */
class DeviceComplianceDeviceOverviewQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceComplianceDeviceOverview
     */

    /**
     * Select specific DeviceComplianceDeviceOverview properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
