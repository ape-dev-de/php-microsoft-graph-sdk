<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceCompliancePolicySettingStateSummary resources
 *
 * Available select fields:
 */
class DeviceCompliancePolicySettingStateSummaryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceCompliancePolicySettingStateSummary
     */

    /**
     * Select specific DeviceCompliancePolicySettingStateSummary properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
