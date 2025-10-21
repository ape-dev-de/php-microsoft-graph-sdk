<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceCompliancePolicyDeviceStateSummary resources
 *
 * Available select fields:
 */
class DeviceCompliancePolicyDeviceStateSummaryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceCompliancePolicyDeviceStateSummary
     */

    /**
     * Select specific DeviceCompliancePolicyDeviceStateSummary properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
